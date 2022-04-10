<?php

declare(strict_types=1);

namespace App\Api\Auth\V1\Providers;

use App\Providers\AppServiceProvider;

class AuthAppServiceProvider extends AppServiceProvider
{
    public function register(): void
    {
        $this->app->register(AuthRouteServiceProvider::class);
        $this->app->register(AuthMigrationServiceProvider::class);
    }
}

