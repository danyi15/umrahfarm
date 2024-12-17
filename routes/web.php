<?php

use App\Http\Controllers\ManajemenStokPakanController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\VetMonitorController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view ('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view ('login');
})->name('login');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('record-ternak',[RecordController::class,'tampil'])->name('record.ternak.tampil');

Route::get('tambah-ternak',[RecordController::class,'tambah'])->name('record.ternak.tambah');

Route::POST('tambah-ternak/submit',[RecordController::class,'submit'])->name('record.ternak.submit');

Route::get('detail-ternak/{tag_id}', [RecordController::class, 'showDetailById'])->name('detail.ternak');

Route::put('/update-ternak/{tag_id}', [RecordController::class, 'update'])->name('update.ternak');

Route::get('edit-ternak/{tag_id}', [RecordController::class, 'edit'])->name('edit.ternak');

Route::delete('/record-ternak/{tag_id}/delete', [RecordController::class, 'destroy'])->name('delete.ternak');

//MANAGEMENT STOK PAKAN
Route::get('stok-pakan', [ManajemenStokPakanController::class, 'index'])->name('stok_pakan.index');
Route::get('stok-pakan/tambah', [ManajemenStokPakanController::class, 'create'])->name('stok_pakan.tambah');
Route::post('stok-pakan/simpan', [ManajemenStokPakanController::class, 'store'])->name('stok_pakan.simpan');
Route::get('stok-pakan/{id}/ubah', [ManajemenStokPakanController::class, 'edit'])->name('stok_pakan.ubah');
Route::put('stok-pakan/{id}/perbarui', [ManajemenStokPakanController::class, 'update'])->name('stok_pakan.perbarui');
Route::delete('/stok_pakan/{id}', [ManajemenStokPakanController::class, 'destroy'])->name('stok_pakan.destroy');

//Vet-monitor
Route::prefix('vet-monitor')->group(function () {

Route::get('/vet-monitors/create', [VetMonitorController::class, 'create'])->name('vet-monitor.create');
Route::post('/vet-monitors', [VetMonitorController::class, 'store'])->name('vet-monitor.store');
Route::get('/vet-monitors', [VetMonitorController::class, 'index'])->name('vet-monitor.index');
Route::get('/vet-monitors/{id}/edit', [VetMonitorController::class, 'edit'])->name('vet-monitor.edit');
Route::put('/vet-monitors/{id}', [VetMonitorController::class, 'update'])->name('vet-monitor.update');
Route::delete('/vet-monitors/{id}', [VetMonitorController::class, 'destroy'])->name('vet-monitor.destroy');
});

//Login Singup dan User Profile
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'processSignup'])->name('auth.signup.process');

Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'processLogin']);


// Rute Login

// Rute Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('auth.login')->with('success', 'Anda telah logout.');
})->name('auth.logout');

Route::get('/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/edit', [UserController::class, 'update'])->name('user.profile.update');

//profile
Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('admin')->name('admin.dashboard');

//ADMIN
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    });
});


Route::get('/detail-ternak', function () {
    return view ('detail-ternak');
})->name('detail-ternak');

Route::get('/pertumbuhan-ternak', function () {
    return view ('pertumbuhan-ternak');
})->name('pertumbuhan-ternak');

Route::get('/penyakit-ternak', function () {
    return view ('penyakit-ternak');
})->name('penyakit-ternak');

Route::get('/stock-pakan', function () {
    return view ('stock-pakan');
})->name('stock-pakan');

Route::get('/market-ternak', function () {
    return view ('market-ternak');
})->name('market-ternak');

Route::get('/detail-market-ternak', function () {
    return view ('detail-market-ternak');
})->name('detail-market-ternak');
