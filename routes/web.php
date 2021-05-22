<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/showProducts', [App\Http\Controllers\ProductController::class, 'index'])->name('showProducts');
Route::get('/createProducts', [App\Http\Controllers\ProductController::class, 'create'])->name('createProducts');
Route::post('/createProducts', [App\Http\Controllers\ProductController::class, 'store'])->name('storeProducts');
Route::get('/detailProducts/{id}', [App\Http\Controllers\ProductController::class, 'detail'])->name('detailProducts');
Route::get('/editProducts/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editProducts');
Route::post('/updateProducts/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('updateProducts');
Route::delete('/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');