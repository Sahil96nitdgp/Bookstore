<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookList extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('pages.index')->with('books', $books);
    }
}
