<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';
    protected $fillable = ['photo'];

    public function getPhotoAttribute($photo) {
    	return $this->uploads.$photo;
    }



}
