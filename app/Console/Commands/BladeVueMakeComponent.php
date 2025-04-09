<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use function Illuminate\Filesystem\join_paths;

class BladeVueMakeComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bladevue:make-component {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        Artisan::call("make:class", [
            "name" => join_paths("BladeVue/Components/$name"),
        ]);

        $this->info(Artisan::output());
    }
}
