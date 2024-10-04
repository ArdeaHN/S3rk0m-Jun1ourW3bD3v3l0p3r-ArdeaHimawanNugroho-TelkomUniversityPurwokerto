<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarBeasiswaController;
use App\Http\Controllers\BeasiswaChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BeasiswaChartController::class, 'index']); //route ke index.blade.php
Route::get('/beasiswa/index', [DaftarBeasiswaController::class, 'index'])->name('beasiswa.create'); //bakalan mengambil prosedur index di controller dan menampilkan beasiswa/create.blade.php
Route::post('/beasiswa', [DaftarBeasiswaController::class, 'store'])->name('beasiswa.store'); //bakalan mengambil fungsi store di controller dan mengirimkan hasil dari beasiswa/create.blade.php
Route::get('/beasiswa/result', [DaftarBeasiswaController::class, 'result'])->name('beasiswa.result'); //bakalan mengambil prosedur result di controller dan menampilkan beasiswa/result.blade.php
