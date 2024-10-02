<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBeasiswa extends Model
{
    use HasFactory;
    
    // ini utk membuat agar isi dari tabel daftar beasiswa dapat di isi sesuai dengan request di controller dan views
    protected $fillable = [
        'nama', 'email', 'kode_area' , 'nomor_hp', 'semester', 'ipk', 'beasiswa', 'berkas', 'status_ajuan'
    ]; 


    // ini untuk memastikan bahwa tetap berada di table daftarbeasiswa
    protected $table = 'daftarbeasiswa';
}
