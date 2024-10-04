<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeasiswaChartController extends Controller
{
    // app/Http/Controllers/BeasiswaController.php
    public function index()
    {
        $data = [
            'Beasiswa Akademik' => \App\Models\DaftarBeasiswa::where('beasiswa', 'Beasiswa Akademik')->count(),
            'Beasiswa Non-Akademik' => \App\Models\DaftarBeasiswa::where('beasiswa', 'Beasiswa Non-Akademik')->count(),
            'Beasiswa Prestasi' => \App\Models\DaftarBeasiswa::where('beasiswa', 'Beasiswa Prestasi')->count(),
            'Beasiswa SPP' => \App\Models\DaftarBeasiswa::where('beasiswa', 'Beasiswa SPP')->count(),
        ];

        return view('index', compact('data'));
    }

}
