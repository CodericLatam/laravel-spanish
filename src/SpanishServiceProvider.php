<?php

namespace LaravelLatam\Spanish;

use Illuminate\Support\ServiceProvider;

class SpanishServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadJsonTranslationsFrom(__DIR__.'/../resources/lang');
    }

    public function register()
    {
    }
}
