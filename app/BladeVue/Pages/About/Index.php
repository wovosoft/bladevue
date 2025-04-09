<?php

namespace App\BladeVue\Pages\About;

use App\BladeVue\Components\Buttons\Button;
use App\BladeVue\Components\Ui\Cards\Card;
use App\BladeVue\Components\Ui\Screens\Screen;
use App\BladeVue\Enums\ButtonVariants;
use Inertia\Response;

class Index
{
    public static string $file = "BladeVue/Pages/About/Index";

    public static function serve(array $data = []): Response
    {
        return inertia(self::$file, $data);
    }

    public function render()
    {
        return Screen::make()
            ->title("Blade Vue is awesome!")
            ->schema([
                Button::make()
                    ->variant(ButtonVariants::Destructive)
                    ->label("Destructive Small Button")
                    ->size('sm'),

                Button::make()
                    ->variant(ButtonVariants::Outline)
                    ->label("Outline Small Button")
                    ->size('sm'),

                Button::make()
                    ->variant(ButtonVariants::Destructive)
                    ->label("Destructive Default Button"),

                Card::make()
                    ->schema([
                        Button::make()
                            ->variant(ButtonVariants::Outline)
                            ->label("Outline Default Button"),
                        Button::make()
                            ->variant(ButtonVariants::Outline)
                            ->label("Outline Default Button"),
                        Button::make()
                            ->variant(ButtonVariants::Outline)
                            ->label("Outline Default Button"),
                        Button::make()
                            ->variant(ButtonVariants::Outline)
                            ->label("Outline Default Button"),

                        Card::make()
                            ->schema([
                                Button::make()
                                    ->variant(ButtonVariants::Outline)
                                    ->label("Outline Default Button"),
                                Button::make()
                                    ->variant(ButtonVariants::Outline)
                                    ->label("Outline Default Button"),
                                Button::make()
                                    ->variant(ButtonVariants::Outline)
                                    ->label("Outline Default Button"),
                                Button::make()
                                    ->variant(ButtonVariants::Outline)
                                    ->label("Outline Default Button"),
                            ])
                    ])

            ]);
    }
}
