<?php

declare(strict_types=1);

namespace App\DTOs;

use Carbon\Carbon;
use Sabre\VObject\Component\VEvent;

final class Event
{
    private function __construct(
        public string $id,
        public string $url,
        public string $summary,
        public string $location,
        public Carbon $startDate,
        public Carbon $endDate,
    ) {}

    public static function fromVEvent(VEvent $event): self
    {
        return new self(
            id: $event->UID->getValue(),
            url: $event->URL->getValue(),
            summary: str($event->SUMMARY->getValue())->before(',')->ascii()->toString(),
            location: str($event->LOCATION->getValue())->ascii()->toString(),
            startDate: Carbon::parse($event->DTSTART->getValue()),
            endDate: Carbon::parse($event->DTEND->getValue()),
        );
    }
}
