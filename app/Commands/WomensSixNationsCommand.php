<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\HasTeams;
use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class WomensSixNationsCommand extends ScheduleCommand implements HasTeams
{
    /** {@inheritdoc} */
    protected $signature = 'womens:six-nations {team? : An optional team name}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::WomensSixNations;
    }

    public function getTeam(): string|null
    {
        return match (strtolower($this->argument('team'))) {
            'england' => '1790',
            'ireland' => '1791',
            'scotland' => '1792',
            'france' => '1805',
            'italy' => '1839',
            'wales' => '3007',
            default => null,
        };
    }
}
