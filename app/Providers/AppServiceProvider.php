<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; // Assurez-vous que cette ligne est présente
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191); // Limite la longueur des colonnes string à 191
    }
}