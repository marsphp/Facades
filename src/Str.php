<?php

namespace facades\src;

use facades\src\Abstracts\Facade;

class Str extends Facade
{
    public function getFacadeAccessor(): string
    {
        return 'str';
    }
}