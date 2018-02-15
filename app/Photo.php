<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

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

    //relationship def: photo belongs to an album
    public function album(){
        return $this->belongsTo('App\Album');
    }
}
