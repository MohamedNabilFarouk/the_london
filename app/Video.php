<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    //
   protected $table='videos';
   protected $guarded=[];
   protected $appends = array('title');
    public function getImageAttribute($value)
    {
        return asset('site/img/videos/' . $value);
    } // end of get image attribute

    

    

    
   
    public function getTitleAttribute()
    {
        return $this->{'title_'.app()->getLocale()};
    }
   

}
