<?php

namespace App\BladeVue\Traits\Basic;

use App\BladeVue\Components\Ui\Screens\Screen;

trait HasSchema
{
    public array $schema = [];

    public function schema(array $components): static
    {
        $this->schema = $components;

        return $this;
    }

    public function setScreenContext(Screen $screen): static
    {
        $this->screen = $screen;

        /**
         * Push to Screen Imports
         */

        $this->screen->import($this->getName(), $this->loadFrom());

        return $this;
    }

    public function getScreenContext(): ?Screen
    {
        return $this->screen ?? null;
    }
}
