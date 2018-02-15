<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //allow these fields to be mass-aligned
    //https://laracasts.com/discuss/channels/general-discussion/model-mass-assignment
    protected $fillable = [
        'name',
        'cover_image',
        'description'
    ];
}

