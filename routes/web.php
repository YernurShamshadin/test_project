<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\BookController::class, 'index'])->name('book.index');
Route::get('/create', [\App\Http\Controllers\BookController::class, 'create'])->name('book.create');
Route::post('/', [\App\Http\Controllers\BookController::class, 'store'])->name('book.store');
