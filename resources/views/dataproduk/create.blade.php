@extends('layouts.master')
@section('content')

<div class="container">
    <h1>Create Produk</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <form method="POST" action="/dataproduk/store">
        @csrf
        <div class="mb-3">

            <label for="formGroupExampleInput" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Produk">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Harga Produk</label>
            <input type="text" name="harga"  class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Harga Produk">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Kategori Produk</label>
            <input type="text" name="kategori"  class="form-control" id="formGroupExampleInput" placeholder="Masukkan Kategori Produk">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Status Produk</label>
            <input type="text" name="status"  class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Status Produk">
          </div>


        <input type="submit" name="submit" value="save" class="btn btn-info"></input><br>

    </form>
</div>

@endsection
