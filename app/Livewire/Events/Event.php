<?php

namespace App\Livewire\Events;

use Livewire\Component;
use Livewire\Attributes\Url;

class Event extends Component
{
    public $event;
    public $eventCount;
    public $monthName;
    public $eventURL;
    
    public function render()
    {
        $this->event["open"] = $this->eventURL == $this->event["id"];
        return view('livewire.events.event');
    }
}
