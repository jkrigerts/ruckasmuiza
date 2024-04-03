<div class="day" >
    <p class="number"
        @isset($data['events'][0]['type']['color'])
            style="background-color:  {{$data['events'][0]['type']['color']}}"
        @endisset>{{ $data['day'] }}</p>
    @foreach ($data['events'] as $event)
        {{-- <x-events.event eventCount="{{ $data['eventCount'] }}" :event="$event"/> --}}
        @livewire('events.event', ['event' => $event, 'eventCount' => $data['eventCount'], 'monthName' => $data['monthName']], key($loop->index))
        
    @endforeach
</div>
