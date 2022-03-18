<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class PremiershipSevensCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'premiership-sevens {--include-past : Include past events}';

    protected function getFeedName(): string
    {
        return 'Gallagher Premiership 7s';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4191&source=sfms&project=premier&TeamId=';
    }
}
