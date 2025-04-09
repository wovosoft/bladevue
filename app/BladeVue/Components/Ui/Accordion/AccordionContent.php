<?php

namespace App\BladeVue\Components\Ui\Accordion;

use App\BladeVue\Components\BaseComponent;

class AccordionContent extends BaseComponent
{
    public ?bool $forceMount = null;

    public function forceMount(bool $forceMount): static
    {
        $this->forceMount = $forceMount;
        return $this;
    }

    public function isForceMount(): bool
    {
        return boolval($this->forceMount);
    }
}
