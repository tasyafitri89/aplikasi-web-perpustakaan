<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('contoh', function () {
    return view('contoh');
});

Route::get('tasya', function () {
    return "Halo Tasya Fitri Sawaliyah, selamat datang di Aplikasi Perpustakaan";
});

Route::get('buku', [BukuController::class, 'index']);
