<?php

namespace App\BladeVue\Components\Ui\Accordion;

use App\BladeVue\Components\BaseComponent;
use App\BladeVue\Traits\Basic\HasCollapsible;
use App\BladeVue\Traits\Basic\HasDefaultValue;
use App\BladeVue\Traits\Basic\HasDisabled;
use App\BladeVue\Traits\Basic\HasOrientation;
use App\BladeVue\Traits\Basic\HasType;

class Accordion extends BaseComponent
{
    use HasCollapsible;
    use HasDefaultValue;
    use HasDisabled;
    use HasOrientation;
    use HasType;

}
