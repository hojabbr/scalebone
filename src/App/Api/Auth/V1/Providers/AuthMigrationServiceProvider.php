<?php

declare(strict_types=1);

namespace App\Api\Auth\V1\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AuthMigrationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(app_path('Domain/Auth/database/migrations'));
    }
}
