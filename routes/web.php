<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::post('/', function () {
    return redirect('/login'); // Mengarahkan metode POST ke halaman login
});



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/inputpelanggan', function () {
    return view('inputpelanggan');
});

Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/inputpelanggan', [PelangganController::class, 'create'])->name('inputpelanggan.create');
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');

Route::get('/inputproduk', function () {
    return view('inputproduk');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/inputproduk', [ProdukController::class, 'create'])->name('inputproduk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

Route::get('/', [RegisterController::class, 'create'])->name('register');
Route::post('/', [RegisterController::class, 'store'])->name('register');
Route::view('/login', 'login')->name('login');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');
