s@props([
    /** @var bool $includeCalendarLinks */
    'includeCalendarLinks' => null,
])
<thead>
<tr>
    <th>Teams</th>
    <th>Location</th>
    <th>Date</th>
    @if ($includeCalendarLinks)
        <th>Add to Calendar</th>
    @endif
</tr>
</thead>
