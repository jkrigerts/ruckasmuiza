<form wire:submit="save">

    <p>Pieejamais vietu skaits: {{ $availableRegistrations }}</p>

    <label for="name">Vārds:</label>
    <input type="text" wire:model="name" id="name" required>


    <label for="surname">Uzvārds:</label>
    <input type="text" wire:model="surname" id="surname" required>


    <label for="email">e-pasts:</label>
    <input type="text" wire:model="email" id="email" required>


    <label for="phone_number">Telefona numurs:</label>
    <input type="text" wire:model="phone_number" id="phone_number">


    <label for="count">Biļešu skaits:</label>
    <input type="number" wire:model="count" id="count" min="1" max="{{ $this->availableRegistrations }}" required>


    <label for="notes">Piezīmes:</label>
    <textarea  wire:model="notes" id="notes"></textarea>

    @if ($errors->any())
    <ul class="text-red-600 text-sm mb-4">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

 
    <button type="submit">Save</button>
</form>