<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where("visible", true)->paginate(2);

        return view("shop.books.index", compact('books'));
    }


    public function show(string $id)
    {
        $book = Book::where("visible", true)->find($id);
        return view("shop.books.show", compact('book'));
    }
}
