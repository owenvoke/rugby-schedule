<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class EuropeanChampionsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'european-champions {--p|include-past : Include past events}
                                               {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'European Champions Cup';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=418&source=erc&project=epcr&TeamId=';
    }
}
