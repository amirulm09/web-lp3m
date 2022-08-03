<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ControllerDetailPenelitian;
use App\Http\Controllers\DetailController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PusatkajianController;
use App\Http\Controllers\WeeklyController;

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



Route::get('/home', [HomeController::class, 'viewHome'])->name('home');
Route::get('/tentang', [ProfilController::class,'viewTentang'])->name('tentang');
Route::get('/Struktur', [ProfilController::class,'viewStruktur'])->name('Struktur');
Route::get('/arah',[ProfilController::class,'viewArah'])->name('arah');
Route::get('/smart',[PusatkajianController::class,'viewSmart'])->name('smart');
Route::get('/game',[PusatkajianController::class,'viewGame'])->name('game');
Route::get('/komuniti',[PusatkajianController::class,'viewKomuniti'])->name('komuniti');
Route::get('/penelitian',[PenelitianController::class,'viewPenelitian'])->name('penelitian');
Route::get('/pengabdian',[PengabdianController::class,'viewPengabdian'])->name('pengabdian');
Route::get('/jurnal',[PublikasiController::class,'viewJurnal'])->name('jurnal');
Route::get('/buku',[PublikasiController::class,'viewBuku'])->name('buku');
Route::get('/forum',[PublikasiController::class,'viewForum'])->name('forum');
Route::get('/hki',[PublikasiController::class,'viewHki'])->name('hki');
Route::get('/kerja',[PublikasiController::class,'viewKerja'])->name('kerja');
Route::get('/lainlain',[PublikasiController::class,'viewLainlain'])->name('lainlain');
Route::get('/berita',[BeritaController::class,'viewBerita'])->name('berita');
Route::get('/weekly',[WeeklyController::class,'viewWeekly'])->name('weekly');
Route::get('/pengumuman',[PengumumanController::class,'viewPengumuman'])->name('pengumuman');
Route::get('/detail/{prodi}',[DetailController::class,'viewDetail'])->name('detail');
Route::get('/detailpenelitian/{prodi}',[ControllerDetailPenelitian::class,'viewDetailpenelitian'])->name('detailpenelitian');
Route::post('/caripengabdian',[PengabdianController::class,'cari'])->name('detailpencarian');
Route::post('/caripenelitian',[PenelitianController::class,'cari'])->name('detailpencarianpenelitian');
Route::post('/caripenelitian',[PenelitianController::class,'cari'])->name('detailpencarianpenelitian');
Route::post('/cariprosiding',[PublikasiController::class,'cari'])->name('detailpencarianprosiding');
Route::get('/detailprosiding/{prodi}',[PublikasiController::class,'detailJurnal'])->name('detailprosiding');
Route::post('/caribuku',[PublikasiController::class,'cari1'])->name('detailpencarianbukuajar');
Route::get('/detailbuku/{prodi}',[PublikasiController::class,'DetailBuku'])->name('detailbuku');
Route::post('/carihki',[PublikasiController::class,'cari2'])->name('detailpencarianhki');
Route::get('/detailhki/{prodi}',[PublikasiController::class,'DetailHki'])->name('detailhki');
