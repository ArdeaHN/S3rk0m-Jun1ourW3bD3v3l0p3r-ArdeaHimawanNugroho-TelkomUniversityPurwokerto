@extends('layouts.app')

@section('title', 'Pendaftaran Beasiswa')

@section('content')
<div class="container">
    <h2>Pendaftaran Beasiswa</h2>
    <!-- kalau gagal -->
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <!-- jikalau berhasil -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
     <!-- untuk membuat fungsi send ke daftarbeasiswacontroller  -->
    <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data" id="pendaftaranForm">
        @csrf
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="nomor_hp">Nomor HP:</label>
            <select name="kode_area" class="form-control" required>
                <option value="+62">+62 (Indonesia)</option>
                <option value="+1">+1 (Amerika Serikat)</option>
                <option value="+44">+44 (Inggris)</option>
                <option value="+61">+61 (Australia)</option>
            </select>
            <input type="number" name="nomor_hp" class="form-control" required placeholder="Nomor tanpa kode area">
        </div>

        <div class="form-group">
            <label for="beasiswa">Jenis Beasiswa:</label>
            <select class="form-control" id="beasiswa" name="beasiswa" required disabled>
                <option value="">Pilihan Beasiswa</option>
                <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                <option value="Beasiswa Prestasi">Beasiswa Prestasi</option>
                <option value="Beasiswa SPP">Beasiswa SPP</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="semester">Semester:</label>
            <select name="semester" class="form-control" required>
                @for ($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="ipk">IPK:</label>
            <input type="text" class="form-control" id="ipk" name="ipk" readonly value="3.4"> <!-- Menggunakan nilai IPK konstanta -->
        </div>

        <div class="form-group">
            <label for="berkas">Upload Berkas:</label>
            <input type="file" name="berkas" class="form-control" id="berkasgroup" required disabled>
        </div>

        <button type="submit" class="btn btn-primary" id="daftarButton" disabled>Simpan</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ipkValue = parseFloat(document.getElementById('ipk').value); // Ambil nilai IPK otomatis dari value
        const beasiswa = document.getElementById('beasiswa');
        const berkasgroup = document.getElementById('berkasgroup');
        const daftarButton = document.getElementById('daftarButton');

        if (ipkValue < 3) {
            // Jika IPK kurang dari 3, semua elemen dinonaktifkan
            beasiswa.disabled = true; // Nonaktifkan pilihan beasiswa
            berkasgroup.disabled = true; // Nonaktifkan upload berkas
            daftarButton.disabled = true; // Nonaktifkan tombol simpan
            alert('IPK Anda di bawah 3, tidak dapat melanjutkan pendaftaran beasiswa.');
        } else {
            // Jika IPK lebih dari atau sama dengan 3, aktifkan semua elemen
            beasiswa.disabled = false; // Aktifkan pilihan beasiswa
            berkasgroup.disabled = false; // Aktifkan upload berkas
            daftarButton.disabled = false; // Aktifkan tombol simpan
        }
    });
</script>

@endsection
