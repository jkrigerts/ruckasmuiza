<div class="page-margins">
    <div class="head">
      <h1 class="page-title">{!! $title !!}</h1>
      @if ($filter == "true")
        <div class="blog-filter-search">
            <label>
                <span>Izvēlēties kategoriju:</span>
                <select wire:model.change="category_id">   
                    <option value=""></option>            
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" wire:key="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
      @endif
    </div>
    @if(count($blogPosts) == 0)
    <p class="error">Neviens ieraksts vēl nav izveidots</p>
    @endif
    <section class="blog-section">
        @foreach ($blogPosts as $post)
            <a  class="blog-card"
                wire:key="{{ $post->id }}"
                @isset ($post->blogCategory->color)
                    style="--blog-card-bg: {{$post->blogCategory->color}}"
                @endisset
                href="{{ ($post->section_id == 1 ? route("blog.sprogis") : route("blog.gabrans")) . "/" . $post->id }}"
                wire:navigate>
                <img src="{{ Storage::url($post->image) }}" alt="">
                <div class="content">
                @isset ($post->blogCategory->name)
                    <p class="category">{{ $post->blogCategory->name }}</p>
                @endisset
                <p class="date">{{ $post->created_at->isoFormat('LL') }}</p>
                <h2>{{ strip_tags(Str::limit($post->title, 28, '...')) }}</h2>
                </div>
            </a>
        @endforeach
    </section>
    {{-- <div class="paginate">{{ $blogPosts->onEachSide(1)->links() }}</div> --}}
</div>
