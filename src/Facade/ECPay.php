<?php

namespace Hitobias\ECPay\Facade;

use Illuminate\Support\Facades\Facade;

class ECPay extends Facade
{

    protected static function getFacadeAccessor()
    {return 'ecpay';}

}
