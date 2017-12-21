<ul class="Schedule-tabs">
    @foreach ($schedules as $idx => $schedule)
        <li>
            <span class="{{ $schedule->is_active ? 'is-active' : '' }}">{{ $schedule->dayOfWeek }}</span>
        </li>
    @endforeach
</ul>

@foreach ($schedules as $idx => $schedule)

    <table class="Schedule-list {{ $schedule->is_active ? 'is-active' : '' }}">
        @foreach ($schedule->slots as $slot)
            <tr>
                {{--- {{ $slot->ends_at->format('g:i A') }}--}}
                <td class="Schedule-time">{{ $slot->starts_at->format('g:i A') }}</td>
                <td class="Schedule-label">{{ $slot->name }}</td>
            </tr>
        @endforeach
    </table>

@endforeach