<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Home::class, 'dashboard']);

Route::get('/absensi', [Home::class, 'absensi']);
Route::post('/absensi', [Home::class, 'tambah_absensi']);
Route::put('/absensi', [Home::class, 'edit_absensi']);
Route::delete('/absensi', [Home::class, 'hapus_absensi']);

Route::get('/training', [Home::class, 'training']);
Route::post('/training', [Home::class, 'tambah_training']);
Route::put('/training', [Home::class, 'edit_training']);
Route::delete('/training', [Home::class, 'hapus_training']);