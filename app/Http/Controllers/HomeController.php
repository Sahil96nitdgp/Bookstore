<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;

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

    public function cart($book_id)
    {
        $user_id = auth()->user()->id;
        //
        $cart = new Cart;
        $cart->id = $user_id;
        $cart->book_id = $book_id;
        $cart->save();
        echo $book_id." in cart with user ".$user_id." Added to cart";
        
    }
}
