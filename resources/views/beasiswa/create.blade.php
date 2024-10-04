@extends('layouts.app')

@section('title', 'Pendaftaran Beasiswa')

@section('content')
<div class="container py-5"> 
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                {{-- 
                    <div class="container py-5">: Membuat container Bootstrap dengan padding di bagian atas dan bawah (py-5 memberikan padding vertikal).
                    <div class="row justify-content-center">: Membuat baris Bootstrap yang mengatur konten agar berada di tengah layar.
                    <div class="col-md-6">: Membuat kolom dengan lebar 6 dari 12 kolom pada layar medium (md) ke atas, sehingga form berada di tengah dengan lebar yang sesuai.
                    <div class="card shadow-sm">: Elemen Bootstrap yang memberikan tampilan seperti kartu dengan sedikit bayangan agar tampilan lebih elegan.
                --}}
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center mb-0">Pendaftaran Beasiswa</h2>
                </div>
                {{-- <div class="card-header bg-primary text-white">: Kartu ini memiliki header dengan latar belakang biru (bg-primary) dan teks putih (text-white). --}}
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data" id="pendaftaranForm">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan Nama:</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        {{-- <div class="mb-3">: Membuat margin bawah (mb-3) agar elemen tidak terlalu berdekatan dengan elemen lainnya. --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Masukkan Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_area" class="form-label">Kode Area:</label>
                            <select name="kode_area" class="form-control" required>
                                <option value="+62">+62 (Indonesia)</option>
                                <option value="+1">+1 (Amerika Serikat)</option>
                                <option value="+44">+44 (Inggris)</option>
                                <option value="+61">+61 (Australia)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_hp" class="form-label">Nomor HP:</label>
                            <input type="number" name="nomor_hp" class="form-control" required placeholder="Nomor tanpa kode area">
                        </div>
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester:</label>
                            <select name="semester" class="form-control" required>
                                @for ($i = 1; $i <= 8; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ipk" class="form-label">IPK:</label>
                            <input type="text" class="form-control" id="ipk" name="ipk" readonly value="3.5">
                        </div>
                        <div class="mb-3">
                            <label for="beasiswa" class="form-label">Pilihan Beasiswa:</label>
                            <select class="form-control" id="beasiswa" name="beasiswa" required disabled>
                                <option value="">Pilihan Beasiswa</option>
                                <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                                <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                                <option value="Beasiswa Prestasi">Beasiswa Prestasi</option>
                                <option value="Beasiswa SPP">Beasiswa SPP</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="berkas" class="form-label">Upload Berkas:</label>
                            <input type="file" name="berkas" class="form-control" id="berkasgroup" required disabled>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" id="daftarButton" disabled>Simpan</button>
                            <a href="/" class="btn btn-secondary" id="batalButton">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ipkValue = parseFloat(document.getElementById('ipk').value);
        const beasiswa = document.getElementById('beasiswa');
        const berkasgroup = document.getElementById('berkasgroup');
        const daftarButton = document.getElementById('daftarButton');

        if (ipkValue < 3) {
            beasiswa.disabled = true;
            berkasgroup.disabled = true;
            daftarButton.disabled = true;
            alert('IPK Anda di bawah 3, tidak dapat melanjutkan pendaftaran beasiswa.');
        } else {
            beasiswa.disabled = false;
            berkasgroup.disabled = false;
            daftarButton.disabled = false;
        }
    });
</script>
@endsection