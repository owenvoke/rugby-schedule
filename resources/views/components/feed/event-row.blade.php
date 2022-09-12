@props([
    /** @var App\DTOs\Event $event */
    'event' => null,
    /** @var bool $includeCalendarLinks */
    'includeCalendarLinks' => null,
])
<tr>
    <td>
        <a class="{{ $event->startDate->isToday() ? 'text-green-500 font-bold' : null }}" href="{{ str($event->url)->whenStartsWith('overview/', fn () => '') }}">{{ $event->summary }}</a>
    </td>
    <td>
        <span>{{ $event->location }}</span>
    </td>
    <td>
        <span>{{ $event->startDate->format('H:i D jS M Y') }} ({{ $event->startDate->shortRelativeToNowDiffForHumans() }})</span>
    </td>
    @if ($includeCalendarLinks)
        <td>
            <span>
                <a href="{{ google_calendar_event($event) }}">Google</a>
                <span> </span>
                <a href="{{ outlook_calendar_event($event) }}">Outlook</a>
            </span>
        </td>
    @endif
</tr>
