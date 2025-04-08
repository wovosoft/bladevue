<?php

namespace App\BladeVue\Components\Ui\Cards;

use App\BladeVue\Components\BaseComponent;

class Card extends BaseComponent
{
    public string $name = "Card";
    public string $from = "@/components/ui/card";

    public function getProps(): array
    {
        return [];
    }

    public function content(mixed $content): static
    {
        return $this->setSlot('default', $content);
    }
}
