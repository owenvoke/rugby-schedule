@php
    /** @var Illuminate\Support\Collection<App\DTOs\Event> $events */
    /** @var string $feedName */
    /** @var bool $supportsTerminalHyperlinks */
@endphp

<x-layouts.app>
    <dl class="pb-1">
        <dt>{{ config('app.name') }} - {{ $feedName }}</dt>
    </dl>

    @if ($events->isNotEmpty())
        <table style="box">
            <x-feed.event-header :include-calendar-links="$includeCalendarLinks"></x-feed.event-header>
            @foreach($events as $event)
                <x-feed.event-row :event="$event" :include-calendar-links="$includeCalendarLinks"></x-feed.event-row>
            @endforeach
        </table>
    @else
        <div class="w-full text-yellow">No events were found for the specified schedule.</div>
    @endif
</x-layouts.app>
