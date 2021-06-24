<?php

namespace Hitobias\ECPay;

use Illuminate\Support\ServiceProvider;

class ECPayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/ecpay.php' => config_path('ecpay.php'),
        ]);
    }

    public function register()
    {
        //Config
        $this->mergeConfigFrom(__DIR__ . '/../config/ecpay.php', 'ecpay');

        $this->app->singleton('ecpay', function () {
            return new ECPay;
        });
    }

    public function providers()
    {
        return ['ecpay'];
    }
}
