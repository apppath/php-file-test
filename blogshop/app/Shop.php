<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = array('title' , 'brand' , 'price' , 'images' , 'details');
}
