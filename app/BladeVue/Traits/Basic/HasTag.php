<?php

namespace App\BladeVue\Traits\Basic;

trait HasTag
{
    public ?string $tag = null;

    public function tag(string $tag): static
    {
        $this->tag = $tag;
        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }
}
