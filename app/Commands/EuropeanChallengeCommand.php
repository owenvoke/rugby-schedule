<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class EuropeanChallengeCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'european-challenge {--p|include-past : Include past events}
                                               {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'European Challenge Cup';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4303&source=erc&project=epcr&TeamId=';
    }
}
