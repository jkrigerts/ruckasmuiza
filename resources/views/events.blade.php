<x-layouts.app>
    {{-- @livewire('events') --}}
    <livewire:events>
        @isset($meta)
            <x-slot:meta>
            {{$meta}}
            </x-slot:meta>
        @endisset
    </livewire:events>
</x-layouts.app>
