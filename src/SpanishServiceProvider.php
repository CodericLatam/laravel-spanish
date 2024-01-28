<?php

namespace LaravelLatam\Spanish;

use Illuminate\Support\ServiceProvider;

class SpanishServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadJsonTranslationsFrom(__DIR__.'/../resources/lang');
        $this->publishes([
            __DIR__.'/../resources/lang' => app()->basePath('lang'),
        ], 'spanish');
    }

    public function register()
    {
    }
}
