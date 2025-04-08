<?php

namespace App\BladeVue\Traits\Basic;

use App\BladeVue\Components\BaseComponent;
use App\BladeVue\Components\Ui\Screens\Screen;

trait HasSchema
{
    public array $schema = [];

    public function schema(array $schema): static
    {
        $this->schema = $schema;

        foreach ($schema as $key => $value) {
            $this->setScreenContext($value,$this);
        }
        return $this;
    }

    /**
     * Set Screen as Screen Context to all the children recursively.
     *
     * Screen Context is used to grab data like imports from recursively nested child components
     *
     * @param BaseComponent $component
     * @param Screen $context
     * @return void
     */
    private function setScreenContext(BaseComponent $component, Screen $context): void
    {
        $component->setScreen($context);

        $this->imports[$component->loadFrom()] = array_unique([
            ...array_values($this->imports[$component->loadFrom()] ?? []),
            $component->getName()
        ]);

        foreach ($component->schema as $schema) {
            $this->setScreenContext($schema, $component->screen);
        }
    }
}
