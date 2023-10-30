<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Nama tabel di database
    protected $primaryKey = 'product_id'; // Nama kolom primary key

    protected $fillable = ['nama_produk', 'deskripsi', 'harga', 'stok', 'kategori', 'gambar_produk']; // Tambahkan 'gambar_produk' ke dalam fillable
}
