<?php

declare(strict_types=1);

namespace App\Api\Auth\V1\Providers;

use App\Providers\AppServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthAppServiceProvider extends AppServiceProvider
{
    public function register(): void
    {
        $this->app->register(AuthRouteServiceProvider::class);
        $this->app->register(AuthMigrationServiceProvider::class);

        Factory::guessFactoryNamesUsing(function ($name) {
            return '\\Domain\\Auth\\database\\factories\\' . (class_basename($name)) . 'Factory';
        });
    }
}
