<?php

namespace Bazucompany\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the provided services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the provided services.
     */
    public function register()
    {
        $generators = [
            'command.make.module'            => \Bazucompany\Modules\Console\Generators\MakeModuleCommand::class,
            'command.make.module.controller' => \Bazucompany\Modules\Console\Generators\MakeControllerCommand::class,
            'command.make.module.middleware' => \Bazucompany\Modules\Console\Generators\MakeMiddlewareCommand::class,
            'command.make.module.migration'  => \Bazucompany\Modules\Console\Generators\MakeMigrationCommand::class,
            'command.make.module.model'      => \Bazucompany\Modules\Console\Generators\MakeModelCommand::class,
            'command.make.module.policy'     => \Bazucompany\Modules\Console\Generators\MakePolicyCommand::class,
            'command.make.module.provider'   => \Bazucompany\Modules\Console\Generators\MakeProviderCommand::class,
            'command.make.module.request'    => \Bazucompany\Modules\Console\Generators\MakeRequestCommand::class,
            'command.make.module.seeder'     => \Bazucompany\Modules\Console\Generators\MakeSeederCommand::class,
            'command.make.module.test'       => \Bazucompany\Modules\Console\Generators\MakeTestCommand::class,
            'command.make.module.job'        => \Bazucompany\Modules\Console\Generators\MakeJobCommand::class,
        ];

        foreach ($generators as $slug => $class) {
            $this->app->singleton($slug, function ($app) use ($slug, $class) {
                return $app[$class];
            });

            $this->commands($slug);
        }
    }
}
