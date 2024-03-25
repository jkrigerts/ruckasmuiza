<div
    class="event"
    @isset($event['type']['color'])
        style="background-color: {{ $event['type']['color'] }}; gap: {{ 0.25 / $eventCount }}rem;"
    @endisset
>   
    
    <div>
        <p class="sm">{{ $event['type']['name'] }}</p>
        <p class="sm">{{ $event['time'] }}</p>
    </div>
    <p class="md">{{ $event['title'] }}</p>
    <p class="sm">{{ $event['info'] }}</p>
    
    
</div>