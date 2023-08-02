@extends('mainapps')
@section('title') Tambah Produk @endsection
@section('content')
    <div class="container justify-content-center jus">
        <div class="row mt-3">
            <div class="col-6"><h3>Input Produk</h3></div>
            <div class="col-6 text-end"><a href="/home">home</a> / <a href="/produk">produk</a> / <a>input produk</a></div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-6"><b>Formulir Input Produk</b></div>
                    <div class="col-6 text-end"><a class="btn btn-primary btn-sm" href="/produk">Kembali</a></div>
                </div>
            </div>
            <div class="card-body">
               <form class="row g-3" action="/saveproduk" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="col-md-6">
                        <label for="kode" class="form-label">Kode Produk</label>
                        <input type="text" class="form-control" id="kode" name="kode_produk" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama_produk" required>
                    </div>
                    <div class="col-md-6">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="col-md-6">
                        <label for="stok_awal" class="form-label">Stok Awal</label>
                        <input type="number" class="form-control" id="stok_awal" name="stok_awal" required>
                    </div>
                    <div class="col-md-12">
                        <label for="foto_produk" class="form-label">Foto Produk</label>
                        <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*" required>
                    </div>
                    <div class="col-md-12 text-end">
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
               </form>
            </div>
        </div>
    </div>
@endsection
