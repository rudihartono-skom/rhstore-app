@extends('mainapps')
@section('title') Produk @endsection
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-6"><h3>Produk</h3></div>
            <div class="col-6 text-end"><a href="/home">home</a> / <a>produk</a></div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-6"><h5>Data Produk</h5></div>
                    <div class="col-6 text-end"><a class="btn btn-primary btn-sm" href="/inputproduk">Tambah Produk</a></div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kode Produk</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $produk as $item )
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kode_produk }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->stok_awal }}</td>
                        <td><img src="{{ asset('storage/'. $item->foto_produk) }}" class="img-thumbhnail" width="50px" alt="Foto"></td>
                        <td>
                          <a class="btn btn-primary float-start" href="/editproduk/{{ $item->id }}">Edit</a>

                        <form action="/deleteproduk/{{ $item->id }}" method="post">
                            @method('delete')
                            @csrf
                          <button type="submit" class="btn btn-danger d-block border-0">Delete</button>
                        </form>

                          {{-- <a class="btn btn-danger" href="/deleteproduk/{{ $item->id }}">Delete</a> --}}
                          {{-- <input type="hidden" name="image" class="form-control" value="{{ $item->foto_produk }}"> --}}

                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
