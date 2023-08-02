@extends('mainapps')
@section('title') Input Produk Masuk @endsection
@section('content')
    <div class="container justify-content-center jus">
        <div class="row mt-3">
            <div class="col-6"><h3>Input Produk Masuk</h3></div>
            <div class="col-6 text-end"><a href="/home">home</a> / <a href="/b_masuk">Barang Masuk</a> / <a>input produk masuk</a></div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-6"><b>Formulir Input Tambah Stok</b></div>
                    <div class="col-6 text-end"><a class="btn btn-primary btn-sm" href="/b_masuk">Kembali</a></div>
                </div>
            </div>
            <div class="card-body">
               <form class="row g-3" action="/savebmasuk" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="col-md-6">
                        <label for="id_produk" class="form-label">Produk</label>
                        <select class="form-select" id="id_produk" name="id_produk">
                            @foreach ( $produk as $item )
                                <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="stokmasuk" class="form-label">Stok Masuk</label>
                        <input type="number" class="form-control" id="stokmasuk" name="stokmasuk" required>
                    </div>
                    <div class="col-md-12">
                        <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
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
