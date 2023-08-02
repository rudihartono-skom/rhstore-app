@extends('mainapps')
@section('title') Edit Produk @endsection
@section('content')
    <div class="row mt-3">
        <div class="col-6"><h3>Edit Produk</h3></div>
        <div class="col-6 text-end"><a href="/home">home</a> / <a href="/produk">produk</a> / <a>edit produk</a></div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col-6"><b>Formulir Edit Produk</b></div>
                <div class="col-6 text-end"><a class="btn btn-primary" href="/produk">Kembali</a></div>
            </div>
        </div>
        <div class="card-body">
            <form class="row g-3" action="/updateproduk/{{ $produk->id }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="col-md-6">
                    <label for="kode" class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" id="kode" name="kode_produk" value="{{ $produk->kode_produk }}" required>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama_produk" value="{{ $produk->nama_produk }}" required>
                </div>
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}" required>
                </div>
                <div class="col-md-6">
                    <label for="stok_awal" class="form-label">Stok</label>
                    <input type="hidden" class="form-control" id="stok_awal" name="stok_awal" value="{{ $produk->stok_awal }}" required>

                    <input type="number" class="form-control" value="{{ $produk->stok_awal }}" disabled>
                </div>
                <div class="col-md-12">
                    <input type="hidden" name="oldImage" value="{{ $produk->foto_produk }}">
                    <div class="row">
                        <label class="form-label">Foto Produk</label>
                        <div class="col-3">
                            <img src="{{ asset('storage/'. $produk->foto_produk) }}" class="img-thumbhnail" width="100%" alt="Foto">
                        </div>
                        <div class="col-9">
                            <label for="foto_produk" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-end">
                    <button class="btn btn-success btn-sm" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
