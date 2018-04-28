<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';
    public $primaryKey = 'book_id';
    public $timestamps = true;
}
