<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\UserImportController;
use App\Http\Controllers\AdminMahasiswaController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::middleware(['auth','role:mahasiswa'])->group(function () {
    Route::post('/store', [WelcomeController::class, 'store'])->name('welcome.surat.store');
    Route::get('/surat', [WelcomeController::class, 'suratSaya'])->name('surat.index');
});

Route::middleware(['auth', 'role:super-admin,dosen,tendik,lektor,staff'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/admin/import-users', [UserImportController::class, 'showImportForm'])->name('admin.import.form');
    Route::post('/admin/import-users', [UserImportController::class, 'import'])->name('admin.import.users');

    Route::get('admin/user/mahasiswa', [AdminMahasiswaController::class, 'index'])->name('admin.user.mahasiswa.index');
    Route::get('admin/user/mahasiswa/create', [AdminMahasiswaController::class, 'create'])->name('admin.user.mahasiswa.create');
    Route::post('admin/user/mahasiswa/store', [AdminMahasiswaController::class, 'store'])->name('admin.user.mahasiswa.store');
    Route::get('/admin/user/mahasiswa/{id}/edit', [AdminMahasiswaController::class, 'edit'])->name('admin.user.mahasiswa.edit');
    Route::put('admin/user/mahasiswa/{id}', [AdminMahasiswaController::class, 'update'])->name('admin.user.mahasiswa.update');
    Route::delete('admin/user/mahasiswa/{id}', [AdminMahasiswaController::class, 'destroy'])->name('admin.user.mahasiswa.destroy');

    Route::get('/admin/surat/jenis', [JenisSuratController::class, 'index'])->name('admin.surat.jenis.index');
    Route::get('/admin/surat/create', [JenisSuratController::class, 'create'])->name('admin.surat.jenis.create');
    Route::post('/admin/surat/store', [JenisSuratController::class, 'store'])->name('admin.surat.jenis.store');
    Route::get('/admin/surat/{id}/edit', [JenisSuratController::class, 'edit'])->name('admin.surat.jenis.edit');
    Route::put('/admin/surat/{id}', [JenisSuratController::class, 'update'])->name('admin.surat.jenis.update');
    Route::delete('/admin/surat/{id}', [JenisSuratController::class, 'destroy'])->name('admin.surat.jenis.destroy');
});

// ini route package laravel ui | yang false itu routenya tdk aktif, kalo yang true itu aktif
Auth::routes([
    'password.confirm' => false,
    'password.email' => false,
    'password.request' => false,
    'password.update' => false,
    'password.reset' => false,
    'register' => false,
    'login' => true,
    'logout' => true,
]);

Route::fallback(function () {
    return redirect('/');
});
