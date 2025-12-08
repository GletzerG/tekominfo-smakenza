<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BulkSiswaController;
use App\Http\Controllers\AbsensiController;
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

Route::get('/absensi', [AbsensiController::class, 'index']);
Route::post('/absensi', [AbsensiController::class, 'store']);



// LOGOUT

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function(){
    //route for adding siswa with table excel
    Route::get('/bulk_register', [BulkSiswaController::class, 'showForm']);
    Route::post('/bulk_register', [BulkSiswaController::class, 'import'])->name('bulk.register');
});