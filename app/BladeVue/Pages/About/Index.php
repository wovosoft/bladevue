<?php

namespace App\BladeVue\Pages\About;

use App\BladeVue\Components\Buttons\Button;
use App\BladeVue\Components\Ui\Screens\Screen;

class Index
{
    public static string $file = "BladeVue/Pages/About/Index";

    public function render()
    {
        return Screen::make()
            ->title("Blade Vue is awesome!")
            ->schema([
                Button::make()
                    ->variant('primary')
                    ->label("Button with Label")
                    ->size('sm'),
                Button::make()
                    ->variant('primary')
                    ->label("Button with Label")
                    ->size('sm'),
            ]);
    }
}
