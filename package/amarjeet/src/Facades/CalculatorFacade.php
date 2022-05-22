<?php

namespace Amarjeet\Calculator\Facades;

use Illuminate\Support\Facades\Facade;

class CalculatorFacade extends Facade
{

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'calculator'; }
}