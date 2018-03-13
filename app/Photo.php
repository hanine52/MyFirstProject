<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'file'
    ];
    protected $loads = "/image/";

    public function getFileAttribute($image){
        return $this->loads . $image;
    }


}
