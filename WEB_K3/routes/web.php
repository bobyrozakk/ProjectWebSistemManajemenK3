<?php

/**
 * web.php — Definisi semua route untuk website SMK3 Docs
 * Semua route mengarah ke SmkController
 * Tidak ada middleware auth — akses publik penuh
 */

use App\Http\Controllers\SmkController;
use Illuminate\Support\Facades\Route;

// ─── Route Utama SMK3 ───────────────────────────────────────────────────────

Route::get('/', [SmkController::class, 'home'])->name('home');
Route::get('/regulasi', [SmkController::class, 'regulasi'])->name('regulasi');
Route::get('/tingkatan', [SmkController::class, 'tingkatan'])->name('tingkatan');
Route::get('/flowchart', [SmkController::class, 'flowchart'])->name('flowchart');
Route::get('/pengendalian', [SmkController::class, 'pengendalian'])->name('pengendalian');
Route::get('/hirarc', [SmkController::class, 'hirarc'])->name('hirarc');
Route::get('/template', [SmkController::class, 'template'])->name('template');
