<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;

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
Route::get('/index', function () {

    return view ('index');
});
Route::get('/kontak', function () {

    return view ('kontak');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authanticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'userstore']);

Route::resource('/akun', UserController::class)->middleware('admin');
Route::get('/akuncreate', [UserController::class, 'create'])->middleware('admin');
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::get('/listmasyarakat', [UserController::class, 'listmasyarakat'])->middleware('admin');
Route::get('/kalender', [AdminController::class, 'kalender'])->middleware('admin');
Route::get('/pengaduanadmin', [PengaduanController::class, 'pengaduanadmin'])->middleware('admin');
Route::resource('/pengaduan', PengaduanController::class);
Route::put('/approve/{id}', [PengaduanController::class, 'approve'])->name('approve')->middleware('admin');
Route::get('/petugas', [PetugasController::class, 'index'])->middleware('petugas');




