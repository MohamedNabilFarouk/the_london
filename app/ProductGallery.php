<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    //
    public function getImageAttribute($value)
    {
        return asset('site/img/products/' . $value);
    } // end of get image attribute
}
