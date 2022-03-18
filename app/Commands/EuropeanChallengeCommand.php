<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class EuropeanChallengeCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'european-challenge {--include-past : Include past events}
                                               {--exclude-calendars : Exclude calendar links}';

    protected function getFeedName(): string
    {
        return 'European Challenge Cup';
    }

    protected function getFeedUrl(): string
    {
        return 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4303&source=erc&project=epcr&TeamId=';
    }
}
