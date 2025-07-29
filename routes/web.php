<?php
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});
Route::get('/visi-misi', function () {
    return view('navbar.about.visimisi');
});
Route::get('/teacher-profile', function () {
    return view('navbar.about.teacher-profile');
});
Route::get('/pplg', function () {
    return view('navbar.konsentrasi-keahlian.pplg');
});
Route::get('/tjkt', function () {
    return view('navbar.konsentrasi-keahlian.tjkt');
});
Route::get('/login', function () {
    return view('auth.login'); // Bukan view('login')
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', function () {
    return view('auth.register'); // Bukan view('register')
});
