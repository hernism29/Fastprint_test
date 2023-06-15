@extends('layouts.master')
@section('content')
<div class="container">
    <a class="btn btn-primary" href="/dataproduk/create"> Add Data Produk </a>
    <table border="1" width = "75" class="table table-striped">
    <tr>
        <td>Nama Produk</td>
        <td>Kategori</td>
        <td>Harga</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
    @foreach ( $dataproduk as $w)
    <tr>
        <input type="hidden" class="delete_id" value="{{ $w->id }}">
        <td>{{ $w->nama_produk }}</td>
        <td>{{ $w->kategori }}</td>
        <td>{{ $w->harga }}</td>
        <td>{{ $w->status }}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="/dataproduk/{{$w->id}}/edit" class="btn btn-warning"> Edit </a>
            <form action="/dataproduk/{{$w->id}}" method="POST">
                @csrf
                @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">
        </form>
            </div>
        </td>
    </tr>
    @endforeach
    </table>
</div>
@endsection

