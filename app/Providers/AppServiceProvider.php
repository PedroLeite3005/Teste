<?php

namespace App\Providers;

use App\Repositories\Interfaces\MercadoLivreInterface;
use App\Repositories\MercadoLivreRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MercadoLivreInterface::class, MercadoLivreRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
