<?php

namespace App\Livewire\Events;

use Livewire\Component;

class Event extends Component
{
    public $event;
    public $eventCount;
    
    public function render()
    {
        return view('livewire.events.event');
    }
}
