<?php

namespace App\BladeVue\Components;

use App\BladeVue\BaseComponentInterface;
use App\BladeVue\Components\Ui\Screens\Screen;
use App\BladeVue\Traits\Basic\HasMake;
use App\BladeVue\Traits\Basic\HasSchema;
use App\BladeVue\Traits\Basic\HasSlots;
use App\BladeVue\Traits\Basic\HasTag;
use Illuminate\View\View;

class BaseComponent implements BaseComponentInterface
{
    use HasMake;
    use HasTag;
    use HasSlots;
    use HasSchema;

    public Screen $screen;
    public string $from;


    public function __construct()
    {
        $this->tag = $this->getName();
    }


    public function getName(): string
    {
        return $this->name ?? class_basename($this);
    }

    public function setScreen(Screen $screen): static
    {
        $this->screen = $screen;
        return $this;
    }

    public function getScreen(): Screen
    {
        return $this->screen;
    }

    public function loadFrom(): string
    {
        return $this->from;
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
