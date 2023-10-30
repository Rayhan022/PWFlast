@extends('layouts.base')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $product)
                <tr>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
