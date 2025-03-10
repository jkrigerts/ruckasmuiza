<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {   
        return view('about/sprogis');
    }
    
    public function show(Request $request, string $id)
    {   
        $section_id = 1;
        $blogPost = Blog::where('id', $id)
                        ->where('section_id', $section_id)
                        ->where("published", true)
                        ->firstOrFail();
        return view('about/blog-post', ['blogPost' => $blogPost]);
    }
}
