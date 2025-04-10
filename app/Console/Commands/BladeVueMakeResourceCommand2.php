<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use function Laravel\Prompts\select;

class BladeVueMakeResourceCommand2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bv:make-resource {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Blade Vue Resource';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');

        if (is_null($name)) {
            $name = $this->ask('What is the panel name?');
        }

        //get first level folders in BladeVue folder
        $panels = Arr::map(File::directories(app_path('Http/Controllers/BladeVue')), function ($path) {
            return basename($path);
        });

        if (empty($panels)) {
            $this->warn('No panels found.');
            return;
        }

        $panel = select(label: "Select a panel", options: $panels, required: true);

        collect([
            "index",
            "create",
            "update",
            "edit",
            "show",
            "destroy",
        ])->each(function ($method) use ($name, $panel) {
            $method = str($method)->pascal();
            $name   = str($name)->pluralPascal();

            Artisan::call("make:controller", [
                "name"        => "BladeVue/$panel/$name/{$method}Controller",
                "--invokable" => true
            ]);

            $this->info(Artisan::output());

        });

    }
}
