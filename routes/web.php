<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductController::class, 'home'])->name('product.home');


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}destroy', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');