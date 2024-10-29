<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('scod/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('scod/register', [RegisteredUserController::class, 'store']);

    Route::get('scod/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('scod/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('scod/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('scod/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('scod/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('scod/reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('scod/verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('scod/verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('scod/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('scod/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('scod/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('scod/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
