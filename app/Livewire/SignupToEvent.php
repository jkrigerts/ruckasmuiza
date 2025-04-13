<?php

namespace App\Livewire;

use App\Models\Events;
use App\Models\EventSignup;
use Livewire\Component;
use Livewire\Attributes\Validate;

class SignupToEvent extends Component
{
    public Events $event;

    public $name = "";
    public $surname = "";
    public $email = "";
    public $phone_number = "";
    public $count = 1;
    public $notes = "";
    public $availableRegistrations;

    public function mount(Events $event)
    {
        $this->event = $event;

        $this->availableRegistrations = $event->registrations_count - $event->eventSignups->count();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
            'email' => 'required|email',
            'phone_number' => 'nullable|string|min:6',
            'count' => ['required', 'integer', 'min:1', 'max:' . $this->availableRegistrations],
            'notes' => 'nullable|string|max:500',
        ]);

        EventSignup::create(array_merge(
            ['events_id' => $this->event->id, "status" => "new"],
            $this->only(['name', 'surname', 'email', 'phone_number', 'count', 'notes'])
        )
        );
 
        session()->flash('status', 'Reģistrācija veiksmīga!');
 
        return $this->redirect("/pasakumi/" . $this->event->id);
    }

    public function render()
    {
        return view('livewire.signup-to-event');
    }
}
