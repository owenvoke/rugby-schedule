<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class EuropeanChallengeCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'european-challenge {--t|team= : Filter matches for a specific team}
                                               {--p|include-past : Include past events}
                                               {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::EuropeanChallengeCup;
    }
}
