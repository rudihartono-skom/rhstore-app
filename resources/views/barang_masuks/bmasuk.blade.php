@extends('mainapps')
@section('title') Produk Masuk @endsection
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-6"><h3>Produk Masuk</h3></div>
            <div class="col-6 text-end"><a href="/home">home</a> / <a>produk masuk</a></div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-6"><h5>Data Produk Masuk</h5></div>
                    <div class="col-6 text-end"><a class="btn btn-primary btn-sm" href="/inputbmasuk">Input Produk</a></div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kode Produk</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Stok Masuk</th>
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $b_masuk as $item )
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->produks['kode_produk'] }}</td>
                        <td>{{ $item->produks['nama_produk'] }}</td>
                        <td>{{ $item->stokmasuk }}</td>
                        <td>{{ $item->tgl_masuk }}</td>
                        <td>
                          <a class="btn btn-primary float-start" href="/editbmasuk/{{ $item->id }}">Edit</a>
                          <a class="btn btn-danger" href="/deletebmasuk/{{ $item->id }}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
