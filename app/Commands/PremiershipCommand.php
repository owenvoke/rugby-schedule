<?php

namespace App\Commands;

use App\Contracts\ScheduleCommand;

class PremiershipCommand extends ScheduleCommand
{
    /** {@inheritdoc} */
    protected $signature = 'premiership {team? : An optional team name}
                                        {--p|include-past : Include past events}
                                        {--c|include-calendar-links : Include calendar links}';

    protected function getFeedName(): string
    {
        return 'Gallagher Premiership';
    }

    protected function getFeedUrl(): string
    {
        return sprintf(
            'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4304&source=sfms&project=premier&TeamId=%s',
            $this->getTeamFromOption()
        );
    }

    private function getTeamFromOption(): string
    {
        return match (strtolower($this->argument('team'))) {
            'bath'       => '1',
            'gloucester' => '2',
            'leicester', 'tigers' => '4',
            'london-irish', 'london irish' => '5',
            'wasps' => '6',
            'harlequins', 'quins' => '7',
            'newcastle', 'falcons' => '8',
            'northampton', 'saints' => '9',
            'saracens' => '11',
            'sale', 'sharks' => '12',
            'bristol', 'bears' => '25',
            'exeter', 'chiefs' => '48',
            'worcester', 'warriors' => '57',
            default => '',
        };
    }
}
