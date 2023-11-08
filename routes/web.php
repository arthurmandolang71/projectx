<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\CalegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\DptCalegController;
use App\Http\Controllers\CalegPaketController;
use App\Http\Controllers\TargetCalegController;
use App\Http\Controllers\PendukungCalegController;
use App\Http\Controllers\KlasifikasiBantuanController;
use App\Http\Controllers\KlasifikasiPendukungController;

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

// admin system
Route::redirect('/', '/login');

Route::redirect('/home', '/welcome');

Route::view('/welcome', 'welcome', ['name' => session()->get('name'), 'title' => 'Selamat Datang'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->middleware('guest')->name('login');
    Route::post('/login', 'auth');
    Route::post('/logout', 'logout');
});

Route::controller(ProfilController::class)->middleware('auth')->group(function () {
    Route::get('/profil/{user}', 'show');
    Route::get('/profil/{user}/edit', 'edit');
    Route::put('/profil/{user}', 'update');
});

Route::resource('/caleg', CalegController::class)->middleware('isAdmin')->except(['destroy', 'show']);

Route::resource('/calegpaket', CalegPaketController::class)->middleware('isAdmin')->except(['destroy', 'show']);


//admin caleg
Route::controller(DptCalegController::class)->middleware('isCaleg')->group(function () {
    Route::get('/dptcaleg', 'index');
    Route::get('/dptcaleg/dash', 'dashboard');

    Route::get('/get_kecamatan/dptcaleg/{id}', 'getKecamatan');
    Route::get('/get_kelurahandesa/dptcaleg/{id}', 'getKelurahanDesa');
    Route::get('/get_tps/dptcaleg/{id}', 'getTps');
});

Route::controller(PendukungCalegController::class)->middleware('isCaleg')->group(function () {
    Route::get('/pendukungcaleg/dash', 'dashboard');
    Route::get('/pendukungcaleg/index', 'index');

    Route::get('/pendukungcaleg/create/{id_dpt}/{status}', 'create');
    Route::post('/pendukungcaleg', 'store');

    Route::get('/pendukungcaleg/form_destroy/{id_dpt}', 'form_destroy');
    Route::delete('/pendukungcaleg/{id}', 'destroy');
});

Route::resource('/klasifikasipendukung', KlasifikasiPendukungController::class)->middleware('isCaleg')->except(['destroy', 'show'])->parameters([
    'KlasifikasiPendukung' => 'KlasifikasiPendukung',
]);

Route::resource('/klasifikasibantuan', KlasifikasiBantuanController::class)->middleware('isCaleg')->except(['destroy', 'show'])->parameters([
    'KlasifikasiBantuan' => 'KlasifikasiBantuan',
]);

Route::resource('/tim', TimController::class)->middleware('isCaleg')->except(['destroy', 'show'])->parameters([
    'tim' => 'tim',
]);

Route::resource('/relawan', RelawanController::class)->middleware('isCaleg')->except(['destroy', 'show'])->parameters([
    'relawan' => 'relawan',
]);

Route::controller(TargetCalegController::class)->middleware('isCaleg')->group(function () {
    Route::get('/target/edit', 'edit');
    Route::put('/target', 'update');
});

// selesai admin caleg
