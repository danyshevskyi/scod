<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScodController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('scod/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('scod/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('scod/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('scod/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/scod', ScodController::class);