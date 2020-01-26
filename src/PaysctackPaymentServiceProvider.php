<?php
namespace bazzlylinks\paystack;

use Illuminate\Support\ServiceProvider;

class PaysctackPaymentServiceProvider extends ServiceProvider{

public function boot(){

    $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
    $this->loadViewsFrom(__DIR__ .'/views','paystack');
    $this->loadMigrationsFrom(__DIR__ .'/database/migrations');
    $this->mergeConfigFrom(__DIR__ .'/config/officepay.php','paystack');
    $this->publishes([
        __DIR__.'/config/officepay.php' => config_path('officepay.php'),
    ]);
}


public function register(){

}


}
