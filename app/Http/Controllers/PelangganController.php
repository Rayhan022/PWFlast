<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{

//menampilkan data dari database
public function index()
{
    $pelanggan = Pelanggan::all();//ORM
    return view('pelanggan', ['pelanggan' => $pelanggan]);

    //$pelanggan = DB::table('pelanggan')->get(); // Menggunakan Query Builder
        //return view('pelanggan', ['pelanggan' => $pelanggan]);

}

//buat dan save data ke database
    public function create()
    {
        return view('inputpelanggan'); // Menampilkan halaman formulir inputpelanggan.blade.php
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
        ]);

        DB::table('pelanggan')->insert([
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'alamat' => $validatedData['alamat'],
            'nomor_telepon' => $validatedData['nomor_telepon'],
        ]);
        // Redirect ke halaman lain atau tampilkan pesan sukses jika diperlukan
        return redirect()->route('inputpelanggan.create');//->with('success', 'Data pelanggan telah disimpan.');
    }
}
