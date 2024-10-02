<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftarbeasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); //utk inisialisasi tabel dgn variabel bernama nama
            $table->string('email')->unique(); //utk inisialisasi tabel dgn variabel bernama email dan dijadikan unique karena agar tidak ada yang duplikat
            $table->string('nomor_hp')->nullable(); //utk inisialisasi tabel dgn variabel nomor_hp
            $table->integer('semester'); //utk inisialisasi tabel dgn variabel bernama semester 
            $table->decimal('ipk', 3, 2); //ini utk memasukan IPK, kenapa 3,2 karena hanya akan mengizinkan total 3 digit, dengan 2 digit di belakang koma. Nilai max 4.00
            $table->string('beasiswa')->nullable(); //utk inisialisasi tabel dgn variabel bernama beasiswa dibuat nullable agar bisa diisi dengan null
            $table->string('berkas')->nullable(); //utk inisialisasi tabel dgn variabel bernama berkas yg berfungsi utk upload berkas
            $table->string('status_ajuan')->default('belum diverifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarbeasiswa');
    }
};
