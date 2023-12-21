<?php

use App\Http\Controllers\addEventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\LoginController;
use App\Models\Merchandise;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\User\MerchandiseController as UserMerchandiseController;
use App\Http\Controllers\RegisterController;
use App\Models\Konser;
use App\Models\KonserTransaction;
use App\Models\MerchanTransaction;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
//verif acc
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::resource('registers', RegisterController::class);
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::post('update', [RegisterController::class, 'updateUser'])->name('updateUser');
Route::post('delete/{id}', [RegisterController::class, 'destroy'])->name('deleteUser');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Konser
Route::resource('konser', KonserController::class);
Route::get('/pembeliantiket/{id}', [KonserController::class, 'beli'])->name('pembeliantiket');
Route::get('/addEvent', [addEventController::class, 'index'])->name('addEvent');

Route::get('/pembayarantiket', [KonserController::class, 'pembayaran'])->name('pembayarantiket');
Route::post('/pembayarantiket', [KonserController::class, 'pembayaranStore'])->name('pembayarantiket.store');

//Merch
Route::get('/merchandise', [UserMerchandiseController::class, 'index']);

Route::get('/pembelianmerch/{merchId}', [UserMerchandiseController::class, 'pembelian'])->name('pembelianmerch');

Route::get('/pembayaranmerch', [UserMerchandiseController::class, 'pembayaran'])->name('pembayaranmerch');
Route::post('/pembayaranmerch', [UserMerchandiseController::class, 'pembayaranStore'])->name('pembayaranmerch.store');



Route::resource('merchandises', MerchandiseController::class);

Route::get('/addMerchandise', function () {
    
    return view('addMerchandise');
});

//profile 
Route::get('/profile', function () {
    return view('Profile');
});

//admin/
Route::get('adminDashboard', function () {
    $konser = Konser::latest()->paginate();
    $totalKonser = Konser::count();
    $totalMerch = Merchandise::count();
    $merch = Merchandise::latest()->paginate();
    $transaksimerch = MerchanTransaction::latest()->paginate();
    $transaksikonser = KonserTransaction::latest()->paginate();
    $totalTiketTerjual = KonserTransaction::sum('quantity');
    $totalMerchanTerjual = MerchanTransaction::sum('quantity');
        
    return view('adminDashboard',compact(['totalMerch','totalKonser','konser','merch','transaksimerch','transaksikonser','totalTiketTerjual','totalMerchanTerjual']));
});

Route::get('/ReportMerchandise', function () {
    $merchandises = Merchandise::latest()->paginate();

    return view('ReportMerchandise', compact('merchandises'));
});
Route::get('/editMerchandise/{id}', function ($id) {
    $merchandise = Merchandise::find($id);

    if (!$merchandise) {
        abort(404);
    }

    return view('EditMerchandise', compact('merchandise'));
});


Route::get('/ReportUser', function () {
    $users = User::where('role','user')->latest()->paginate();

    return view('ReportPelanggan', compact('users'));
});


Route::get('/ReportEvent', function () {
    $konsers = Konser::latest()->paginate();

    return view('ReportEvent', compact('konsers'));
});
Route::get('/editEvent/{id}', function ($id) {
    $konser = Konser::find($id);

    if (!$konser) {
        abort(404);
    }

    return view('EditEvent', compact('konser'));
});
