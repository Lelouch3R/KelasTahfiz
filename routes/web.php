<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\senaraipengguna;
use App\Http\Controllers\senaraimurid;
use App\Http\Controllers\daftarmurid;
use App\Http\Controllers\ubahmurid;
use App\Http\Controllers\padammurid;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/senaraipengguna', [senaraipengguna::class, 'index'])->name('senaraipengguna');
Route::get('/senaraimurid', [senaraimurid::class, 'index']);

Route::get('/borangmurid', [daftarmurid::class, 'index'])->name('daftarmurid');
Route::post('/borangmurid', [daftarmurid::class, 'store']);

Route::get('/senaraicikgu', [senaraicikgu::class, 'index']);


Route::get('/senaraicikgu', function () {
    return view('senaraicikgu');
});

Route::get('/ubahmurid/{idmurid}', [ubahmurid::class, 'index'])->name('tukarmurid');
Route::put('/ubahmurid/{idmurid}', [ubahmurid::class, 'update']);

Route::get('/padammurid/{idmurid}', [padammurid::class, 'delete'])->name('padammurid');



