<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HasilPanenSawitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes for User Management
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Routes for Karyawan Management
Route::prefix('karyawan')->group(function () {
    Route::get('/', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/create', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::put('/{karyawan}', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/{karyawan}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
});

// Routes for Hasil Panen Sawit Management
Route::prefix('hasil-panen-sawit')->group(function () {
    Route::get('/', [HasilPanenSawitController::class, 'index'])->name('hasil-panen-sawit.index');
    Route::get('/create', [HasilPanenSawitController::class, 'create'])->name('hasil-panen-sawit.create');
    Route::post('/', [HasilPanenSawitController::class, 'store'])->name('hasil-panen-sawit.store');
    Route::get('/{hasilPanenSawit}/edit', [HasilPanenSawitController::class, 'edit'])->name('hasil-panen-sawit.edit');
    Route::put('/{hasilPanenSawit}', [HasilPanenSawitController::class, 'update'])->name('hasil-panen-sawit.update');
    Route::delete('/{hasilPanenSawit}', [HasilPanenSawitController::class, 'destroy'])->name('hasil-panen-sawit.destroy');
});


// Route untuk menampilkan profil pengguna
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Route untuk proses logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route untuk proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'submit'])->name('register.submit');
Route::view('/register/success', 'register_success')->name('register.success');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return 'Anda berhasil login!';
})->middleware('auth');
