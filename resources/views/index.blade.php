<!-- menarik data/extend dari layouts/app.blade.php -->
@extends('layouts.app') 

@section('title', 'Informasi Pembuat Website')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Informasi Pembuat Website</h1>

    <div class="card text-center shadow">
        <div class="card-header">
            <h2 class="mb-0">Ardea Himawan Nugroho</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Email: <a href="mailto:ardeahnugroho@gmail.com">ardeahnugroho@gmail.com</a></h5>
            <p class="card-text">Program Studi: Teknik Informatika</p>
            <p class="card-text">Telkom University Purwokerto</p>
            <p class="card-text">Tahun: 2024</p>
            <p class="card-text">Deskripsi: Website ini dibuat sebagai proyek untuk sertifikasi kompetensi BNSP periode September 2024.</p>
        </div>
        <div class="card-footer text-muted">
            Terima kasih telah mengunjungi halaman ini!
        </div>
    </div>
</div>
@endsection
