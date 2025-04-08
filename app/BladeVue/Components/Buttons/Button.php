<?php

namespace App\BladeVue\Components\Buttons;

use App\BladeVue\Traits\Basic\HasLabel;
use App\BladeVue\Traits\Basic\HasMake;
use App\BladeVue\Traits\Basic\HasSize;
use App\BladeVue\Traits\Basic\HasTag;
use App\BladeVue\Traits\Basic\HasVariants;
use Illuminate\View\View;

class Button
{
    use HasMake;
    use HasVariants;
    use HasLabel;
    use HasTag;
    use HasSize;

    public string $name = "Button";
    public string $from = "@/components/ui/button";

    public function __construct()
    {
        $this->tag = 'button';
    }


    public function getProps(): array
    {
        return [
            "variant" => $this->variant,
            "size"    => $this->size,
            "label"   => $this->label,
        ];
    }

    /**
     * Render with Common  Component Renderer. It can be overridden as well.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.render-vue-component', [
            "schema" => $this
        ]);
    }
}
