<?php

namespace Romeroqe\Giphy;

use Illuminate\Support\ServiceProvider;

class GiphyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('romeroqe-giphy', function() {
            return new Giphy;
        });
    }
}
