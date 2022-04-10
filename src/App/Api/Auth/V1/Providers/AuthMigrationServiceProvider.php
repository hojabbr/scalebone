<?php

declare(strict_types=1);

namespace App\Api\Auth\V1\Providers;

use App\Providers\RouteServiceProvider;

class AuthMigrationServiceProvider extends RouteServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(base_path('src/Domain/Auth/database/migrations'));
    }
}
