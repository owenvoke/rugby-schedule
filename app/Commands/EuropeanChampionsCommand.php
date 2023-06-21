<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class EuropeanChampionsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'european-champions {team? : An optional team name}
                                               {--p|include-past : Include past events}
                                               {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::EuropeanChampionsCup;
    }
}
