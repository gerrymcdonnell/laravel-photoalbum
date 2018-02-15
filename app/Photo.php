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

    //upload folder
    public $dir="/storage/photos/";

    //relationship def: photo belongs to an album
    public function album(){
        return $this->belongsTo('App\Album');
    }


    //get then columnname
    public function getPathAttribute($album_id){
        return $this->dir.$album_id."/{$this->photo}";
    }
}






