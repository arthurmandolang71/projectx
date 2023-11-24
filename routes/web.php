<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardTim;
use App\Http\Controllers\TimController;
use App\Http\Controllers\DashboardCaleg;
use App\Http\Controllers\CalegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DptTimController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\DptCalegController;
use App\Http\Controllers\CalegPaketController;
use App\Http\Controllers\TargetCalegController;
use App\Http\Controllers\PendukungTimController;
use App\Http\Controllers\PendukungCalegController;
use App\Http\Controllers\KlasifikasiBantuanController;
use App\Http\Controllers\KlasifikasiPendukungController;
use App\Models\CalegKabkota;
use App\Models\CalegProv;
use App\Models\CalegRi;

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

Route::get(
    '/welcome',
    function () {
        $level_caleg = session()->get('level_caleg');
        $caleg_id = session()->get('caleg_id');

        if ($level_caleg == 1) {
            $profil_caleg = CalegRi::with('partai', 'dapil')->where('id', $caleg_id)->first();
        } elseif ($level_caleg == 2) {
            $profil_caleg = CalegProv::with('partai', 'dapil')->where('id', $caleg_id)->first();
        } elseif ($level_caleg == 3) {
            $profil_caleg = CalegKabkota::with('partai', 'dapil')->where('id', $caleg_id)->first();
        } else {
            $profil_caleg = null;
        }

        return view('welcome', [
            'title' => 'Welcome',
            'profil_caleg' => $profil_caleg,
        ]);
    }
)->middleware('auth');

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

    Route::get('/pendukungcaleg/pilih_print', 'pilih_print');

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

Route::resource('/relawan', RelawanController::class)->middleware('isCaleg')->except(['destroy'])->parameters([
    'relawan' => 'relawan',
]);

Route::controller(TargetCalegController::class)->middleware('isCaleg')->group(function () {
    Route::get('/target/edit', 'edit');
    Route::put('/target', 'update');
});

Route::controller(DashboardCaleg::class)->middleware('isCaleg')->group(function () {
    Route::get('/calegdash', 'index');
});

// selesai admin caleg

//tim caleg

Route::controller(DashboardTim::class)->middleware('isTim')->group(function () {
    Route::get('/timdash', 'index');
});


Route::controller(DptTimController::class)->middleware('isTim')->group(function () {
    Route::get('/dpttim', 'index');

    Route::get('/get_kecamatan/dpttim/{id}', 'getKecamatan');
    Route::get('/get_kelurahandesa/dpttim/{id}', 'getKelurahanDesa');
    Route::get('/get_tps/dpttim/{id}', 'getTps');
});

Route::controller(PendukungTimController::class)->middleware('isTim')->group(function () {
    Route::get('/pendukungtim/dash', 'dashboard');
    Route::get('/pendukungtim/index', 'index');

    Route::get('/pendukungtim/create/{id_dpt}/{status}', 'create');
    Route::post('/pendukungtim', 'store');
});
