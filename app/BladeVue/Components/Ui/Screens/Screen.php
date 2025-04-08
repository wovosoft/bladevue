<?php

namespace App\BladeVue\Components\Ui\Screens;

use App\BladeVue\Traits\Basic\HasTitle;

class Screen
{
    use HasTitle;

    public array $schema;

    /**
     * Returns an instance of Screen Class
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
    }

    /**
     * Set Schema for the Screen
     *
     * @param array $schema
     * @return $this
     */
    public function schema(array $schema): self
    {
        $this->schema = $schema;
        return $this;
    }
}
