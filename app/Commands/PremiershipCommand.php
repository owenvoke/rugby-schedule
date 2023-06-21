<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\HasTeams;
use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class PremiershipCommand extends ScheduleCommand implements HasTeams
{
    /** {@inheritdoc} */
    protected $signature = 'premiership {--t|team= : Filter matches for a specific team}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::Premiership;
    }

    public function mapTeams(string $identifier): string|null
    {
        return match ($identifier) {
            'bath' => '1',
            'gloucester' => '2',
            'leicester', 'tigers' => '4',
            'harlequins', 'quins' => '7',
            'newcastle', 'falcons' => '8',
            'northampton', 'saints' => '9',
            'saracens' => '11',
            'sale', 'sharks' => '12',
            'bristol', 'bears' => '25',
            'exeter', 'chiefs' => '48',
            default => null,
        };
    }
}
