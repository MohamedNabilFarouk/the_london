<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
    //
   protected $table='team';
   protected $guarded=[];
   protected $appends = array('title','des');
    // public function getImageAttribute($value)
    // {
    //     return asset('site/img/services/' . $value);
    // } // end of get image attribute

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
       
    }


    

    
   
    public function getTitleAttribute()
    {
        return $this->{'title_'.app()->getLocale()};
    }
    public function getDesAttribute()
    {
        return $this->{'des_'.app()->getLocale()};
    }

}
