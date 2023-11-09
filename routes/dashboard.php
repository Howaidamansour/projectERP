<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\SpendsController;
use App\Http\Controllers\Dashboard\IncomeController;




Route::get('', function () {
    return view('layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('change-lang/{lang}', [HomeController::class, 'localization'])->name('change.lang');

Route::prefix('spendsIncome')->as('spendsIncome.')->group(function () {
    // Route::get('spends', [SpendsController::class, 'index'])->name('spends');
    

    Route::resource('spends', SpendsController::class)->parameters(['spends' => 'type']);
    Route::resource('income', IncomeController::class);
}) ;



Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});