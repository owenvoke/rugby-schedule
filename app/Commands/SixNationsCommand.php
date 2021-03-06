<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class SixNationsCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'six-nations {team? : An optional team name}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Six Nations';
    }

    protected function getFeedUrl(): string
    {
        return sprintf(
            'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4294&source=sfms&project=sixnations&TeamId=%s',
            $this->getTeamFromOption()
        );
    }

    private function getTeamFromOption(): string
    {
        return match (strtolower($this->argument('team'))) {
            'england' => '125',
            'ireland' => '126',
            'scotland' => '127',
            'wales' => '128',
            'france' => '129',
            'italy' => '130',
            default => '',
        };
    }
}
