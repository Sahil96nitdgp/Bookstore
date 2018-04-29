<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addToCart($book_id)
    {
        $user_id = auth()->user()->id;
        
        DB::insert('insert into cart (id, book_id) values (?, ?)', [$user_id, $book_id]);
        
        return redirect('/books')->with('success', 'Item Added To The Cart');
        
    }

    public function showCart()
    {
        echo "Diplay all Cart items";
    }
}
