<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// about
Route::get('/visi-misi', fn() => view('navbar.about.visimisi'));
Route::get('/teacher-profile', fn() => view('navbar.about.teacher-profile'));

// konsentrasi
Route::get('/pplg', fn() => view('navbar.konsentrasi-keahlian.pplg'));
Route::get('/tjkt', fn() => view('navbar.konsentrasi-keahlian.tjkt'));

// AUTH (Login & Register)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// LOGOUT

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// prifle
Route::middleware('auth')->controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile.index');
    Route::get('/profile/edit', 'edit')->name('profile.edit');
    Route::match(['patch', 'put'], '/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
    Route::post('/profile/update', 'updateProfile')->name('profile.update.custom');
    Route::post('/profile/upload-avatar', 'uploadAvatar')->name('profile.upload-avatar');
    Route::put('/profile/update-profile', 'updateProfile')->name('profile.updateProfile');
    Route::get('/user/{id}', 'show')->name('user.show');
    
});