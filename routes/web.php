<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BooksController@index');

Route::get('/about', function () {
    return view('pages.about');
});

Auth::routes();

Route::get('/home/wishlist/{book_id}', 'HomeController@addToWishlist');
Route::get('/home/wishlist', 'HomeController@showWishlist');
Route::get('/home/removewishlist/{book_id}', 'HomeController@removeWishlist');
Route::get('/home/removecart/{book_id}', 'HomeController@removeCart');
Route::get('/home/cart/{book_id}', 'HomeController@addToCart');
Route::get('/home/cart', 'HomeController@showCart');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/books/newToOld', 'BooksController@newToOld');
Route::get('/books/oldToNew', 'BooksController@oldToNew');
Route::get('/books/priceLowToHigh', 'BooksController@priceLowToHigh');
Route::get('/books/priceHighToLow', 'BooksController@priceHighToLow');
Route::get('/books/mostRated', 'BooksController@mostRated');
Route::resource('books', 'BooksController');




Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/logout', 'AdminController@logout');
Route::resource('admin', 'AdminController');


