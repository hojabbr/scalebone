<?php

declare(strict_types=1);

namespace App\Api\Auth\V1\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class AuthRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(__DIR__ . '/../Routes/api.php');

            Route::middleware('web')
                ->group(__DIR__ . '/../Routes/web.php');
        });
    }


}
