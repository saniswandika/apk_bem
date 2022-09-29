<?php

use App\Models\Admin;
use App\Models\DataPenyu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PengajuanPenelitianController;
use App\Http\Controllers\DataPenyuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\statusController;
use App\Http\Controllers\AdminpengajuanPenelitianCntroller;
use App\Http\Controllers\PublishPenelitianController;
use App\Http\Controllers\tiketController;
use App\Http\Controllers\DataPengunjungController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HalamanPenelitianController;

use App\Http\Controllers\UserController;

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
//halaman delapan website
        Route::get('/tentangkami', function () {
            return view('halaman_depan.tentangkami');
        });
        Route::get('/contoh', function () {
            return view('halaman_depan.contoh');
        });
        Route::get('/petalokasi', function () {
            return view('halaman_depan.Petalokasi');
        });
        Route::get('/kondisiumum', function () {
            return view('halaman_depan.kondisiumum');
        });
        Route::get('/berhasil', function () {
            return view('halaman_depan.BerhasilPengajuan');
        });
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/halaman-penelitian/{id}',  [HalamanPenelitianController::class,'show'])->name('post.show');
        Route::get('/lihat-berita/{id}',  [beritaController::class,'show'])->name('berita.show');
        Route::get('/FormPengajuanPenelitian', [PengajuanPenelitianController::class, 'index']);
        Route::post('/upload-file', [PengajuanPenelitianController::class, 'fileUpload'])->name('kirim.pengajuan');
        Route::get('/peneliti/cari', [homeController::class, 'search']);
        Route::post('/import',[UserController::class,'import'])->name('import');
        Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');

//login user
        Route::get('/masukkawasan', [tiketController::class, 'index']);
        Route::get('/dashboard', [PembayaranController::class,'index'])->name('admin.cards')->middleware(['auth'])->name('dashboard');
        Route::get('/send-mail',  [EmailController::class,'index'])->name('kirim.show');
        Route::PUT('/pembayaran/{id}', [PembayaranController::class,'update'])->middleware(['auth'])->name('dashboard.pembayaran');

require __DIR__.'/auth.php';

//login admin
    Route::get('/admin/dashboard', function () {
        
        $visitors = DataPenyu::select(
            
            DB::raw("(sum(telur_penyu)) as total_penyu"),
            DB::raw("(MONTHNAME(tanggal)) as my_date")
            )
            ->orderBy('tanggal')
            ->groupBy(DB::raw("MONTHNAME(tanggal)"))
            ->pluck('total_penyu', 'my_date');
            
            
            $labels = $visitors->keys();
            $date = $visitors->values();

            return view('admin.dashboard',compact('labels','date'));
        })->middleware(['auth:admin'])->name('dashboard');
        // Route::view('/buttons', 'admin.buttons')->name('admin.buttons');
            Route::get('/DataPengunjung', [DataPengunjungController::class,'index'])->name('admin.buttons');
            Route::put('/DataPengunjung/{id}', [DataPengunjungController::class,'update'])->name('admin.buttons.update');
            Route::get('/DataPenyu', [DataPenyuController::class,'index'])->name('admin.cards');
            Route::post('/DatPenyu', [DataPenyuController::class,'store'])->name('admin.cards.create');
            Route::post('/DataPenyu/{id}', [DataPenyuController::class,'update'])->name('admin.cards.update');
            // Route::view('/cards', 'admin.data_penyu.cards')->name('admin.cards');

            Route::get('/Berita', [BeritaController::class,'index'])->name('admin.modals');
            Route::post('/Berita', [BeritaController::class,'TambahBerita'])->name('admin.modals.create');
            Route::POST('/hapusberita/{id}', [BeritaController::class,'destroy'])->name('admin.modals.delete');
            Route::put('/berita/{id}', [BeritaController::class,'update'])->name('admin.modals.update');

            Route::get('/status/update', [statusController::class, 'updateStatus'])->name('updatestatus');

            Route::get('/pengajuanPenelitian', [AdminpengajuanPenelitianCntroller::class,'index'])->name('admin.forms');


            Route::get('/PublishPenelitian', [PublishPenelitianController::class,'index'])->name('admin.charts');
            Route::POST('/tambahpenelitian', [PublishPenelitianController::class,'store'])->name('admin.charts.store');
            Route::post('/PublishPenelitian/{id}', [PublishPenelitianController::class,'update'])->name('admin.charts.update');
            Route::get('/publish/update', [statusController::class, 'KonfirmasiPenelitian'])->name('publishpenlitian');

            Route::view('/tables', 'admin.tables')->name('admin.tables');
require __DIR__.'/adminauth.php';