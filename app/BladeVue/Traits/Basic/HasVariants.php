<?php

namespace App\BladeVue\Traits\Basic;

trait HasVariants
{
    public ?string $variant = null;

    public function variant(string $variant): static
    {
        $this->variant = $variant;
        return $this;
    }

    public function getVariant(): ?string
    {
        return $this->variant;
    }
}
