<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarBeasiswa;

class DaftarBeasiswaController extends Controller
{
    public function index()
    {
        return view('beasiswa.create'); //untuk memanggil fungsi create
    }

    // Menyimpan data pendaftaran
    public function store(Request $request) {
        // Validasi input dari form
        $request -> validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:daftarbeasiswa', // Pastikan nama tabel benar
            'kode_area' => 'required|string|max:5', // Validasi untuk kode area
            'nomor_hp' => 'required|digits_between:6,15', // Nomor HP harus diisi
            'semester' => 'required|integer|between:1,8', // Semester hanya 1-8
            'ipk' => 'required|numeric|between:0,4.00', // Validasi untuk IPK
            'berkas' => 'required|mimes:pdf,jpg,zip,png|max:2048', // Berkas harus PDF, JPG, atau ZIP
        ]);

        // Jika IPK kurang dari 3, kembalikan error
        if ($request -> ipk < 3) {
            return back() -> with('error', 'Maaf, IPK Anda tidak memenuhi syarat.');
        }

        // Simpan berkas yang di-upload
        $berkasPath = $request -> file('berkas') -> store('berkas_beasiswa');
        //menggabungkan antara kode area dan nomor hp
        $nomorHp = $request->kode_area . ltrim($request->nomor_hp, '0'); // Menghapus angka 0 di depan nomor HP dan menggabungkan antara nomor hp dan kode area
        // Simpan data pendaftaran ke database
        DaftarBeasiswa::create([
            'nama' => $request -> nama, //memasukan data ke variabel nama
            'email' => $request -> email, //memasukan data ke variabel email
            'nomor_hp' => $nomorHp,  //memasukan data ke nomor_hp dengan variable gabungan
            'semester' => $request -> semester, //memasukan data ke variabel semester
            'ipk' => $request -> ipk, // Simpan nilai IPK dari input
            'beasiswa' => $request -> beasiswa, // Misalnya, bisa disesuaikan
            'berkas' => $berkasPath, //memasukan data path berkas ke database
            'status_ajuan' => 'belum diverifikasi'
        ]);

        return redirect() -> route('beasiswa.result') -> with('success', 'Pendaftaran berhasil!'); //kembali ke beasiswa.result ketika berhasil menambahkan data
    }


    // Menampilkan hasil pendaftaran
    public function result()
    {
        $beasiswa = DaftarBeasiswa::all(); //menarik semua data yang dari database
        return view('beasiswa.result', compact('beasiswa')); //memperlihatkan hasil yang isinya dari database
    }
}
