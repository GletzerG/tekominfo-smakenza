<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BulkSiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DataAbsensiController;
use App\Http\Controllers\poin_siswaController;
use App\Http\Controllers\UserPoinController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// about
Route::get('/visi-misi', fn() => view('navbar.about.visimisi'));
Route::get('/teacher-profile', [ProfileController::class, 'index']);


// konsentrasi
Route::get('/pplg', fn() => view('navbar.konsentrasi-keahlian.pplg'));
Route::get('/tjkt', fn() => view('navbar.konsentrasi-keahlian.tjkt'));

// AUTH (Login & Register)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');



Route::middleware(['auth', 'role:admin,guru'])->group(function () {
    Route::get('/absensi', [AbsensiController::class, 'index']);
    Route::post('/absensi', [AbsensiController::class, 'store']);
    
    Route::get('/data_absen', [DataAbsensiController::class, 'monitoring']);
    Route::post('/data_absen', [DataAbsensiController::class, 'monitoring']);

    Route::get('/poin_siswa', [poin_siswaController::class, 'index']);
    Route::post('/poin_siswa', [poin_siswaController::class, 'store']);
});
Route::middleware(['auth', 'role:admin,siswa'])->group(function () {
    Route::get('/UserPoin', [UserPoinController::class, 'index']);
    Route::post('/UserPoin', [UserPoinController::class, 'redeem'])
    ->name('points.redeem')
    ->middleware('auth');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    //route for adding siswa with table excel
    Route::get('/bulk_register', [BulkSiswaController::class, 'showForm']);
    Route::post('/bulk_register', [BulkSiswaController::class, 'import'])->name('bulk.register');
});



// LOGOUT

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

