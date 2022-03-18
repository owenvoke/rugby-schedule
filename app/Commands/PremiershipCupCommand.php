<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class PremiershipCupCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'premiership-cup {--include-past : Include past events}';

    protected function getFeedName(): string
    {
        return 'Gallagher Premiership Cup';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4322&source=sfms&project=edfcup&TeamId=';
    }
}
