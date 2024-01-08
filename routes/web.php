<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index']);
Route::get('/anggota/create', [App\Http\Controllers\AnggotaController::class, 'create']);
Route::post('/anggota', [App\Http\Controllers\AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [App\Http\Controllers\AnggotaController::class, 'edit']);
Route::patch('/anggota/{id}', [App\Http\Controllers\AnggotaController::class, 'update']);
Route::delete('/anggota/{id}', [App\Http\Controllers\AnggotaController::class, 'destroy']);

//iuran
Route::get('/iuran', [App\Http\Controllers\IuranController::class, 'index']);
Route::get('/iuran/create', [App\Http\Controllers\IuranController::class, 'create']);
Route::post('/iuran', [App\Http\Controllers\IuranController::class, 'store']);
Route::get('/iuran/edit/{id}', [App\Http\Controllers\IuranController::class, 'edit']);
Route::patch('/iuran/{id}', [App\Http\Controllers\IuranController::class, 'update']);
Route::delete('/iuran/{id}', [App\Http\Controllers\IuranController::class, 'destroy']);

//transaksi
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);