<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'cart';
    public $primaryKey = 'cart_id';
    //public $timestamps = true;
}