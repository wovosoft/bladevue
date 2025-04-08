<?php

namespace App\BladeVue\Traits\Basic;

trait HasSize
{
    public string|array|null $size = null;

    public function size(string|array|null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): array|string|null
    {
        return $this->size;
    }
}
