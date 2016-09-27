<?php

namespace Romeroqe\Ghipy;

use Illuminate\Support\ServiceProvider;

class GhipyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('romeroqe-ghipy', function() {
            return new Ghipy;
        });
    }
}
