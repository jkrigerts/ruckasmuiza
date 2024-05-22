<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {   
        return view('blog/' . ($request->is("*sprogis*") ? 'sprogis' : 'gabrans'));
    }
    
    public function show(Request $request, string $id)
    {   
        $section_id = $request->is("*sprogis*") ? 1 : 2;
        $blogPost = Blog::where('id', $id)
                        ->where('section_id', $section_id)
                        ->where("published", true)
                        ->firstOrFail();
        return view('blog/blog-post', ['blogPost' => $blogPost]);
    }
}
