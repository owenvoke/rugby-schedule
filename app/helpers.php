<?php

use Sabre\VObject\Component\VEvent;

if (! function_exists('google_calendar_event')) {
    function google_calendar_event(VEvent $event)
    {
        return sprintf(
            'https://calendar.google.com/calendar/r/eventedit?text=%s&dates=%s/%s&details=%s&location=%s',
            urlencode(str($event->SUMMARY->getValue())->before(',')),
            urlencode($event->DTSTART->getValue()),
            urlencode($event->DTEND->getValue()),
            urlencode(str($event->SUMMARY->getValue())->before(',').PHP_EOL.PHP_EOL.$event->URL->getValue()),
            urlencode($event->LOCATION->getValue()),
        );
    }
}
