<?php

namespace App\Contracts;

use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;
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
        $supportsTerminalHyperlinks = supports_terminal_hyperlinks();

        render(view('feed', compact('includePast', 'feed', 'feedName', 'supportsTerminalHyperlinks')));
    }

    public function getDescription(): string
    {
        return "View the {$this->getFeedName()} schedule";
    }

    abstract protected function getFeedUrl(): string;

    abstract protected function getFeedName(): string;
}
