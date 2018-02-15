<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //allow these fields to be mass-aligned
    //https://laracasts.com/discuss/channels/general-discussion/model-mass-assignment
    protected $fillable = [
        'title',
        'photo',
        'album_id',
        'size',
        'description'
    ];
}
