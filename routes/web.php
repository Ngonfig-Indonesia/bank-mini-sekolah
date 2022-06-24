<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\TabunganmasukController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\TariksaldoController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\TotaltabunganController;
use App\Http\Controllers\NasabahaktifController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home'])->name('portal.index');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil.index');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri.index');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasis.index');
Route::get('readmore/{id}', [HomeController::class, 'informasiDetail'])->name('informasi.detail');
Route::get('/siswa_guru', [HomeController::class, 'siswaGuru'])->name('siswa.gurus.index');
Route::get('/alumni', [HomeController::class, 'alumni'])->name('alumnis.index');


// NASABAH
Route::get('/admin', [AuthController::class, 'index'])->name('login');
Route::post('/admin/proses', [AuthController::class, 'login'])->name('proses.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/home', [Dashboard::class, 'index'])->name('home');
    Route::get('/admin/nasabah/', [NasabahController::class, 'index'])->name('nasabah.index');
    Route::post('/admin/nasabah/create', [NasabahController::class, 'create'])->name('nasabah.create');
    Route::get('/admin/nasabah/edit/{id}', [NasabahController::class, 'edit'])->name('nasabah.edit');
    Route::post('/admin/nasabah/update', [NasabahController::class, 'update'])->name('nasabah.update');
    Route::get('/admin/nasabah/delete/{id}', [NasabahController::class, 'delete'])->name('nasabah.delete');

    //JURUSAN
    Route::get('/admin/jurusan/', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::post('/admin/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::get('/admin/jurusan/edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::post('/admin/jurusan/update', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::get('/admin/jurusan/delete/{id}', [JurusanController::class, 'delete'])->name('jurusan.delete');

    //TABUNGAN MASUK
    Route::get('/admin/tabungan/', [TabunganmasukController::class, 'index'])->name('tabungan.index');
    Route::post('/admin/tabungan/create', [TabunganmasukController::class, 'create'])->name('tabungan.create');
    Route::get('/admin/tabungan/delete/{id}', [TabunganmasukController::class, 'delete'])->name('tabungan.delete');

    //SALDO
    Route::get('/admin/saldo/', [SaldoController::class, 'index'])->name('saldo.index');

    //TARIK SALDO
    Route::get('/admin/tariksaldo/', [TariksaldoController::class, 'index'])->name('tarik.index');
    Route::post('/admin/tariksaldo/create', [TariksaldoController::class, 'create'])->name('tarik.create');
    Route::get('/admin/tariksaldo/delete/{id}', [TariksaldoController::class, 'delete'])->name('tarik.delete');
    Route::get('/admin/tariksaldo/ceksaldo', [TariksaldoController::class, 'cekSaldo'])->name('cek.saldo');

    //TRANSFER
    Route::get('/admin/transfer/', [TransferController::class, 'index'])->name('transfer.index');
    Route::post('/admin/transfer/create', [TransferController::class, 'create'])->name('transfer.create');
    Route::get('/admin/transfer/delete/{id}', [TransferController::class, 'delete'])->name('transfer.delete');

    //TOTAL TABUNGAN SIMPAN
    Route::get('/admin/totaltabungan/', [TotaltabunganController::class, 'index'])->name('totaltabungan.index');

    //NASABAH AKTIF/NON AKTIF
    Route::get('/admin/nasabahaktif', [NasabahaktifController::class, 'index'])->name('nasabahaktif.index');
    
    // DATA USER
    Route::get('/admin/user/', [UserController::class, 'index'])->name('user.index');
    Route::post('/admin/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/admin/user/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    //WEB PORTAL
    Route::get('/admin/profile/', [PortalController::class, 'show'])->name('profil.show');
    Route::get('/admin/profile/edit/{id}', [PortalController::class, 'profilEdit'])->name('profil.edit');
    Route::post('/admin/profile/update', [PortalController::class, 'profilsUpdate'])->name('profil.update');

    Route::get('/admin/galeri/', [PortalController::class, 'galeri'])->name('galeri.show');
    Route::post('/admin/galeri/create', [PortalController::class, 'galeriCreate'])->name('galeri.create');
    Route::get('/admin/galeri/delete/{id}', [PortalController::class, 'galeriDelete'])->name('galeri.delete');

    Route::get('/admin/slide/', [PortalController::class, 'slide'])->name('slide.show');
    Route::post('/admin/slide/create', [PortalController::class, 'slideCreate'])->name('slide.create');
    Route::get('/admin/slide/delete/{id}', [PortalController::class, 'slideDelete'])->name('slide.delete');

    Route::get('/admin/informasi/', [PortalController::class, 'informasi'])->name('informasi.index');
    Route::post('/admin/informasi/create', [PortalController::class, 'informasiCreate'])->name('informasi.create');
    Route::get('/admin/informasi/edit/{id}', [PortalController::class, 'informasiEdit'])->name('informasi.edit');
    Route::get('/admin/informasi/delete/{id}', [PortalController::class, 'informasiDelete'])->name('informasi.delete');
    Route::post('/admin/informasi/update', [PortalController::class, 'informasiUpdate'])->name('informasi.update');

    Route::get('/admin/datasekolah', [PortalController::class, 'siswaGuru'])->name('siswa.guru.index');
    Route::post('/admin/datasekolah/createsiswa', [PortalController::class, 'siswaCreate'])->name('siswa.create');
    Route::post('/admin/datasekolah/createguru', [PortalController::class, 'guruCreate'])->name('guru.create');
    Route::get('/admin/datasekolah/editsiswa/{id}', [PortalController::class, 'editSiswa'])->name('edit.siswa');
    Route::get('/admin/datasekolah/editguru/{id}', [PortalController::class, 'editGuru'])->name('edit.guru');
    Route::get('/admin/datasekolah/siswa/delete/{id}', [PortalController::class, 'deleteSiswa'])->name('delete.siswa');
    Route::get('/admin/datasekolah/guru/delete/{id}', [PortalController::class, 'deleteGuru'])->name('delete.guru');
    Route::post('/admin/datasekolah/siswa/update', [PortalController::class, 'updateSiswa'])->name('update.siswa');
    Route::post('/admin/datasekolah/guru/update', [PortalController::class, 'updateGuru'])->name('update.guru');

    Route::get('/admin/alumni', [PortalController::class, 'alumni'])->name('alumni');
    Route::post('/admin/alumni/create', [PortalController::class, 'alumniCreate'])->name('alumni.create');
    Route::get('/admin/alumni/edit/{id}', [PortalController::class, 'alumniEdit'])->name('alumni.edit');
    Route::post('/admin/alumni/update', [PortalController::class, 'alumniUpdate'])->name('alumni.update');
    Route::get('/admin/alumni/delete/{id}', [PortalController::class, 'alumniDelete'])->name('alumni.delete');

});


