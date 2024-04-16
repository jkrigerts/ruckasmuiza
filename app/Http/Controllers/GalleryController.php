<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Gallery::all();

        return view("gallery", compact('albums'));
    }


    public function show(string $id)
    {
        $album = Gallery::find($id);
        return view("album", compact('album'));
    }
}
