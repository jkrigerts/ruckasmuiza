@props([
    'title',
    'section_id',
    'metaName',
    'filter'
])

<x-layouts.app :metaName=$metaName>
  <div class="__news">
    <div class="__news-screen-image">
      <div class="gradient"></div>
      <img src="{{ asset('images/landing/landing3.webp') }}" alt="">  
    </div>
    <livewire:blogs :title="$title" :section_id="$section_id" :filter="$filter"/>
</div>
</x-layouts.app>