<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//per evitare problemi durante la migrazione con le stringhe
//aggiungere questa Facade
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //impostiamo una lunghezza  per i Dati
        //di tipo string del model
        Schema::defaultStringLength(191);
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
