<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'index']);
Route::get('/admin', [DashboardController::class, 'index']);

Route::get('berita', [BeritaController::class, 'index']);
Route::get('/berita/show/{id}', [BeritaController::class, 'show']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::post('/berita/store', [BeritaController::class, 'store']);
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
Route::post('/berita/update/{id}', [BeritaController::class, 'update']);
Route::get('/berita/delete/{id}', [BeritaController::class, 'destroy']);