<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choose_us extends Model
{
    //
   protected $guarded=[];
   protected $table='why_choose_us';
   protected $appends = array('title','des');
    // public function getImageAttribute($value)
    // {
    //     return asset('images/services/' . $value);
    // } // end of get image attribute


    public function getTitleAttribute()
    {
        return $this->{'title_'.app()->getLocale()};
    }
    public function getDesAttribute()
    {
        return $this->{'des_'.app()->getLocale()};
    }

}
