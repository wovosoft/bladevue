<?php

namespace App\BladeVue\Enums;

enum ButtonVariants: string
{
    case Default     = "default";
    case Destructive = "destructive";
    case Outline     = "outline";
    case Ghost       = "ghost";
    case Link        = "link";
}
