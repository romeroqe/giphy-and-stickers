<?php

namespace Romeroqe\Ghipy;

use Illuminate\Support\Facades\Facade;

class GhipyFacade extends Facade
{
   	protected static function getFacadeAccessor() { 
        return 'romeroqe-ghipy';
    }
}
