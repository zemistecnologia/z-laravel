<?php
namespace Zemis\ZLaravel;

use Illuminate\Support\ServiceProvider;

class ZLaravelProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__. '../database/migrations');
    }

    public function register()
    {
    }
}
