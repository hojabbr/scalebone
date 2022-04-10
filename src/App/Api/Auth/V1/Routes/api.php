<?php

use App\Api\Auth\V1\Controllers\AuthenticatedSessionController;
use App\Api\Auth\V1\Controllers\EmailVerificationNotificationController;
use App\Api\Auth\V1\Controllers\NewPasswordController;
use App\Api\Auth\V1\Controllers\PasswordResetLinkController;
use App\Api\Auth\V1\Controllers\RegisteredUserController;
use App\Api\Auth\V1\Controllers\VerifyEmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('user', function (Request $request) {
    return $request->user();
});

Route::post('register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register');

Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest')
    ->name('login');

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::post('logout', array(AuthenticatedSessionController::class, 'destroy'))
    ->middleware('auth')
    ->name('logout');
