<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class U18sPremiershipCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'u18s:premiership {--p|include-past : Include past events}
                                             {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Premiership Rugby Under-18s Academy League';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4390&source=sfms&project=premier&TeamId=';
    }
}
