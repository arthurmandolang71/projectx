<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DptCalegController;
use App\Http\Controllers\CalegPaketController;

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

Route::controller(DptCalegController::class)->middleware('isCaleg')->group(function () {
    Route::get('/dptcaleg', 'index');
    Route::get('/dptcaleg/dash', 'dashboard');

    Route::get('/get_kecamatan/dptcaleg/{id}', 'getKecamatan');
    Route::get('/get_kelurahandesa/dptcaleg/{id}', 'getKelurahanDesa');
    Route::get('/get_tps/dptcaleg/{id}', 'getTps');
});
