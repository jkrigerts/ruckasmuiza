<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;

class Blogs extends Component
{
    use WithPagination;

    public $title;
    public $query = '';
    public $category_id = "";
    public $section_id;
    public $filter = "true";
 
    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $blogQuery = Blog::where("published", true)
                         ->where("section_id", $this->section_id);
        if ($this->category_id != "")
            $blogQuery->where("blog_category_id", $this->category_id);
        return view('livewire.blogs', [
            'blogPosts' => $blogQuery->paginate(100),
            'categories' => BlogCategory::get()
        ]);
    }
}
