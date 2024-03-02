<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
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
    return view('auth.login');
});

//Route untuk Login/Register
Route::get('/home', function () {
    return view('layouts.view_home');
});

route::get('/register', [AuthController::class, 'register'])->name('register');
route::post('/register', [AuthController::class, 'registerPost'])->name('register1');
route::get('/login', [AuthController::class, 'login'])->name('login');
route::post('/login', [AuthController::class, 'loginPost'])->name('login1');
route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route untuk Data Buku
Route::get('/buku', 'BukuController@bukutampil');
Route::post('/buku/tambah','BukuController@bukutambah');
Route::get('/buku/hapus/{id_buku}','BukuController@bukuhapus');
Route::put('/buku/edit/{id_buku}', 'BukuController@bukuedit');

//Route untuk Data Buku
Route::get('/home', function(){return view('layouts.view_home');});

//Route untuk Data Anggota
Route::get('/anggota', 'AnggotaController@anggotatampil');
Route::post('/anggota/tambah', 'AnggotaController@anggotatambah');
Route::get('/anggota/hapus/{id_anggota}', 'AnggotaController@anggotahapus');
Route::put('/anggota/edit/{id_anggota}', 'AnggotaController@anggotaedit');

//Route untuk Data Petugas
Route::get('/petugas', 'PetugasController@petugastampil');
Route::post('/petugas/tambah', 'PetugasController@petugastambah');
Route::get('/petugas/hapus/{id_petugas}', 'PetugasController@petugashapus');
Route::put('/petugas/edit/{id_petugas}', 'PetugasController@petugasedit');


//Route search
Route::get('/search', [BukuController::class, 'search'])->name('search');
Route::get('/search', [AnggotaController::class, 'search'])->name('search');
Route::get('/search', [PetugasController::class, 'search'])->name('search');
