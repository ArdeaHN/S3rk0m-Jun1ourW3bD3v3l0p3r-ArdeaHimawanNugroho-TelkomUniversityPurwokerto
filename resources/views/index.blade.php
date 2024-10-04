<!-- menarik data/extend dari layouts/app.blade.php -->
@extends('layouts.app') 

<!-- Mengatur judul halaman yang akan ditampilkan di tag <title> -->
@section('title', 'Informasi Pembuat Website')

@section('content')
<div class="container mt-5">

    <!-- Menampilkan grafik statistik pendaftaran beasiswa -->
    <div class="my-5">
        <h2 class="text-center mb-4">Statistik Pendaftaran Beasiswa</h2>
        
        <!-- Membuat container untuk grafik dengan ukuran dinamis -->
        <div class="chart-container" style="position: relative; height:60vh; width:80vw">
            <canvas id="beasiswaChart"></canvas> <!-- Elemen canvas untuk menampilkan grafik -->
        </div>
    </div>

    <!-- Membuat card yang rapi dan menarik untuk informasi pembuat website -->
    <div class="card text-center shadow mb-5 mt-3">
        <div class="card-header">
            <h3 class="mb-0">Ardea Himawan Nugroho</h3> <!-- Menampilkan nama pembuat website -->
        </div>
        <div class="card-body">
            <!-- Menampilkan email pembuat website sebagai link email -->
            <h5 class="card-title">Email: <a href="mailto:ardeahnugroho@gmail.com" class="text-info">ardeahnugroho@gmail.com</a></h5>
            
            <!-- Informasi lain seperti program studi, universitas, dan tahun pembuatan -->
            <p class="card-text">Program Studi: Teknik Informatika</p>
            <p class="card-text">Universitas: Telkom University Purwokerto</p>
            <p class="card-text">Tahun: 2024</p>
            
            <!-- Deskripsi mengenai tujuan pembuatan website ini -->
            <p class="card-text">Deskripsi: Website ini dibuat sebagai proyek untuk sertifikasi kompetensi BNSP periode September 2024.</p>
        </div>
        <div class="card-footer text-muted">
            Terima kasih telah mengunjungi halaman ini!
        </div>
    </div>

</div>

<!-- Menambahkan library Chart.js untuk menampilkan grafik -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Script untuk menginisialisasi grafik beasiswa dengan Chart.js -->
<script>
    // Mendapatkan konteks dari elemen canvas dengan id 'beasiswaChart'
    var ctx = document.getElementById('beasiswaChart').getContext('2d');
    
    // Membuat instance dari Chart.js untuk membuat grafik batang (bar chart)
    var beasiswaChart = new Chart(ctx, {
        type: 'bar', // Tipe grafik: bar chart
        data: {
            labels: ['Beasiswa Akademik', 'Beasiswa Non-Akademik', 'Beasiswa Prestasi', 'Beasiswa SPP'], // Label untuk sumbu X
            datasets: [{
                label: 'Jumlah Pendaftar', // Label pada grafik
                data: [
                    {{ $data['Beasiswa Akademik'] }},  // Mengambil data jumlah pendaftar beasiswa akademik dari backend
                    {{ $data['Beasiswa Non-Akademik'] }},  // Data jumlah pendaftar beasiswa non-akademik
                    {{ $data['Beasiswa Prestasi'] }},  // Data jumlah pendaftar beasiswa prestasi
                    {{ $data['Beasiswa SPP'] }}  // Data jumlah pendaftar beasiswa SPP
                ],
                // Warna background setiap batang pada grafik
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)',  // Warna untuk beasiswa akademik
                    'rgba(54, 162, 235, 0.6)',  // Warna untuk beasiswa non-akademik
                    'rgba(255, 206, 86, 0.6)',  // Warna untuk beasiswa prestasi
                    'rgba(153, 102, 255, 0.6)'  // Warna untuk beasiswa SPP
                ],
                // Warna border setiap batang pada grafik
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2 // Ketebalan border dari setiap batang grafik
            }]
        },
        options: {
            responsive: true, // Agar grafik responsif terhadap ukuran layar
            scales: {
                y: {
                    beginAtZero: true, // Agar sumbu Y dimulai dari 0
                    ticks: {
                        color: '#000', // Warna teks pada sumbu Y
                    },
                    grid: {
                        borderColor: '#ccc', // Warna grid pada grafik
                    }
                },
                x: {
                    ticks: {
                        color: '#000', // Warna teks pada sumbu X
                    },
                    grid: {
                        borderColor: '#ccc', // Warna garis grid pada sumbu X
                    }
                }
            },
            plugins: {
                legend: {
                    display: true, // Menampilkan legenda di atas grafik
                    position: 'top', // Posisi legenda
                    labels: {
                        color: '#000' // Warna teks pada legenda
                    }
                }
            }
        }
    });
</script>
@endsection
