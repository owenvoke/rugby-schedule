<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class U20sSixNationsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'u20s:six-nations {--p|include-past : Include past events}
                                             {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Under-20s Six Nations';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4371&source=sfms&project=sixnations&TeamId=';
    }
}
