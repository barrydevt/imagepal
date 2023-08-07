<?php

namespace Barrydevt\Imagepal;

use Illuminate\Support\ServiceProvider;

class ImagepalServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * @return void
     */
    public function register()
    {

    }
}
