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

    //relationship album can have many photos
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}

