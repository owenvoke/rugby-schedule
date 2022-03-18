<?php

use Illuminate\Support\Env;
use Sabre\VObject\Component\VEvent;
use Spatie\CalendarLinks\Link;

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
        return Link::create(
            str($event->SUMMARY->getValue())->before(','), // @phpstan-ignore-line
            $event->DTSTART->getDateTime(), // @phpstan-ignore-line
            $event->DTEND->getDateTime(), // @phpstan-ignore-line
        )
            ->description(str($event->SUMMARY->getValue())->before(',').PHP_EOL.PHP_EOL.$event->URL->getValue()) // @phpstan-ignore-line
            ->address($event->LOCATION->getValue()) // @phpstan-ignore-line
            ->google();
    }
}

if (! function_exists('outlook_calendar_event')) {
    function outlook_calendar_event(VEvent $event): string
    {
        return Link::create(
            str($event->SUMMARY->getValue())->before(','), // @phpstan-ignore-line
            $event->DTSTART->getDateTime(), // @phpstan-ignore-line
            $event->DTEND->getDateTime(), // @phpstan-ignore-line
        )
            ->description(str($event->SUMMARY->getValue())->before(',').PHP_EOL.PHP_EOL.$event->URL->getValue()) // @phpstan-ignore-line
            ->address($event->LOCATION->getValue()) // @phpstan-ignore-line
            ->webOutlook();
    }
}
