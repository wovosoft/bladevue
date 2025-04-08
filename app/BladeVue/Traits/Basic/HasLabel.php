<?php

namespace App\BladeVue\Traits\Basic;

trait HasLabel
{
    public ?string $label = null;

    public function label(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }
}
