<?php

use App\Http\Controllers\APIs\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\APIs\Dashboard\CategoryControlller as CategoryController2;
use  App\Http\Controllers\APIs\Dashboard\TransactionController;
Route::prefix('category')->group(function () {
    // Route::resource('category', CategoryController2::class);
    Route::get('', [CategoryController2::class, 'index']);
    Route::post('store', [CategoryController2::class, 'store'])->name('store');
    Route::put('update/{category}',[CategoryController2::class, 'update'] )->name('update');
    Route::delete('delete/{category}',[CategoryController2::class, 'delete'])->name('delete');

});

Route::prefix('transaction')->group(function () {
    Route::get('{type}', [TransactionController::class, 'index']);
    Route::post('store', [TransactionController::class, 'store'])->name('store');
    Route::put('update/{transaction}', [TransactionController::class, 'update'])->name('update');
    Route::delete('delete/{transaction}', [TransactionController::class, 'delete'])->name('delete');
 

});


