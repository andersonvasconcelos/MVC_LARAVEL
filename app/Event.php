<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $dates = ['date'];
    protected $fillable  = ['title', 'date', 'image', 'description'];
    public $timestamps = true;
}
