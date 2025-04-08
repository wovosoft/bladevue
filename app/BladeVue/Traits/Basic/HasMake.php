<?php

namespace App\BladeVue\Traits\Basic;

trait HasMake
{
    public static function make(): static
    {
        return new static();
    }
}
