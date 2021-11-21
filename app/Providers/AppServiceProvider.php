<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Http;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('prod', function () {
            if( app()->environment()==="production"){
                return true;
            }else{
                try {
                   Http::get("http://localhost:3001/");
                    return false;
                } catch (\Throwable $th) {
                    return true;
                }
            }
        });
    }
}