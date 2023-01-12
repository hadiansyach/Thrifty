<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Jualproduk;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', [AuthController::class, 'tampilanLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login');
Route::get('/register', [AuthController::class, 'tampilanRegister']);
Route::get('/register2', [AuthController::class, 'tampilanRegister2'])->name('register2');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register');
Route::get('/dashboard', [AuthController::class, 'tampilanDashboard'])->middleware('auth')->name('dashboard');
Route::get('/jualproduk', [AuthController::class, 'tampilanJualproduk'])->name('jualproduk');
Route::post('/jualproduk', [Jualproduk::class, 'store'])->name('jualproduk');
Route::get('/daftarjual', [AuthController::class, 'tampilandaftarjual'])->name('daftarjual');
Route::get('/daftarjual/datatable', [Jualproduk::class, 'datatable'])->name('daftarjual.datatable');
Route::get('/{produk}/editproduk', [AuthController::class, 'tampilanEditproduk'])->name('editproduk');
Route::post('/{produk}/editproduk', [AuthController::class, 'editproduk'])->name('editprofile');
Route::get('/editprofile', [AuthController::class, 'tampilanEditprofile'])->name('editprofile');
Route::post('/editprofile', [AuthController::class, 'Editprofile'])->name('editprofile');
Route::get('/{produk}/preview', [AuthController::class, 'tampilanPreview'])->name('preview');


// require __DIR__.'/auth.php';
