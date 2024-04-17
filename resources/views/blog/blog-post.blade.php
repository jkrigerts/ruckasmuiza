<x-layouts.app metaName="manor_speaks">
    <div class="__news">
    <div class="__news-screen-image">
      <div class="gradient-reading"></div>
      <img src="{{ asset('images/landing/landing3.webp') }}" alt="">  
    </div>
    <div class="page-margins blog-post">
        <div class="border">
            <img src="{{ Storage::url($blogPost->image) }}" alt="">
        </div>
        <h1 class="page-title">{{$blogPost->title}}</h1>
        <div class="metadata">
            <p>{{ $blogPost->section_id == 1 ? 'Renārs Sproģis runā' : ($blogPost->section_id == 2 ? 'Jāņa Gabrāna piezīmes' : 'Aktualitātes') }}</p>
            <p class="date">{{ $blogPost->created_at }}</p>
        </div>
        <section class="blog-post-content">
            {!! $blogPost->content !!}  
        </section>
    </div>
</div>
</x-layouts.app>
