

<div
    class="event"
    style="--event-color: {{ $event['type']['color'] }};"
    x-data="modal({{$event}})"
>

    <a @isset($event['type']['color'])
                style="gap: {{ 0.25 / $eventCount }}rem;"
            @endisset
            class="event-btn"
            href="{{ route('event', ['id' => $event->id]) }}"
            wire:navigate
    >
        <div>
            <p class="sm">{{ $event['type']['name'] }}</p>
            <p class="sm">{{ $event['time'] }}</p>
        </div>
        <p class="md">{{ $event['title'] }}</p>
        <p class="sm">{{ $event['info'] }}</p>
    </a>

</div>




