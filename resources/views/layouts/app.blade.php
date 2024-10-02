<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .active-button {
            background-color: #007bff; /* Ganti warna sesuai keinginan */
            color: white; /* Ganti warna teks sesuai keinginan */
        }
    </style>
</head>
<body>
    <!-- template bootstrap 4 navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href={{ url('/') }} id="pilihanBeasiswa">Pilihan Beasiswa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('beasiswa.create') }}" id="daftar">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('beasiswa.result') }}" id="hasil">Hasil</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- penjelasan 
    navbar: Menandakan bahwa elemen ini adalah navigasi (header bar).
    navbar: Menandakan bahwa elemen ini adalah navigasi (header bar).
    navbar-expand-lg: Memungkinkan navbar untuk diperluas pada layar yang lebih besar (ukuran lg atau lebih besar).
    navbar-light bg-light: Mengatur gaya navigasi dengan warna terang, menggunakan background warna terang (bg-light) dan elemen navigasi yang sesuai dengan tema terang.
    rounded: Bootstrap class untuk memberikan sudut yang membulat pada navbar.
    navbar-toggler: Tombol yang akan muncul pada tampilan mobile atau layar kecil. Ini menampilkan hamburger menu yang dapat digunakan untuk menampilkan atau menyembunyikan navigasi.
    data-toggle="collapse" dan data-target="#navbarsExample10": Mengatur perilaku tombol untuk menampilkan atau menyembunyikan elemen navbar ketika tombol ditekan.
    aria-*: Atribut ini digunakan untuk meningkatkan aksesibilitas bagi pengguna pembaca layar. Mereka memberikan deskripsi tambahan untuk elemen interaktif, seperti kontrol navigasi.
    navbar-toggler-icon: Ikon hamburger (tiga garis horizontal) yang digunakan di dalam tombol.
    collapse navbar-collapse: Mengatur bahwa navbar akan otomatis "collapse" (disembunyikan) pada layar kecil, dan hanya akan muncul saat tombol hamburger diklik.
    justify-content-md-center: Mengatur navbar agar semua item di dalamnya disejajarkan ke tengah untuk layar medium (md) atau lebih besar.
    ul.navbar-nav: Membuat list (daftar) dari item-item navigasi.
    li.nav-item: Mengatur setiap elemen navigasi sebagai item individu dalam daftar.
    a.nav-link: Mengatur setiap item navigasi sebagai link yang dapat diklik.
    <span class="sr-only">(current)</span>: Ini adalah elemen accessibility yang tersembunyi secara visual tetapi tetap terbaca oleh pembaca layar. Tujuannya adalah untuk memberi tahu pengguna pembaca layar bahwa ini adalah halaman aktif saat ini.
    href/route : untuk mengarah ke halaman hasil sesuai dengan penamaan
    id="pilihanBeasiswa", id="daftar", id="hasil": Memberikan ID untuk setiap elemen navigasi, yang bisa digunakan nanti untuk pengaturan styling atau logika JavaScript.
    -->

    <div class="container mt-5">
        @yield('content')
        <!-- mendefinisikan tempat di dalam layout utama di mana konten spesifik dari view yang diturunkan akan dimasukkan. -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Menambahkan event listener pada link untuk mengubah warna saat ditekan
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                // Menghapus kelas 'active-button' dari semua link
                navLinks.forEach(nav => nav.classList.remove('active-button'));
                
                // Menambahkan kelas 'active-button' ke link yang ditekan
                this.classList.add('active-button');
            });
        });

        // Memeriksa URL saat ini untuk menandai link yang aktif
        const currentUrl = window.location.href;
        navLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active-button');
            }
        });
    </script>
</body>
</html>
