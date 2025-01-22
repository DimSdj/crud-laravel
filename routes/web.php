<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('woning', [App\Http\Controllers\WoningController::class, 'index']);
    Route::get('woning/create', [App\Http\Controllers\WoningController::class, 'create']);
    Route::post('woning/store', [App\Http\Controllers\WoningController::class, 'store']);
    Route::get('woning/edit/{id}', [App\Http\Controllers\WoningController::class, 'edit']);
    Route::post('woning/update/{id}', [App\Http\Controllers\WoningController::class, 'update']);
    Route::post('woning/destroy/{id}', [App\Http\Controllers\WoningController::class, 'destroy']);
    Route::get('woning/{id}/beschrijving', [App\Http\Controllers\WoningController::class, 'showDescriptionPage']);
});

require __DIR__.'/auth.php';
