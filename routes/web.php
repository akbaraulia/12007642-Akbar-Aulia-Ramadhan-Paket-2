<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PetugasController;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use Dompdf\Dompdf;


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
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/akun', UserController::class)->middleware('admin');
Route::get('/akuncreate', [UserController::class, 'create'])->middleware('admin');
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::get('/listmasyarakat', [UserController::class, 'listmasyarakat'])->middleware('admin');
Route::get('/kalender', [AdminController::class, 'kalender'])->middleware('admin');
Route::get('/pengaduanadmin', [PengaduanController::class, 'pengaduanadmin'])->middleware('admin');
Route::get('/pengaduanpetugas', [PengaduanController::class, 'pengaduanpetugas'])->middleware('petugas');
Route::get('/historypengaduan', [PengaduanController::class, 'history'])->middleware('admin');
Route::get('/historytanggapan', [TanggapanController::class, 'history'])->middleware('admin');

Route::resource('/pengaduan', PengaduanController::class);
Route::put('/approve/{id}', [PengaduanController::class, 'approve'])->name('approve')->middleware('admin');
Route::get('/petugas', [PetugasController::class, 'index'])->middleware('petugas');
Route::get('/tanggapanadmin', [TanggapanController::class, 'tanggapanadmin'])->middleware('admin');
Route::get('/tanggapanpetugas', [TanggapanController::class, 'tanggapanpetugas'])->middleware('petugas');
Route::get('/tanggapan', [TanggapanController::class, 'index'])->middleware('masyarakat');

Route::resource('/tanggapan', TanggapanController::class);
Route::get('/tanggapi', [TanggapanController::class, 'create']);

Route::get('/kalenderpetugas', [PetugasController::class, 'kalender'])->middleware('petugas');
Route::get('/akun/delete/id', [UserController::class, 'delete'])->middleware('admin');



Route::get('/generateLaporan', function () {
    
    $history = Pengaduan::all();
    $dompdf = new Dompdf();
    $html = view('admin.pdf', compact('history'))->render();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    
    return $dompdf->stream('Laporan Pengaduan.pdf');
})->middleware('admin');
Route::get('/generatetanggapan', function () {
    
    $history = Tanggapan::all();
    $dompdf = new Dompdf();
    $html = view('admin.Tpdf', compact('history'))->render();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    
    return $dompdf->stream('Laporan Tanggapan.pdf');
})->middleware('admin');

