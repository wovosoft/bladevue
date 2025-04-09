<?php

namespace App\BladeVue\Traits\Basic;

trait HasMake
{
    public static function make(): static
    {
        return app(static::class);
    }
}
