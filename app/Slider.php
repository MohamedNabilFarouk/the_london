<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
   protected $appends = array('title');


    protected $guarded = [];

    public $timestamps = true;

    public function getImageAttribute($value)
    {
        return asset('site/img/sliders/' . $value);
    } // end of get image attribute

    public function getTitleAttribute()
    {
        return $this->{'title_'.app()->getLocale()};
    }
}
