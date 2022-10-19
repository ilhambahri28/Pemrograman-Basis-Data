<?php

use App\Http\Controllers\siswaController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\editbukuController;
use App\Http\Controllers\editsiswaController;
use App\Http\Controllers\peminjamanController;
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
    return view('welcome');
});


Route::resource('/add-buku',bukuController::class)->middleware('auth');

Route::resource('/buku',bukuController::class)->middleware('auth');

Route::get('/hapus-buku/{id}',[bukuController::class, 'destroy'])->middleware('auth');

Route::get('/ubah-buku/{id}',[editbukuController::class, 'edit'])->middleware('auth');

Route::post('/update-buku/{id}',[editbukuController::class, 'update'])->middleware('auth');

Route::resource('/add-siswa',siswaController::class)->middleware('auth');

Route::resource('/siswa',siswaController::class)->middleware('auth');

Route::get('/hapus-siswa/{id}',[siswaController::class, 'destroy'])->middleware('auth');

Route::get('/ubah-siswa/{id}',[editsiswaController::class, 'edit'])->middleware('auth');

Route::post('/update-siswa/{id}',[editsiswaController::class, 'update'])->middleware('auth');

Route::resource('/add-peminjaman',peminjamanController::class)->middleware('auth');

Route::resource('/peminjaman',peminjamanController::class)->middleware('auth');

Route::get('/hapus-peminjaman/{id}',[peminjamanController::class, 'destroy'])->middleware('auth');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
