<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class U18sPremiershipCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'u18s:premiership {--t|team= : Filter matches for a specific team}
                                             {--p|include-past : Include past events}
                                             {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::U18sPremiership;
    }
}
