<?php

namespace Romeroqe\Giphy;

use Illuminate\Support\Facades\Facade;

class GiphyFacade extends Facade
{
   	protected static function getFacadeAccessor() { 
        return 'romeroqe-giphy';
    }
}
