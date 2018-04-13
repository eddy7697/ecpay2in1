<?php

namespace Eddy7697\Ecpay2in1\Facades;

use Illuminate\Support\Facades\Facade;

class Ecpay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ecpay';
    }
}
