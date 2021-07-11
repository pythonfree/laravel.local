<?php


namespace App\Providers;


use App\Services\HelloService;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HelloService::class, function ($app) {
            return new HelloService();
        });
    }
}