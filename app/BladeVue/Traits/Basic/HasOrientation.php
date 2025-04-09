<?php

namespace App\BladeVue\Traits\Basic;

trait HasOrientation
{
    /**
     * @var string The orientation of the accordion.
     */
    public string $orientation = 'vertical';

    public function orientation(string $orientation): static
    {
        $this->orientation = $orientation;
        return $this;
    }

    public function getOrientation(): string
    {
        return $this->orientation;
    }
}
