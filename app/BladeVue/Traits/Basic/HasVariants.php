<?php

namespace App\BladeVue\Traits\Basic;

use function Illuminate\Support\enum_value;

trait HasVariants
{
    public string|\BackedEnum|null $variant = null;

    public function variant(string|\BackedEnum $variant): static
    {
        $this->variant = $variant;
        return $this;
    }

    public function getVariant(): ?string
    {
        return enum_value($this->variant, null);
    }
}
