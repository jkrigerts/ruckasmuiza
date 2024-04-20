<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Gallery::where("published", true)->get();

        return view("gallery", compact('albums'));
    }


    public function show(string $id)
    {
        $album = Gallery::where("published", true)->find($id);
        return view("album", compact('album'));
    }
}
