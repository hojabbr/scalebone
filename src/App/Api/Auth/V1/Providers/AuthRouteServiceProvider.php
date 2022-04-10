<?php

declare(strict_types=1);

namespace App\Api\Auth\V1\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Route;

class AuthRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->configureRateLimiting();

        ResetPassword::createUrlUsing(function ($notifiable, $token) {
            return config('app.frontend_url') . "/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });

        $this->routes(function () {
            Route::prefix('api/auth/v1')
                ->middleware('api')
                ->group(__DIR__ . '/../Routes/api.php');

            Route::middleware('web')
                ->group(__DIR__ . '/../Routes/web.php');
        });
    }


}
