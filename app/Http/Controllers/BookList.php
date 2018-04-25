<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookList extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
}
