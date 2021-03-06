<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        //
        $admin = new Admin;
        $email = $request->input('email');
        $password = $request->input('password');
        
        $admin_results = DB::table('admin')->where([
            ['email', '=', $email],
            ['password', '=', $password],
        ])->get();

        if($admin_results->count()==1)
        {
            $request->session()->put('session_admin_login', 'Logged in');
            return redirect('admin/dashboard')->with('success', 'Login Successful');
        }
        else{
            return redirect('admin')->with('error', 'Invalid Credentials');
        }
    }

    public function dashboard()
    {
        //
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        //
        $books = Book::all();
        $value = $request->session()->pull('session_admin_login', 'default');
        //return $value;
        return redirect('/')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //file upload handling

        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        $book = new Book;
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->rating = $request->input('rating');
        $book->genre = $request->input('genre');
        $book->cover_image = $fileNameToStore;
        $book->save();

        return redirect('/books')->with('success', 'New Book Added!!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.edit')->with('book', $book);
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
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'description' => 'required'
        ]);

        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->rating = $request->input('rating');
        $book->genre = $request->input('genre');
        $book->save();

        return redirect('/books')->with('success', 'Book Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book Removed!!');        
    }
}
