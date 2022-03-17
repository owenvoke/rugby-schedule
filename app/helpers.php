<?php

use Sabre\VObject\Component\VEvent;

if (! function_exists('google_calendar_event')) {
    function google_calendar_event(VEvent $event): string
    {
        return sprintf(
            'https://calendar.google.com/calendar/r/eventedit?text=%s&dates=%s/%s&details=%s&location=%s',
            urlencode(str($event->SUMMARY->getValue())->before(',')), // @phpstan-ignore-line
            urlencode($event->DTSTART->getValue()), // @phpstan-ignore-line
            urlencode($event->DTEND->getValue()), // @phpstan-ignore-line
            urlencode(str($event->SUMMARY->getValue())->before(',').PHP_EOL.PHP_EOL.$event->URL->getValue()), // @phpstan-ignore-line
            urlencode($event->LOCATION->getValue()), // @phpstan-ignore-line
        );
    }
}
