<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class WomensSixNationsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'womens:six-nations {team? : An optional team name}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Women\'s Six Nations';
    }

    protected function getFeedUrl(): string
    {
        return sprintf(
            'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4392&source=sfms&project=sixnations&TeamId=%s',
            $this->getTeamFromOption()
        );
    }

    private function getTeamFromOption(): string
    {
        return match (strtolower($this->argument('team'))) {
            'england' => '1790',
            'ireland' => '1791',
            'scotland' => '1792',
            'france' => '1805',
            'italy' => '1839',
            'wales' => '3007',
            default => '',
        };
    }
}
