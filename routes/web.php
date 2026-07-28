<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; // <-- Tambahkan di sini

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

// <-- Tambahkan di sini
Route::resource('siswa', SiswaController::class);