<?php

namespace App\BladeVue\Components\Ui\Screens;

use App\BladeVue\Components\BaseComponent;
use App\BladeVue\Traits\Basic\HasSchema;
use App\BladeVue\Traits\Basic\HasTitle;

class Screen
{
    use HasTitle;
    use HasSchema;

    private array $imports = [];

    /**
     * Returns an instance of Screen Class
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
    }

    public function getImports(): array
    {
        return $this->imports;
    }


}
