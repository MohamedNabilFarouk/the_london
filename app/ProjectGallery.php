<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    use HasFactory;
    public function getImageAttribute($value)
    {
        return asset('site/img/projects/' . $value);
    } // end of get image attribute
}
