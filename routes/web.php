<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/menu_bukuphb3sunflo', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('admin/home',\App\Http\Controllers\HomeController::class . '@index');

// Route::prefix('admin')->middleware(['auth','cekAdmin'])->group(function(){
    
Route::get('/index',\App\Http\Controllers\IndexController::class . '@index')->name('admin.home')->middleware('cekAdmin');

//buku penghubung
Route::get('/menu_bukuphb3sunflo',\App\Http\Controllers\BukuPhbController::class . '@phbkls3sunflo');
// Route::get('/bukuphb/create',\App\Http\Controllers\BukuPhbController::class . '@create');
// Route::post('/bukuphb/store',\App\Http\Controllers\BukuPhbController::class . '@store');
// Route::get('/bukuphb/edit/{id}',\App\Http\Controllers\BukuPhbController::class . '@edit');
// Route::post('/bukuphb/update',\App\Http\Controllers\BukuPhbController::class . '@update');
// Route::get('/bukuphb/cetakpdf',\App\Http\Controllers\BukuPhbController::class . '@cetakpdf');

//siswa
Route::get('/menu_siswa3sunflo', [App\Http\Controllers\SiswaController::class, 'kelastigasunflower']);
Route::get('/siswa/create',[\App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa/store',[App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}',[\App\Http\Controllers\SiswaController::class, 'edit']);
// Route::post('/siswa/update',\App\Http\Controllers\SiswaController::class . '@update');
// Route::get('/siswa/cetakpdf',\App\Http\Controllers\SiswaController::class . '@cetakpdf');
Route::delete('/siswa/delete/{id}',[\App\Http\Controllers\SiswaController::class, 'destroy']);

//user
Route::get('/menu_userpengguna',\App\Http\Controllers\UserController::class . '@index');
// Route::get('/user/create',\App\Http\Controllers\UserController::class . '@create');
// Route::post('/user/store',\App\Http\Controllers\UserController::class . '@store');
// Route::get('/user/edit/{id}',\App\Http\Controllers\UserController::class . '@edit');
// Route::post('/user/update',\App\Http\Controllers\UserController::class . '@update');

//kompetensi dasar
Route::get('/menu_kdkls3',\App\Http\Controllers\KompetensiDasarController::class . '@index');
// Route::get('/kompetensidasar/cetakpdf',\App\Http\Controllers\KompetensiDasarController::class . '@cetakpdf');

//penilaian individu siswa
Route::get('/menu_penilaian',\App\Http\Controllers\PenilaianController::class . '@penilaian');
// Route::get('/presensi/create',\App\Http\Controllers\PresensiController::class . '@create');
// Route::post('/presensi/store',\App\Http\Controllers\PresensiController::class . '@store');
// Route::get('/presensi/edit/{id}',\App\Http\Controllers\PresensiController::class . '@edit');
// Route::post('/presensi/update',\App\Http\Controllers\PresensiController::class . '@update');
// Route::get('/presensi/destroy/{id}',\App\Http\Controllers\PresensiController::class . '@destroy');
// Route::get('/presensi/cetakpdf',\App\Http\Controllers\PresensiController::class . '@cetakpdf');

//rapor tengah semester
Route::get('/menu_raportengah',\App\Http\Controllers\RaporTengahController::class . '@raportengah');

//rapor akhir semester
Route::get('/menu_raporakhir',\App\Http\Controllers\RaporAkhirController::class . '@raporakhir');

// });


