<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\ImovelRepository::class, \App\Repositories\ImovelRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ImovelStatusRepository::class, \App\Repositories\ImovelStatusRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ImovelTypeRepository::class, \App\Repositories\ImovelTypeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
    }
}
