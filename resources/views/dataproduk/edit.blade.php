@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Data</h1>
    <form method="POST" action="/dataproduk/{{ $dataproduk->id }}">
        @method('put')
        @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Produk" value="{{ $dataproduk -> nama_produk }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Harga Produk</label>
        <input type="text" name="harga" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Harga Produk" value="{{ $dataproduk -> harga }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Kategori Produk</label>
        <input type="text" name="kategori" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Kategori Produk" value="{{ $dataproduk -> kategori }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Status Produk</label>
        <input type="text" name="status" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Status Produk" value="{{ $dataproduk -> status }}">
      </div>


    <input type="submit" name="submit" value="Update" class="btn btn-info"></input><br>


    </form>
</div>


@endsection
