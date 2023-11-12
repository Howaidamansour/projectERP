<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\SpendsController;
use App\Http\Controllers\Dashboard\IncomeController;
use App\Http\Controllers\Dashboard\CategoryController;




Route::get('', function () {
    return view('layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('change-lang/{lang}', [HomeController::class, 'localization'])->name('change.lang');

Route::prefix('spendsIncome')->as('spendsIncome.')->group(function () {
    Route::get('spends/{type}', [SpendsController::class, 'index'])->name('spends.index');
    Route::get('income/{type}', [IncomeController::class, 'index'])->name('income.index');
    // Route::post('income/store', [IncomeController::class, 'store'])->name('income.store');

    Route::resource('spends', SpendsController::class,  ['except' => 'index']);
    Route::resource('income', IncomeController::class, ['except' => 'index']);
}) ;

Route::resource('category', CategoryController::class);



Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});