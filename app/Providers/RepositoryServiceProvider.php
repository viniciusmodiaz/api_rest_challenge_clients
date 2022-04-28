<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ClientRepositoryInterface;
use App\Repositories\ClientRepository;
use App\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class, OrderRepositoryInterface::class, OrderRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
