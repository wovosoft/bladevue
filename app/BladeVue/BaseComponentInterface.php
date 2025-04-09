<?php

namespace App\BladeVue;

interface BaseComponentInterface
{
    public function loadFrom(): string;

    public function getProps(): array;
}
