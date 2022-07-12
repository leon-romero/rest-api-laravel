<?php

namespace App\Providers;
use GuzzleHttp\Client;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $baseUrl = env('API_ENDPOINT');

        $this->app->singleton(Client::class, function($app) use ($baseUrl) {
            return new Client(['base_uri' => $baseUrl]);
        });
    }
}
