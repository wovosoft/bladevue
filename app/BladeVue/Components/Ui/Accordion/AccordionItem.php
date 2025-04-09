<?php

namespace App\BladeVue\Components\Ui\Accordion;

use App\BladeVue\Components\BaseComponent;
use App\BladeVue\Traits\Basic\HasDisabled;
use Illuminate\Support\Str;

class AccordionItem extends BaseComponent
{
    use HasDisabled;

    public ?string $value = null;

    public function value(string $value): static
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): ?string
    {
        if (is_null($this->value)) {
            $this->value = Str::uuid()->toString();
        }

        return $this->value;
    }
}
