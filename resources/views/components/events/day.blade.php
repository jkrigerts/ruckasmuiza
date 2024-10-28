<div class="day" >
    <p class="number {{ !$data['thisMonth'] ? "dim" : "" }}">{{ $data['day'] }}</p>
    @foreach ($data['events'] as $event)
        {{-- <x-events.event eventCount="{{ $data['eventCount'] }}" :event="$event"/> --}}
        @livewire('events.event', ['event' => $event, 'eventCount' => $data['eventCount'], 'monthName' => $data['monthName'], 'eventURL' => $eventurl], key($loop->index))
        
    @endforeach
</div>
