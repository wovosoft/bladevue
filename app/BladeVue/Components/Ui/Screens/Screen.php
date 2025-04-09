<?php

namespace App\BladeVue\Components\Ui\Screens;

use App\BladeVue\Components\BaseComponent;
use App\BladeVue\Traits\Basic\HasSchema;
use App\BladeVue\Traits\Basic\HasTitle;

class Screen
{
    use HasTitle;
    use HasSchema;

    private array $layout = [
        "name" => "AppLayout",
        "from" => '@/layouts/AppLayout.vue'
    ];

    private array $imports = [];

    /**
     * Returns an instance of Screen Class
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
    }

    public function layout(string $name, string $from): static
    {
        $this->layout = ["name" => $name, "from" => $from];

        return $this;
    }

    public function getLayout(): array
    {
        return $this->layout;
    }

    public function import(string $name, string $from): static
    {
        $this->imports[$from] = array_unique([
            ...array_values($this->imports[$from] ?? []),
            $name
        ]);

        return $this;
    }

    public function getImports(): array
    {
        return $this->imports;
    }

    /**
     * Override schema class to set screen context to all its nested components.
     * Component schema works independently, just to set components as schema
     *
     * @param array $components
     * @return $this
     */
    public function schema(array $components): static
    {
        $this->schema = $components;

        /**
         * @var BaseComponent $component
         */
        foreach ($this->schema as $component) {
            $this->propagateSchemaContext($component, $this);
        }

        return $this;
    }

    public function propagateSchemaContext(BaseComponent $component, Screen $screen): static
    {
        $component->setScreenContext($screen);

        if (!empty($component->schema)) {
            foreach ($component->schema as $childComponent) {
                $this->propagateSchemaContext($childComponent, $this);
            }
        }

        return $this;
    }
}
