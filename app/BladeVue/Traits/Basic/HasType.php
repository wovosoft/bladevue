<?php

namespace App\BladeVue\Traits\Basic;

trait HasType
{
    /**
     * Determines whether a "single" or "multiple" items can be selected at a time.
     *
     * This prop will overwrite the inferred type from modelValue and defaultValue.
     *
     * @var string|null
     */
    public ?string $type;

    public function type(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
