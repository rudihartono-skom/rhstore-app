<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produks.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produks.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kode=$request->kode_produk;
        $request->validate(
            [
                'foto_produk'=>'mimes:png,jpg,jpeg|image|max:2048',
            ]
        );

        $file=$request->file('foto_produk');
        $path=$file->storeAs('uploads', time(). '-' . $kode . '.' . $request->file('foto_produk')->extension());

        $produk = new Produk;
        $produk->kode_produk   = $request['kode_produk'];
        $produk->nama_produk   = $request['nama_produk'];
        $produk->harga         = $request['harga'];
        $produk->stok_awal     = $request['stok_awal'];
        $produk->foto_produk   = $path;
        $produk->save();

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('produks.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kode=$request->kode_produk;
        $request->validate(
            [
                'foto_produk'=>'mimes:png,jpg,jpeg|image|max:2048',
            ]
        );

        if ($request->file('foto_produk')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $file=$request->file('foto_produk');
            $path=$file->storeAs('uploads', time(). '-' . $kode . '.' . $request->file('foto_produk')->extension());
        } else {
            $path = $request->oldImage;
        }

        $produk = Produk::find($id);
        $produk->kode_produk   = $request['kode_produk'];
        $produk->nama_produk   = $request['nama_produk'];
        $produk->harga         = $request['harga'];
        $produk->stok_awal     = $request['stok_awal'];
        $produk->foto_produk   = $path;
        $produk->save();

        return redirect('produk');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($id->file('foto_produk')) {
                if ($id->oldImage) {
                    Storage::delete($id->oldImage);
                }
            }
        $hapus = Produk::withTrashed()->find($id);
        $pathFoto = $hapus->foto;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        Produk::onlyTrashed()->find($id)->delete();
        // if ($kryw->image) {
        //     Storage::delete($kryw->image);
        // }
        // User::destroy($kryw->id);
        // User::destroy('id', $id);

        // DB::table('users')->where('id', $id)->delete();
        return redirect('produk');
        // return redirect('/karyawan')->with('statusDel', 'Data Karyawan Berhasil Dihapus!');

    }
}
