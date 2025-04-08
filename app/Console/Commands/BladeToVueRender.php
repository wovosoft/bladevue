<?php

namespace App\Console\Commands;

use Composer\ClassMapGenerator\ClassMapGenerator;
use Illuminate\Console\Command;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\File;
use function Illuminate\Filesystem\join_paths;

class BladeToVueRender extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bladevue:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @throws BindingResolutionException
     * @throws \Throwable
     */
    public function handle()
    {
        $map = ClassMapGenerator::createMap(app_path("BladeVue/Pages"));


        foreach ($map as $symbol => $path) {
            $outputPath = resource_path(join_paths(
                "js/pages",
                str($path)
                    ->replaceLast(".php", ".vue")
                    ->replaceFirst(app_path(), "")
                    ->value()
            ));


            File::ensureDirectoryExists(dirname($outputPath));

            $html = view("components.render-blade-to-vue", [
                "screen" => app()->make($symbol)->render()
            ]);

            File::put($outputPath, $html);
        }
    }

}
