<?php

namespace facades\src;

use facades\src\Abstracts\Facade;

class Date extends Facade
{
    public function getFacadeAccessor(): string
    {
        return 'date';
    }
}