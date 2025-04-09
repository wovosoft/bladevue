<?php

namespace App\BladeVue\Components\Buttons;

use App\BladeVue\Components\BaseComponent;
use App\BladeVue\Traits\Basic\HasLabel;
use App\BladeVue\Traits\Basic\HasSize;
use App\BladeVue\Traits\Basic\HasVariants;

class Button extends BaseComponent
{
    use HasVariants;
    use HasLabel;
    use HasSize;

    public string $from = "@/components/ui/button";

    /**
     * @param string|null $label
     * @return Button
     */
    public function label(?string $label): static
    {
        $this->label = $label;
        $this->setSlot('default', $label);
        return $this;
    }

    public function getProps(): array
    {
        return [
            "variant" => $this->getVariant(),
            "size"    => $this->getSize(),
        ];
    }

}
