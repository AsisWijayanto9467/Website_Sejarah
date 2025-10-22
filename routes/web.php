<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Main');
});

Route::get('/Artikel1', [ArtikelController::class,  'Artikel1'])->name("artikel1");
Route::get('/Artikel2', [ArtikelController::class,  'Artikel2'])->name("artikel2");
Route::get('/Artikel3', [ArtikelController::class,  'Artikel3'])->name("artikel3");
Route::get('/Artikel4', [ArtikelController::class,  'Artikel4'])->name("artikel4");
Route::get('/Artikel5', [ArtikelController::class,  'Artikel5'])->name("artikel5");
Route::get('/Artikel6', [ArtikelController::class,  'Artikel6'])->name("artikel6");
