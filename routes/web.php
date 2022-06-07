<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/input', [MahasiswaController::class, 'create']);
Route::post('/input', [MahasiswaController::class, 'store']);
Route::get('/edit/{nim}', [MahasiswaController::class, 'edit']);
Route::put('/edit/{nim}', [MahasiswaController::class, 'update']);
Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy']);
Route::get('/about', fn() => view('about'));
