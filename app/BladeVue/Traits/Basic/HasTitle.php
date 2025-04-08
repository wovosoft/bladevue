<?php

namespace App\BladeVue\Traits\Basic;

use App\BladeVue\Components\Ui\Screens\Screen;

trait HasTitle
{
    public ?string $title;

    /**
     * Set Title
     *
     * @param string $title
     * @return HasTitle|Screen
     */
    public function title(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Checks if title is set
     *
     * @return bool
     */
    public function hasTitle(): bool
    {
        return isset($this->title);
    }

    /**
     * Returns the title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
}
