<?php

namespace App\BladeVue\Traits\Basic;

trait HasSlots
{
    public array $slots = [];

    public function setSlot(string $name, mixed $value): self
    {
        $this->slots[$name] = $value;
        return $this;
    }

    public function getSlot(string $name): mixed
    {
        return $this->slots[$name] ?? null;
    }

    public function setSlots(array $slots): self
    {
        $this->slots = $slots;
        return $this;
    }

    public function getSlots(): array
    {
        return $this->slots;
    }
}
