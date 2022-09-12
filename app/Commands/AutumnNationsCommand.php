<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class AutumnNationsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'autumn-nations {--p|include-past : Include past events}
                                           {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Autumn Nations Series';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4358&source=sfms&TeamId=';
    }
}
