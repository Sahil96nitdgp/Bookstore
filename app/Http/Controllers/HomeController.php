<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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

    public function addToCart($book_id)
    {
        $user_id = auth()->user()->id;
        
        DB::insert('insert into cart (id, book_id) values (?, ?)', [$user_id, $book_id]);
        
        return redirect('/books')->with('success', 'Item Added To The Cart');
        
    }

    public function showCart()
    {
        $user_id = auth()->user()->id;
        $results = DB::table('cart')
            ->join('users', 'users.id', '=', 'cart.id')
            ->join('books', 'books.book_id', '=', 'cart.book_id')
            ->select('books.*')
            ->where('cart.id', '=', $user_id)
            ->get();
        
        /*SELECT * FROM `cart`
        JOIN users ON users.id = cart.id
        JOIN books ON books.book_id = cart.book_id
        WHERE cart.id = 1*/

        return view('pages.showcart')->with('results', $results);
    }


    public function addToWishlist($book_id)
    {
        $user_id = auth()->user()->id;
        
        DB::insert('insert into wishlist (id, book_id) values (?, ?)', [$user_id, $book_id]);
        
        return redirect('/books')->with('success', 'Item Added To The Wishlist');
        
    }


    public function showWishlist()
    {
        $user_id = auth()->user()->id;
        $results = DB::table('wishlist')
            ->join('users', 'users.id', '=', 'wishlist.id')
            ->join('books', 'books.book_id', '=', 'wishlist.book_id')
            ->select('books.*')
            ->where('wishlist.id', '=', $user_id)
            ->get();
        
        /*SELECT * FROM `cart`
        JOIN users ON users.id = cart.id
        JOIN books ON books.book_id = cart.book_id
        WHERE cart.id = 1*/

        return view('pages.showwishlist')->with('results', $results);
    }
}
