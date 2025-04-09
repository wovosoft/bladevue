<?php

use App\BladeVue\Components\Ui\Screens\Screen;
use Inertia\Response;

if (!function_exists("bvRender")) {
    /**
     * @param class-string<Screen> $name
     * @param array $vars
     * @return Response
     */
    function bvRender(string $name, array $vars = []): Response
    {
        return inertia($name::$file, $vars);
    }
}
