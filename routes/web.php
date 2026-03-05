<?php

use App\Http\Controllers\HalloController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Home)
Route::get('/', [HalloController::class, 'index'])->name('home');

// Halaman Service
Route::get('/service', [HalloController::class, 'service'])->name('service');

// Halaman About
Route::get('/about', [HalloController::class, 'about'])->name('about');

// Halaman Kontak
Route::get('/kontak', [HalloController::class, 'kontak'])->name('kontak');

// PENTING: Baris Route::get('/navbar', ...) DIHAPUS saja.