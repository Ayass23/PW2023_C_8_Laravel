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
    return view('Pembelian');
});
Route::get('/pembelian', function () {
    return view('Pembelian');
});
Route::get('/pembayaran', function () {
    return view('Pembayaran');
});
Route::get('/beforelogin', function () {
    return view('BeforeLogin');
});
