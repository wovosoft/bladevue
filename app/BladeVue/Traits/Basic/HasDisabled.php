<?php

namespace App\BladeVue\Traits\Basic;

trait HasDisabled
{
    /**
     * When true, prevents the user from interacting with the accordion and all its items
     *
     * @var bool
     */
    public bool $disabled = false;

    public function disabled(bool $disabled): static
    {
        $this->disabled = $disabled;
        return $this;
    }

    public function isDisabled(): bool
    {
        return boolval($this->disabled);
    }
}
