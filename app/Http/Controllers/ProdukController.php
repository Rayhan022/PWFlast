<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

public function index()
{
    $produk = produk::all();//ORM
    return view('produk', ['produk' => $produk]);

    //$produk= DB::table('produk')->get(); // Menggunakan Query Builder
        //return view('produk', ['produk' => $produk]);

}
    public function create()
    {
        return view('inputproduk'); // Menampilkan halaman formulir inputproduk.blade.php
    }

    public function store(Request $request)
{
    // Validasi data yang diterima dari formulir, termasuk gambar
    $validatedData = $request->validate([
        'nama_produk' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'kategori' => 'required|string|max:255',
        'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
    ]);

    $gambarPath = $request->file('gambar_produk')->store('public/gambar_produk');

    $gambarName = basename($gambarPath);

    // Simpan data ke dalam database
    DB::table('produk')->insert([
        'nama_produk' => $validatedData['nama_produk'],
        'deskripsi' => $validatedData['deskripsi'],
        'harga' => $validatedData['harga'],
        'stok' => $validatedData['stok'],
        'kategori' => $validatedData['kategori'],
        'gambar_produk' => $gambarName, // Simpan nama file gambar ke dalam kolom gambar_produk
    ]);

    // Redirect ke halaman lain atau tampilkan pesan sukses jika diperlukan
    return redirect()->route('inputproduk.create')->with('success', 'Data produk telah disimpan.');
}
};