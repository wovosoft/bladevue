<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class RenderVueComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $schema = null,
    )
    {
        //
    }

    public function getVueProps(): HtmlString
    {
        return new HtmlString(
            collect($this->schema->getProps() ?? [])
                ->implode(function ($value, $key) {
                    return "$key=\"$value\"";
                }," ")
        );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.render-vue-component');
    }
}
