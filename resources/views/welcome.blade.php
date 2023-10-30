@extends("layouts.base")

@section('content')
    <div class="welcome-banner">
        <h1>Selamat Datang di Toko Komputer Kami</h1>
        <p>Kami menyediakan berbagai macam produk komputer berkualitas.</p>
        <a href="/produk" class="btn">Lihat Produk Kami</a>
    </div>

    <div class="featured-products">
        <h2>Produk Unggulan</h2>
        <div class="product-card">
            <img src="aset/1.jpg" alt="ASUS TUF Gaming FX505DY" style="max-width: 25%;">
            <h3>ASUS TUF Gaming FX505DY</h3>
            <p>Mau beli laptop? ASUS TUF Gaming FX505DY bisa jadi pilihannya. Laptop dengan berat 2.2kg ini memiliki layar 15.6" dan resolusi 1920 x 1080pixels. Performanya juga tergolong mumpuni untuk mendukung pemakaian sehari-hari. Yuk, langsung saja dapatkan harga ASUS TUF Gaming FX505DY yang termurah mulai dari Rp 7.850.000</p>
            <p class="product-price">Harga: Rp 7.850.000 - Rp 15.999.000</p>
        </div>

        <!-- Tambahkan produk unggulan lainnya di sini -->
    </div>
    <div class="container text-center pt-4">
        Selamat Datang {{ auth()->user()->name }}
    </div>
    <div class="container text-center pt-4">
        Selamat Datang {{ auth()->user()->name }}
        <div class="div">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" value="Logout">
            </form>
        </div>
    </div>
@endsection
