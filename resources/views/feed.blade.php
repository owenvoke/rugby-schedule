@php
    /** @var Sabre\VObject\Component\VCalendar $feed */
    /** @var bool $includePast */
    /** @var string $feedName */
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
            <th>Add to Calendar</th>
        </tr>
        </thead>
        @if (isset($feed->VEVENT) && ! empty($feed->VEVENT))
            @foreach($feed->VEVENT as $event)
                @if ((isset($includePast) && $includePast) || Illuminate\Support\Carbon::parse($event->DTSTART->getValue())->isAfter(now()->startOfDay()))
                    <tr>
                        <td>
                            <a href="{{ $event->URL->getValue() }}">{{ $event->UID->getValue() }}</a>
                        </td>
                        <td>
                            <span>{{ str($event->SUMMARY->getValue())->before(',') }}</span>
                        </td>
                        <td>
                            <span>{{ $event->LOCATION->getValue() }}</span>
                        </td>
                        <td>
                            <span>{{ Illuminate\Support\Carbon::parse($event->DTSTART->getValue())->format('D jS M Y') }} ({{ Illuminate\Support\Carbon::parse($event->DTSTART->getValue())->longRelativeToNowDiffForHumans() }})</span>
                        </td>
                        <td>
                            <a href="{{ google_calendar_event($event) }}">Google</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        @else
            <tr>
                <td colspan="4">No events were found for the specified schedule.</td>
            </tr>
        @endif
    </table>
</div>
