<?php

declare(strict_types=1);

namespace App\Contracts;

use App\DTOs\Event;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;
use Sabre\VObject\Component\VEvent;
use Sabre\VObject\Reader;
use function Termwind\render;

abstract class ScheduleCommand extends Command
{
    public function handle(): void
    {
        /** @var bool $includePast */
        $includePast = $this->option('include-past') ?: false;
        $feed = Reader::read(Http::get($this->getFeedUrl())->body());
        $feedName = $this->getFeedName();
        $includeCalendarLinks = supports_terminal_hyperlinks() && $this->option('include-calendar-links') === true;

        $events = new Collection();

        foreach ($feed->VEVENT as $event) {
            $events->push(Event::fromVEvent($event));
        }

        if (! $includePast) {
            $events = $events->filter(
                fn (Event $event) => $event->startDate->isAfter(now()->startOfDay())
            );
        }

        render(view('feed', compact('events', 'feedName', 'includeCalendarLinks'))->render());
    }

    public function getDescription(): string
    {
        return "View the {$this->getFeedName()} schedule";
    }

    abstract protected function getFeedUrl(): string;

    abstract protected function getFeedName(): string;
}
