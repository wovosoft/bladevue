<?php

namespace App\BladeVue\Traits\Basic;

trait HasDefaultValue
{
    /**
     * The default active value of the item(s).
     *
     * Use when you do not need to control the state of the item(s).
     * @var string|array|null
     */
    public string|array|null $defaultValue = null;

    public function defaultValue(string|array|null $defaultValue): static
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function getDefaultValue(): string|array|null
    {
        return $this->defaultValue;
    }
}
