@extends("layouts.base")
@section('content')
<div class="container">
    <h2>Hubungi Kami</h2>
    <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami. Kami siap membantu Anda.</p>

    <div class="row">
        <div class="col-md-6">
            <h3>Informasi Kontak</h3>
            <p>Anda dapat menghubungi kami melalui:</p>
            <ul>
                <li><strong>Alamat:</strong> Jalan Otto Iskandardinata No. 22, Samarinda</li>
                <li><strong>Telepon:</strong> 082215477062</li>
                <li><strong>Email:</strong> Rayhan212422@gmail.com</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Formulir Kontak</h3>
            <p>Silakan gunakan formulir di bawah ini untuk mengirim pesan kepada kami:</p>
            <form action="/kirim-pesan" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
