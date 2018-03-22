<?php

namespace Verzatiletom\Vcomponent;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class VcomponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/assets', 'v-component');

        Config::set('filesystems.disks.v-component', [
            'driver' => 'local',
            'root' => resource_path('assets')
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\CreateVueComponent::class
            ]);
        }
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
