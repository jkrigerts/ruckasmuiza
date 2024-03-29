

<div
    class="event"
    @isset($event['type']['color'])
        style="background-color: {{ $event['type']['color'] }}; gap: {{ 0.25 / $eventCount }}rem;"
    @endisset
    x-data="{ open: 0 }"
    @click="open = 1"
>
   
    <div class="modal" 
        x-show="open"
        x-transition:enter="modal-enter"
        x-transition:leave="modal-leave"

    >
        <div class="modal-content" @click.away="open = 0">
            <div @click.stop="open = 0" class="close-btn" style="background-color: {{ $event['type']['color'] }};">
                <x-icons.x />
            </div>

            <div>
                <p>{{ $event['type']['name'] }}</p>
            </div>

            <p class="modal-title" style="color: {{ $event['type']['color'] }};">{{$event['title']}}</p>
            
            <div>
                <p>{{ \Carbon\Carbon::parse($event['happens_at'])->day }}. {{ $monthName }}</p>
                <p>{{ $event['time'] }}</p>
            </div>

            <p>{{ $event['infoLong'] }}</p>
            <p>Dalības maksa: <strong>{{ $event['price'] }}</strong></p>

            <div class="modal-contacts">
                <p>Iepriekšēja pieteikšanās:</p>
                <div class="contacts">
                    <a style="background-color: {{ $event['type']['color'] }};" href="tel:+37128237566"><x-icons.phone /> Zvanīt</a>
                    <a style="background-color: {{ $event['type']['color'] }};" href="mailto:ruckasm@gmail.com"><x-icons.mail /> Rakstīt</a>
                </div>
            </div>
        </div>

    </div>
    
    <div>
        <p class="sm">{{ $event['type']['name'] }}</p>
        <p class="sm">{{ $event['time'] }}</p>
    </div>
    <p class="md">{{ $event['title'] }}</p>
    <p class="sm">{{ $event['info'] }}</p>
    
</div>


