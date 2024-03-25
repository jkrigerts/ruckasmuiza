<div class="day" >
    <p class="number">{{ $data['day'] }}</p>
    @foreach ($data['events'] as $event)
        <x-events.event eventCount="{{ $data['eventCount'] }}" :event="$event"/>
    @endforeach
</div>
