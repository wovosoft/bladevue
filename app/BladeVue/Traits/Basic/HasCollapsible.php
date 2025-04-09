<?php

namespace App\BladeVue\Traits\Basic;

trait HasCollapsible
{
    /**
     * When type is "single", allows closing content when clicking trigger for an open item. When type is "multiple", this prop has no effect.
     * @var bool
     */
    public bool $collapsible = false;

    public function collapsible(bool $collapsible): static
    {
        $this->collapsible = $collapsible;
        return $this;
    }

    public function isCollapsible(): bool
    {
        return boolval($this->collapsible);
    }
}
