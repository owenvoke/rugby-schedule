<?php

use Illuminate\Support\Env;
use Sabre\VObject\Component\VEvent;

if (! function_exists('supports_terminal_hyperlinks')) {
    function supports_terminal_hyperlinks(): bool
    {
        // Hyperlinks forced through environment
        if (Env::get('FORCE_HYPERLINK')) {
            return true;
        }

        // DomTerm
        if (Env::get('DOMTERM')) {
            return true;
        }

        // Terminal Programs
        if (($program = Env::get('TERM_PROGRAM')) &&
            in_array($program, ['Hyper', 'iTerm.app', 'terminology', 'WezTerm'], true)
        ) {
            return true;
        }

        // Kitty
        if (($program = Env::get('TERM')) && $program === 'xterm-kitty') {
            return true;
        }

        // Windows Terminal or Konsole
        if (Env::get('WT_SESSION') || Env::get('KONSOLE_VERSION')) {
            return true;
        }

        return false;
    }
}

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
