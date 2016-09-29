<?php

namespace Romeroqe\Giphy;

use Illuminate\Support\ServiceProvider;

class StickersServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('romeroqe-stickers', function() {
            return new Stickers;
        });
    }
}
