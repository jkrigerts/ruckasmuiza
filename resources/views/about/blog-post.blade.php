<x-layouts.app>
    <x-slot:meta>
        <title>{{ $blogPost->title }} - Ruckas muiža</title>

        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $blogPost->title }}" />
        <meta property="og:image" content="{{asset("/images/meta_image.png")}}" />
        <meta property="og:description" content='Ieraksts Ruckas muižas mājaslapas sadaļā "{{$blogPost->section->name}}"{{ ($blogPost->blog_category_id ? ' par tēmu "' . $blogPost->blogCategory->name . '"' : '')}}' />
        
    </x-slot:meta>
    <div class="__news">
    <div class="__news-screen-image">
      <div class="gradient-reading"></div>
      <img src="{{ asset('images/landing/landing3.webp') }}" alt="">  
    </div>
    <div class="page-margins blog-post"
         @isset ($blogPost->blogCategory->color)
            style="--blog-color: {{$blogPost->blogCategory->color}}"
         @endisset
    >   
        <div class="blog-post-head">
            <div class="header">
                <div class="metadata">
                    @isset ($blogPost->blogCategory->name)
                        <p>{{ $blogPost->blogCategory->name }}</p>
                    @endisset
                    <p class="date">{{ $blogPost->created_at->isoFormat('LL') }}</p>
                </div>
                <h1 class="page-title">{{$blogPost->title}}</h1>
            </div>
            
            <img src="{{ Storage::url($blogPost->image) }}" alt={{$blogPost->title}}>
        </div>
        <section class="blog-post-content">
            {!! $blogPost->content !!}  
        </section>
    </div>
</div>
</x-layouts.app>
