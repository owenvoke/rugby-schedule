<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class EuropeanChampionsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'european-champions {--include-past : Include past events}
                                               {--exclude-calendars : Exclude calendar links}';

    protected function getFeedName(): string
    {
        return 'European Champions Cup';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=418&source=erc&project=epcr&TeamId=';
    }
}
