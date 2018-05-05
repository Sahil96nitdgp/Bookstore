<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('pages.index')->with('books', $books);
    }

    public function newToOld()
    {
        //
        $books = Book::orderBy('created_at', 'desc')->get();
        return view('pages.filterBooks')->with('books', $books);
        
    }

    public function oldToNew()
    {
        //
        $books = Book::orderBy('created_at', 'asc')->get();
        return view('pages.filterBooks')->with('books', $books);
        
    }

    public function priceLowToHigh()
    {
        //
        $books = Book::orderBy('price', 'asc')->get();
        return view('pages.filterBooks')->with('books', $books);
        
    }

    public function priceHighToLow()
    {
        //
        $books = Book::orderBy('price', 'desc')->get();
        return view('pages.filterBooks')->with('books', $books);
        
    }

    public function mostRated()
    {
        //
        $books = Book::orderBy('rating', 'desc')->get();
        return view('pages.filterBooks')->with('books', $books);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $book = Book::find($id);
        return view('pages.book')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
