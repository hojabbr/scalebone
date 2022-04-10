<?php

namespace App\Providers;

use App\Api\Auth\V1\Providers\AuthAppServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthAppServiceProvider::class);
    }

    public function boot()
    {
        //
    }
}
