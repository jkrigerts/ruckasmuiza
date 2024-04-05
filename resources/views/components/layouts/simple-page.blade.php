@props([
    'bg_src',
    'bg_alt'
])

<x-layouts.app>
  <x-background-image src="{{ asset($bg_src) }}" alt="{{$bg_alt}}" />
  <main class="simple-page">
    <div class="head">
      <x-section-heading>{{ $title }}</x-section-heading>
    </div>

    <section>
      {{ $slot }}
    </section>
  </main>
</x-layouts.app>