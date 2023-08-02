<?php

namespace App\Http\Controllers;
use App\Models\BarangMasuk;
use App\Models\Produk;
use Illuminate\Http\Request;

class BarangmasukController extends Controller
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
        $b_masuk = BarangMasuk::all();
        return view('barang_masuks.bmasuk', compact('b_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('barang_masuks.input', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produkmasuk = new BarangMasuk;
        $produkmasuk->produks_id    = $request['id_produk'];
        $produkmasuk->stokmasuk     = $request['stokmasuk'];
        $produkmasuk->tgl_masuk     = $request['tgl_masuk'];
        $produkmasuk->save();

        $tambahstok = Produk::find($request['id_produk']);
        $tambahstok->stok_awal   = $tambahstok->stok_awal + $request['stokmasuk'];
        $tambahstok->save();

        return redirect('b_masuk');
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
        $bmasuk = BarangMasuk::find($id);
        return view('barang_masuks.edit', compact('bmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produkmasuk = BarangMasuk::find($id);
        $produkmasuk->produks_id    = $request['id_produk'];
        $produkmasuk->stokmasuk     = $request['stokmasuk'];
        $produkmasuk->tgl_masuk     = $request['tgl_masuk'];
        $produkmasuk->save();

        $tambahstok = Produk::find($request['id_produk']);
        $tambahstok->stok_awal   = $tambahstok->stok_awal - $request['stokmasukawal'] + $request['stokmasuk'];
        $tambahstok->save();

        return redirect('b_masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
