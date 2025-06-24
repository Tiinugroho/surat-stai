<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserImportController;
use App\Http\Controllers\AdminMahasiswaController;

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

// Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/admin/import-users', [UserImportController::class, 'showImportForm'])->name('admin.import.form');
Route::post('/admin/import-users', [UserImportController::class, 'import'])->name('admin.import.users');

Route::get('admin/user/mahasiswa', [AdminMahasiswaController::class, 'index'])->name('admin.user.mahasiswa.index')->middleware('auth');
Route::get('admin/user/mahasiswa/create', [AdminMahasiswaController::class, 'create'])->name('admin.user.mahasiswa.create')->middleware('auth');
Route::post('admin/user/mahasiswa/store', [AdminMahasiswaController::class, 'store'])->name('admin.user.mahasiswa.store')->middleware('auth');
Route::put('admin/user/mahasiswa/{id}', [AdminMahasiswaController::class, 'update'])->name('admin.user.mahasiswa.update')->middleware('auth');
Route::delete('admin/user/mahasiswa/{id}', [AdminMahasiswaController::class, 'destroy'])->name('admin.user.mahasiswa.destroy')->middleware('auth');


// ini route package laravel ui | yang false itu routenya tdk aktif, kalo yang true itu aktif
Auth::routes([
    'password.confirm' => false,
    'password.email' => false,
    'password.request' => false,
    'password.update' => false,
    'password.reset' => false,
    'register' => false,
    'login' => true
]);

Route::fallback(function () {
    return redirect('/');
});
