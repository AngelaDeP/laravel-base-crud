<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['thumb', 'title', 'series', 'type', 'price', 'description', 'sale_date'];
}
