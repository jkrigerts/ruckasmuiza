<div
    class="event"
    @isset($event['type']['color'])
        style="background-color: {{ $event['type']['color'] }}; gap: {{ 0.25 / $eventCount }}rem;"
    @endisset
    x-data="{ open: 0 }"
    @click="open = 1"
>
   
    <div class="modal" x-show="open">
        <div class="modal-content" >
            <div @click.stop="open = 0" class="close-btn" style="background-color: {{ $event['type']['color'] }};">
                <x-icons.x />
            </div>

            <p>{{ $event['type']['name'] }}</p>
            <p class="modal-title" style="color: {{ $event['type']['color'] }};">{{$event['title']}}</p>
        </div>

    </div>
    
    <div>
        <p class="sm">{{ $event['type']['name'] }}</p>
        <p class="sm">{{ $event['time'] }}</p>
    </div>
    <p class="md">{{ $event['title'] }}</p>
    <p class="sm">{{ $event['info'] }}</p>
    
</div>


