

<div
    class="event"
    style="--event-color: {{ $event['type']['color'] }};"
    x-data="{ open: 0 }"
    
>

    <button @isset($event['type']['color'])
                style="gap: {{ 0.25 / $eventCount }}rem;"
            @endisset
            class="event-btn"
            @click="open = 1"
    >
        <div>
            <p class="sm">{{ $event['type']['name'] }}</p>
            <p class="sm">{{ $event['time'] }}</p>
        </div>
        <p class="md">{{ $event['title'] }}</p>
        <p class="sm">{{ $event['info'] }}</p>
    </button>
   
    <div class="modal" 
        x-show="open"
        x-transition:enter="modal-enter"
        x-transition:leave="modal-leave"

    >
        <div class="modal-content" @click.away="open = 0">
            <div @click.stop="open = 0" class="close-btn">
                <x-icons.x />
            </div>

            <div>
                <p>{{ $event['type']['name'] }}</p>
            </div>

            <p class="modal-title">{{$event['title']}}</p>
            
            <div>
                <p>{{ \Carbon\Carbon::parse($event['happens_at'])->day }}. {{ $monthName }}</p>
                <p>{{ $event['timeLong'] != "" ? $event['timeLong'] : $event['time'] }}</p>
            </div>

            <p>{{ $event['infoLong'] != "" ? $event['infoLong'] : $event['info'] }}</p>
            <p>Dalības maksa: <strong>{{ $event['price'] }}</strong></p>

            <div class="modal-contacts">
                @if ($event->reservation_needed)   
                    <p>Iepriekšēja pieteikšanās</p>
                @endif
                <div class="contacts">
                    <a href="tel:+37128237566"><x-icons.phone /> Zvanīt</a>
                    <a href="mailto:kultura@ruckasmuiza.lv"><x-icons.mail /> Rakstīt</a>
                </div>
            </div>
        </div>

    </div>
    
</div>


