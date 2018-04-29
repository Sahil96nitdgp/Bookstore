<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'wishlist';
    public $primaryKey = 'wishlist_id';
    //public $timestamps = true;
}