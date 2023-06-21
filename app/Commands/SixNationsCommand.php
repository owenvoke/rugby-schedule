<?php

declare(strict_types=1);

namespace App\Commands;

use App\Contracts\HasTeams;
use App\Contracts\ScheduleCommand;
use App\Enums\Competition;

class SixNationsCommand extends ScheduleCommand implements HasTeams
{
    /** {@inheritdoc} */
    protected $signature = 'six-nations {--t|team= : Filter matches for a specific team}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getCompetition(): Competition
    {
        return Competition::SixNations;
    }

    public function mapTeams(string $identifier): string|null
    {
        return match ($identifier) {
            'england' => '125',
            'ireland' => '126',
            'scotland' => '127',
            'wales' => '128',
            'france' => '129',
            'italy' => '130',
            default => null,
        };
    }
}
