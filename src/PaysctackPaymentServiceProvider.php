<?php
namespace payment\paystack;

use Carbon\Laravel\ServiceProvider;

class PaysctackPaymentServiceProvider extends ServiceProvider{

public function boot(){

    $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
    $this->loadViewsFrom(__DIR__ .'/views','paystack');
    $this->loadMigrationsFrom(__DIR__ .'/database/migrations');
    $this->mergeConfigFrom(__DIR__ .'/config/payment.php','paystack');
    $this->publishes([
        __DIR__.'/config/payment.php' => config_path('payment.php'),
    ]);
}


public function register(){

}


}
