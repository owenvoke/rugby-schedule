@php
/** @var Sabre\VObject\Component\VCalendar $feed */
/** @var bool $includePast */
@endphp

<div class="ml-2 my-1">
    <table style="box">
        <thead>
        <tr>
            <th>ID</th>
            <th>Teams</th>
            <th>Location</th>
            <th>Date</th>
        </tr>
        </thead>
    @forelse($feed->VEVENT as $event)
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
            </tr>
        @endif
    @empty
            <tr>
                <td colspan="3">No DNS history items were found for the authenticated user.</td>
            </tr>
    @endforelse
</div>
