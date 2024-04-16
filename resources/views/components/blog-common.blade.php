<x-layouts.app :metaName=$metaName>
  <div class="__news">
    <div class="__news-screen-image">
      <div class="gradient"></div>
      <img src="{{ asset('images/landing/landing3.webp') }}" alt="">  
    </div>
    <div class="page-margins">
      <div class="head">
        <h1 class="page-title">{{$title}}</h1>
        </div>
      <section class="blog-section">
        @foreach ($blogPosts as $post)
        <a class="blog-card" href="{{ route('blog.id', $post->id) }}" wire:navigate>
          <img src="{{ Storage::url($post->image) }}" alt="">
          <p class="date">{{ $post->created_at }}</p>
          <div class="content">
            <h2>{{ strip_tags(Str::limit($post->title, 28, '...')) }}</h2>
            <p>{{ strip_tags(Str::limit($post->content, 100, '...')) }}</p>
          </div>
        </a>
        @endforeach
      </section>
    </div>
</div>
</x-layouts.app>