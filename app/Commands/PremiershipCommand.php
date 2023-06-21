<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\HasTeams;
use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class PremiershipCommand extends ScheduleCommand implements HasTeams
{
    /** {@inheritdoc} */
    protected $signature = 'premiership {team? : An optional team name}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::Premiership;
    }

    public function getTeam(): string|null
    {
        return match (strtolower($this->argument('team'))) {
            'bath' => '1',
            'gloucester' => '2',
            'leicester', 'tigers' => '4',
            'london-irish', 'london irish' => '5',
            'wasps' => '6',
            'harlequins', 'quins' => '7',
            'newcastle', 'falcons' => '8',
            'northampton', 'saints' => '9',
            'saracens' => '11',
            'sale', 'sharks' => '12',
            'bristol', 'bears' => '25',
            'exeter', 'chiefs' => '48',
            'worcester', 'warriors' => '57',
            default => null,
        };
    }
}
