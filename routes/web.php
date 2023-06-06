<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KPAController;
use App\Http\Controllers\KPPController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TkrkController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\JaksaController;
use App\Http\Controllers\LahirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NikahController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KorbanController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminSKController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminKrkController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PenyidikController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\TersangkaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\TpermohonanController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\DaftarLayananController;
use App\Http\Controllers\GantiPasswordController;
use App\Http\Controllers\AdminPermohonanController;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect('superadmin');
        } elseif (Auth::user()->hasRole('pemohon')) {
            return redirect('pemohon');
        }
    }
    return redirect('/login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('daftar', [DaftarController::class, 'index']);
Route::post('daftar', [DaftarController::class, 'daftar']);
Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);


Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);
    Route::post('superadmin/sk/updatelurah', [HomeController::class, 'updatelurah']);

    Route::get('superadmin/jaksa', [JaksaController::class, 'index']);
    Route::get('superadmin/jaksa/create', [JaksaController::class, 'create']);
    Route::post('superadmin/jaksa/create', [JaksaController::class, 'store']);
    Route::get('superadmin/jaksa/edit/{id}', [JaksaController::class, 'edit']);
    Route::post('superadmin/jaksa/edit/{id}', [JaksaController::class, 'update']);
    Route::get('superadmin/jaksa/delete/{id}', [JaksaController::class, 'delete']);

    Route::get('superadmin/penyidik', [PenyidikController::class, 'index']);
    Route::get('superadmin/penyidik/create', [PenyidikController::class, 'create']);
    Route::post('superadmin/penyidik/create', [PenyidikController::class, 'store']);
    Route::get('superadmin/penyidik/edit/{id}', [PenyidikController::class, 'edit']);
    Route::post('superadmin/penyidik/edit/{id}', [PenyidikController::class, 'update']);
    Route::get('superadmin/penyidik/delete/{id}', [PenyidikController::class, 'delete']);


    Route::get('superadmin/korban', [KorbanController::class, 'index']);
    Route::get('superadmin/korban/create', [KorbanController::class, 'create']);
    Route::post('superadmin/korban/create', [KorbanController::class, 'store']);
    Route::get('superadmin/korban/edit/{id}', [KorbanController::class, 'edit']);
    Route::post('superadmin/korban/edit/{id}', [KorbanController::class, 'update']);
    Route::get('superadmin/korban/delete/{id}', [KorbanController::class, 'delete']);

    Route::get('superadmin/tersangka', [TersangkaController::class, 'index']);
    Route::get('superadmin/tersangka/create', [TersangkaController::class, 'create']);
    Route::post('superadmin/tersangka/create', [TersangkaController::class, 'store']);
    Route::get('superadmin/tersangka/edit/{id}', [TersangkaController::class, 'edit']);
    Route::post('superadmin/tersangka/edit/{id}', [TersangkaController::class, 'update']);
    Route::get('superadmin/tersangka/delete/{id}', [TersangkaController::class, 'delete']);

    Route::get('superadmin/kpp', [KPPController::class, 'index']);
    Route::get('superadmin/kpp/create', [KPPController::class, 'create']);
    Route::post('superadmin/kpp/create', [KPPController::class, 'store']);
    Route::get('superadmin/kpp/edit/{id}', [KPPController::class, 'edit']);
    Route::post('superadmin/kpp/edit/{id}', [KPPController::class, 'update']);
    Route::get('superadmin/kpp/delete/{id}', [KPPController::class, 'delete']);

    Route::get('superadmin/kpa', [KPAController::class, 'index']);
    Route::get('superadmin/kpa/create', [KPAController::class, 'create']);
    Route::post('superadmin/kpa/create', [KPAController::class, 'store']);
    Route::get('superadmin/kpa/edit/{id}', [KPAController::class, 'edit']);
    Route::post('superadmin/kpa/edit/{id}', [KPAController::class, 'update']);
    Route::get('superadmin/kpa/delete/{id}', [KPAController::class, 'delete']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/kpp', [LaporanController::class, 'kpp']);
    Route::get('superadmin/laporan/kpa', [LaporanController::class, 'kpa']);
});
