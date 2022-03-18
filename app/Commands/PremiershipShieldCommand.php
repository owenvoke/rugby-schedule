<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class PremiershipShieldCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'premiership-shield {--p|include-past : Include past events}
                                               {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Gallagher Premiership Shield';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4041&source=sfms&project=premier&TeamId=';
    }
}
