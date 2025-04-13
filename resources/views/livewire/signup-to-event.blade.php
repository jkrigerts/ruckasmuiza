<div class="signup-to-event">

    <p style="margin-bottom: 10px">Pēc reģistrācijas uz Jūsu norādīto e-pasta adresi tiks nosūtīts rēķins apmaksai.
        </p>
    <p>Pieejamais vietu skaits: <strong style="color: hsl(330deg, 100%, 31%); font-size: 1.2rem">{{ $availableRegistrations }}</strong></p>


    {{-- @if ($availableRegistrations > 0) --}}
        <form wire:submit="save">

            <div class="signup-form-input-layout">
                <div>
                    <label for="name">Vārds:
                        <input type="text" wire:model="name" id="name" required style="width: 234px">
                    </label>

                    <label for="surname">Uzvārds:
                        <input type="text" wire:model="surname" id="surname" required style="width: 220px">
                    </label>

                    <label for="email">e-pasts:
                        <input type="text" wire:model="email" id="email" required style="width: 225px">
                    </label>

                    <label for="phone_number">Telefona numurs:
                        <input type="text" wire:model="phone_number" id="phone_number" style="width: 160px">
                    </label>

                    <label for="count">Cilvēku skaits:
                        <input type="number" wire:model="count" id="count" min="1" max="{{ $this->availableRegistrations }}" required>
                        
                    </label>
                </div>

                <div>
                    <label for="notes" class="signup-form-notes">
                        <span>Piezīmes:</span>
                        <textarea  wire:model="notes" id="notes" placeholder="Piezīmes..."></textarea>
                    </label>
                    @if ($errors->any())
                    <ul class="signup-form-errors">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
        </div>
            <button type="submit" class="button-link" >Pieteikties</button>
        </form>
    {{-- @endif --}}

    <p style="margin-top:2rem; margin-bottom:0">Ja rodušies kādi jautājumi, rakstiet <a href="mailto:madara@ruckasmuiza.lv" class="svelte-1tmxm1l">madara@ruckasmuiza.lv</a>
    vai zvaniet  
    <a href="tel:+37122485145" class="svelte-1tmxm1l">+371 22485145</a></p>

    @if (session()->has('status'))
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 4000)" 
            x-show="show"
            class="flash_message"
        >
            {{ session('status') }}
        </div>
    @endif
</div>