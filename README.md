# Proyek Pendaftaran Beasiswa Sertifikasi Kompetensi Teknik Informatika Telkom University Purwokerto - Ardea Himawan Nugroho | 21102076

## Deskripsi
Proyek ini adalah sebuah aplikasi web pendaftaran beasiswa yang dibangun menggunakan framework Laravel. Aplikasi ini menyediakan fitur untuk pendaftaran beasiswa, melihat hasil pendaftaran dan ada informasi terkait pembuat website ini.

Versi PHP yang digunakan : PHP 8.1.25
Versi XAMPP yang digunakan : 8.1.25
Versi Bootstrap yang digunakan : bootstrap 4.5.2


## Struktur Folder
Berikut adalah struktur utama folder dalam proyek ini:

├── app/ │ ├── Console/ │ ├── Exceptions/ │ ├── Http/ │ │ ├── Controllers/ │ │ ├── Middleware/ │ └── Models/ ├── bootstrap/ ├── config/ ├── database/ │ ├── migrations/ │ ├── seeders/ ├── public/ │ ├── assets/ │ │ ├── css/ │ │ ├── js/ │ ├── images/ ├── resources/ │ ├── views/ │ ├── lang/ │ └── sass/ ├── routes/ │ ├── web.php ├── storage/ ├── tests/ ├── vendor/


### Penjelasan Folder
- **app/**: Berisi logika bisnis aplikasi. Di dalamnya terdapat berbagai komponen utama seperti **Controllers**, **Models**, dan **Middleware**.
  - **Http/Controllers/**: Folder ini berisi semua controller yang mengatur request dan response aplikasi. Setiap fitur aplikasi seperti pendaftaran beasiswa, hasil pendaftaran, dikelola oleh controller di sini.
  - **Models/**: Berisi model yang merepresentasikan tabel dalam database dan mengelola interaksi dengan database menggunakan Eloquent ORM.
  
- **bootstrap/**: Folder ini berisi file yang bertanggung jawab untuk mem-boot aplikasi dan melakukan berbagai proses inisialisasi.

- **config/**: Di dalam folder ini terdapat berbagai file konfigurasi untuk komponen seperti database, mail, dan cache.

- **database/**: Folder ini berisi **migrations** yang berfungsi untuk membuat dan mengelola tabel di database, serta **seeders** yang digunakan untuk mengisi data dummy.

- **public/**: Folder ini berisi file statis yang dapat diakses oleh publik seperti **CSS**, **JavaScript**, dan **gambar**.
  - **assets/css/**: Folder untuk menyimpan file **CSS** yang digunakan untuk styling halaman.
  - **assets/js/**: Folder untuk menyimpan file **JavaScript**.
  - **images/**: Berisi file gambar yang digunakan di dalam aplikasi.

- **resources/**: Berisi sumber daya tampilan dan bahasa.
  - **views/**: Berisi template blade yang digunakan untuk merender halaman HTML.
  - **lang/**: Berisi file terjemahan untuk mendukung aplikasi dengan berbagai bahasa.
  - **sass/**: Folder ini berisi file **SASS** yang digunakan untuk styling.

- **routes/**: Berisi file yang mendefinisikan rute aplikasi, mengarahkan URL tertentu ke controller yang sesuai.
  - **web.php**: Mendefinisikan rute aplikasi yang menggunakan web middleware.

- **storage/**: Berisi file yang dihasilkan aplikasi seperti cache, logs, dan file upload.

- **vendor/**: Folder ini berisi library eksternal yang diinstal menggunakan Composer.

### Penjelasan Sumber Daya Pemrograman

- **Blade Template Engine**: Laravel menggunakan Blade sebagai templating engine untuk memisahkan logika pemrograman dengan tampilan. Blade memungkinkan kita untuk membuat halaman dinamis dengan sintaks sederhana.
  
- **Eloquent ORM**: Laravel menyediakan Eloquent sebagai ORM (Object-Relational Mapping) yang memudahkan kita berinteraksi dengan database menggunakan model. Eloquent mendukung operasi CRUD secara efisien dan memungkinkan relasi antar tabel.

- **Middleware**: Middleware digunakan untuk memfilter request HTTP yang masuk ke aplikasi. Contoh penggunaan middleware adalah memastikan bahwa user telah terautentikasi sebelum mengakses halaman tertentu.

- **Routes**: Rute digunakan untuk mengatur URL dan request HTTP. Dalam Laravel, rute diatur di dalam file `web.php` dan dapat diarahkan ke controller yang sesuai.

- **Migrations**: Digunakan untuk membuat dan mengubah struktur tabel di database. Migrations membantu dalam manajemen versi database agar tetap sinkron dengan pengembangan aplikasi.

- **Seeder**: Laravel menyediakan **seeder** untuk mengisi data dummy atau data awal ke dalam tabel database.

- **Composer**: Composer digunakan untuk manajemen dependensi dalam proyek ini. Semua library pihak ketiga diinstal dan diatur menggunakan composer.json.

---

### Cara Menjalankan Proyek

1. **Clone Repository**:
git clone https://github.com/username/nama-project.git cd nama-project

2. **Instal Dependensi**:
composer install npm install

3. **Konfigurasi Environment**:
- Salin file `.env.example` menjadi `.env`
- Sesuaikan konfigurasi database di file `.env`

4. **Generate App Key**:
php artisan key

5. **Migrasi Database**:
import database yang tersedia (.sql) ke phpmyadmin/mysql

6. **Jalankan Aplikasi**:
php artisan serve

Aplikasi akan berjalan di `http://localhost:8000`.

---

### Teknologi yang Digunakan
- **PHP**: Bahasa pemrograman utama untuk backend.
- **Laravel**: Framework PHP yang digunakan untuk membangun aplikasi.
- **Bootstrap**: Digunakan untuk styling dan memastikan tampilan yang responsif.
- **MySQL**: Database yang digunakan untuk menyimpan data pendaftar beasiswa.

