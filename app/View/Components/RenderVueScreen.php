<?php

namespace App\View\Components;

use App\BladeVue\Components\Ui\Screens\Screen;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RenderVueScreen extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Screen $screen,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.render-vue-screen');
    }
}
