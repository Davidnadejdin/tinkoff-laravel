<?php

namespace Davidnadejdin\LaravelTinkoff;

use Davidnadejdin\TinkoffClient\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class TinkoffServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/tinkoff.php',
            'alfabank'
        );

        App::bind('laraveltinkoff', static function () {
            return new Client(Config::get('tinkoff'));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/tinkoff.php' => config_path('tinkoff.php'),
        ], 'config');
    }
}
