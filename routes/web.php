<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewabsenController;


// mhs
use App\Http\Controllers\Mhs\AbsenController as MhsAbsenController;
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

Route::get('/', function () {
    return view('layout.Landing');
})->name('login');

//LOGIN
//Route::get('/login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('/proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {

//BAGIAN ADMIN
        Route::get('/dashboard', function () {
            return view('dashboard');
        });

//adminprodi
        Route::get('/halaman_admin', [UserController::class, 'data']);
        Route::get('/admin/tambah', [UserController::class, 'tambah']);
        Route::post('/add_admin', [UserController::class, 'addProcess']);
        Route::get('/edit-admin/{admin:id}', [UserController::class, 'edit']);
        Route::post('/update-admin/{admin:id}', [UserController::class, 'update']);
        Route::get('/hapus-admin/{admin:id}', [UserController::class, 'delete']);

//dosen
        Route::get('/dosen', [DosenController::class, 'data']);
        Route::get('/dosen/form-tambah', [DosenController::class, 'form_tambah']);
        Route::post('/add_dosen', [DosenController::class, 'addProcess']);
        Route::get('/edit-dosen/{dosen:nidn}', [DosenController::class, 'edit']);
        Route::post('/update-dosen/{dosen:nidn}', [DosenController::class, 'update']);
        Route::get('/hapus-dosen/{dosen:nidn}', [DosenController::class, 'delete']);

//jadwal
        Route::get('/jadwal', [JadwalController::class, 'data']);
        Route::get('/jadwal/tambah', [JadwalController::class, 'tambah']);
        Route::post('/add_jadwal', [JadwalController::class, 'addProcess']);

//kelas
        Route::get('/kelas', [KelasController::class, 'data']);

//mahasiswa
        Route::get('/mahasiswa', [MahasiswaController::class, 'data']);
        Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
        Route::post('/add_mahasiswa', [MahasiswaController::class, 'addProcess']);
        Route::get('/edit-mhs/{mahasiswa:id}', [MahasiswaController::class, 'edit']);
        Route::post('/update-mhs/{mahasiswa:id}', [MahasiswaController::class, 'update']);
        Route::get('/hapus-mhs/{mahasiswa:id}', [MahasiswaController::class, 'delete']);
        Route::get('/detail-mahasiswa/{mahasiswa:id}', [MahasiswaController::class, 'detail']);

//matkul
        Route::get('/matkul', [MatkulController::class, 'data']);
        Route::get('/matkul/tambah', [MatkulController::class, 'tambah']);
        Route::post('/add_matkul', [MatkulController::class, 'addProcess']);
        Route::get('/edit-matkul/{matkul:kode_matkul}', [MatkulController::class, 'edit']);
        Route::post('/update-matkul/{matkul:kode_matkul}', [MatkulController::class, 'update']);
        Route::get('/hapus-matkul/{matkul:kode_matkul}', [MatkulController::class, 'delete']);

//pengumuman
        Route::get('/pengumuman', [PengumumanController::class, 'data']);
        Route::get('/pengumuman/tambah', [PengumumanController::class, 'tambah']);
        Route::post('/add_peng', [PengumumanController::class, 'addProcess']);
        Route::get('/edit-peng/{pengumuman:id}', [PengumumanController::class, 'edit']);
        Route::post('/update-peng/{pengumuman:id}', [PengumumanController::class, 'update']);
        Route::get('/hapus-peng/{pengumuman:id}', [PengumumanController::class, 'delete']);

//rekap

//viewabsen
        Route::get('/index', [ViewabsenController::class, 'data']);

    });
});

//BAGIAN MAHASISWA
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:mahasiswa']], function () {

//home mahasiswa
        Route::get('/awal', function () {
            return view('dashboard2');
        })->name('home');

//show data
        Route::get('/dosen2', [DosenController::class, 'datadua'])->name('dosen2');
        Route::get('/jadwal2', [JadwalController::class, 'datadua'])->name('jadwal2');
        Route::get('/matkul2', [MatkulController::class, 'datadua'])->name('matkul2');
        Route::get('/pengumuman2', [PengumumanController::class, 'datadua'])->name('pengumuman2');
        Route::get('/absensi', [MhsAbsenController::class, 'index'])->name('absensi');
        Route::post('/hadir', [MhsAbsenController::class, 'hadir'])->name('hadir');
        Route::get('/absen', [AbsenController::class, 'index']);

//profil
        Route::get('/profil_mahasiswa/{profil:id}', [ProfilController::class, 'profil'])->name('prof_mhs');
// Route::get('/admin/tambah', [UserController::class, 'tambah']);
        // Route::post('/add_admin', [UserController::class, 'addProcess']);
        // Route::get('/edit-admin/{admin:id}', [UserController::class, 'edit']);
        // Route::post('/update-admin/{admin:id}', [UserController::class, 'update']);
        // Route::get('/hapus-admin/{admin:id}', [UserController::class, 'delete']);

    });

    Route::get('/rekap', [RekapController::class, 'data']);

//export
    Route::get('/download-pdf', [RekapController::class, 'DownloadPDF']);
    Route::get('/export-excel', [RekapController::class, 'exportIntoExcel']);
    Route::get('/export-csv', [RekapController::class, 'exportIntoCSV']);
});
