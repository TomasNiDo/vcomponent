<?php

namespace Verzatiletom\Vcomponent;

use Illuminate\Support\ServiceProvider;

class VcomponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            Commands\CreateVueComponent::class
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
