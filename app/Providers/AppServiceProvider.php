<?php

namespace App\Providers;

use Illuminate\Console\Scheduling\ScheduleRunCommand;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Command\Command;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        collect(Artisan::all())->each(function (Command $command) {
            if (in_array($command::class, config('commands.hidden', []), true)) {
                $command->setHidden(true);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
