<?php

namespace facades\src;

use facades\src\Abstracts\Facade;

class Num extends Facade
{
    public function getFacadeAccessor(): string
    {
        return 'num';
    }
}