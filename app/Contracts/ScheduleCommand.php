<?php

declare(strict_types=1);

namespace App\Contracts;

use App\DTOs\Event;
use App\Enums\Competition;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use LaravelZero\Framework\Commands\Command;
use Sabre\VObject\Parser\MimeDir;
use Sabre\VObject\Reader;

use function Termwind\render;

abstract class ScheduleCommand extends Command
{
    public function handle(): int
    {
        if ($this instanceof IsDisabled) {
            return $this->disabled();
        }

        if ($this->option('team') && ! $this instanceof HasTeams) {
            return $this->doesNotSupportTeams();
        }

        /** @var bool $includePast */
        $includePast = $this->option('include-past') ?: false;
        $feed = Reader::read(Http::get($this->getFeedUrl())->body(), MimeDir::OPTION_IGNORE_INVALID_LINES);
        $feedName = $this->getCompetition()->name();
        $includeCalendarLinks = supports_terminal_hyperlinks() && $this->option('include-calendar-links') === true;

        $events = new Collection();

        foreach ($feed->VEVENT ?? [] as $event) {
            $events->push(Event::fromVEvent($event));
        }

        if (! $includePast) {
            $events = $events->filter(
                fn (Event $event) => $event->startDate->isAfter(now()->startOfDay())
            );
        }

        render(view('feed', compact('events', 'feedName', 'includeCalendarLinks'))->render());

        return self::SUCCESS;
    }

    abstract protected function getCompetition(): Competition;

    public function getDescription(): string
    {
        return "View the {$this->getCompetition()->name()} schedule";
    }

    protected function getFeedUrl(): string
    {
        $url = $this->getCompetition()->feedUrl();

        if ($this instanceof HasTeams) {
            $url = str_replace('{{team}}', $this->getTeam(), $url);
        }

        return $url;
    }

    public function getTeam(): ?string
    {
        if (! $this instanceof HasTeams) {
            return null;
        }

        if (! $team = $this->option('team')) {
            return '';
        }

        return (string) $this->mapTeams(
            (string) Str::of($team)->lower(),
        );
    }

    protected function disabled(): int
    {
        render(view('error', [
            'summary' => 'Command Disabled',
            'message' => 'This command has been disabled until a new fixture schedule is available.',
        ])->render());

        return self::SUCCESS;
    }

    protected function doesNotSupportTeams(): int
    {
        render(view('notice', ['notice' => 'This command does not support specifying teams.'])->render());

        return self::INVALID;
    }
}
