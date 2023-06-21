<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Command\Command;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        collect(Artisan::all())->each(function (Command $command) {
            if (in_array($command::class, config('commands.hidden', []), true)) {
                $command->setHidden(true);
            }
        });
    }
}
