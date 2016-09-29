<?php

namespace Romeroqe\Giphy;

use Illuminate\Support\Facades\Facade;

class StickersFacade extends Facade
{
   	protected static function getFacadeAccessor() { 
        return 'romeroqe-stickers';
    }
}
