@php
    /** @var Illuminate\Support\Collection<App\DTOs\Event> $events */
    /** @var string $feedName */
    /** @var bool $supportsTerminalHyperlinks */
@endphp

<div class="ml-2 my-1">
    <dl class="pb-1">
        <dt>{{ config('app.name') }} - {{ $feedName }}</dt>
    </dl>

    <table style="box">
        <thead>
        <tr>
            <th>ID</th>
            <th>Teams</th>
            <th>Location</th>
            <th>Date</th>
            @if ($includeCalendarLinks)
                <th>Add to Calendar</th>
            @endif
        </tr>
        </thead>
        @if (! $events->isEmpty())
            @foreach($events as $event)
                <tr>
                    <td>
                        <a href="{{ $event->url }}">{{ $event->id }}</a>
                    </td>
                    <td>
                        <span>{{ $event->summary }}</span>
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
            @endforeach
        @else
            <tr>
                @if ($includeCalendarLinks)
                    <td colspan="5">No events were found for the specified schedule.</td>
                @else
                    <td colspan="4">No events were found for the specified schedule.</td>
                @endif
            </tr>
        @endif
    </table>
</div>
