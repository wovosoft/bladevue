<?php

use App\Http\Controllers\Controller;
use Composer\ClassMapGenerator\ClassMapGenerator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Stringable;

Route::middleware(['auth', 'verified'])->group(function () {
    $controllers = ClassMapGenerator::createMap(app_path("Http/Controllers/BladeVue"));
    foreach ($controllers as $class => $path) {
        if (class_exists($class) && is_subclass_of($class, Controller::class)) {
            //for invokable controllers
            if (method_exists($class, "__invoke")) {
                $name = str(class_basename($class))->before("Controller")->squish()->lower();

                $method = match ($name->value()) {
                    "index", "show", "edit" => "get",
                    "create"                => "put",
                    "update"                => "patch",
                    "destroy"               => "delete",
                };

                $routeName = str($class)
                    ->replace("\\", ".")
                    ->lower()
                    ->after(".bladevue.")
                    ->replace("." . strtolower($name) . "controller", "")
                    ->when(in_array($name->value(), ["edit", "update", "destroy", "show"]), function (Stringable $stringable) use ($class, $method) {
                        return $stringable->append("/{record}");
                    })
                    ->append(".$name");

                Route::match([$method], $routeName->replace(".", "/"), $class)
                    ->name($routeName->replace("/{record}", "")->value());
            }
        }
    }
});



