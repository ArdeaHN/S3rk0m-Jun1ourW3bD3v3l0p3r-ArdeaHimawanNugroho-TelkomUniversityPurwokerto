@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Hasil Pendaftaran Beasiswa</h2>
    <!-- jikalau kondisi database kosong -->
    @if ($beasiswa->isEmpty())
        <div class="alert alert-warning text-center">
            Anda belum mendaftar beasiswa.
        </div>
    <!-- jikalau kondisi database terisi -->
    @else
        <!-- membuat tabel -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <!-- untuk membuat penjelasan biar mempermudah pembacaan -->
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Beasiswa</th>
                        <th>Berkas</th>
                        <th>Status Ajuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beasiswa as $data)
                        <!-- mengambil semua data yang berada di database -->
                        <tr> 
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->nomor_hp }}</td>
                            <td>{{ $data->semester }}</td>
                            <td>{{ $data->ipk }}</td>
                            <td>{{ $data->beasiswa }}</td>
                            <td>{{ $data->berkas }}</td>
                            <td>{{ $data->status_ajuan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection