@props([
    'href',
    'text'
])

<a href="{{ $href }}" wire:navigate class="button-link">{{ $text }}</a>