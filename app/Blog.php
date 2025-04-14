<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    //
   protected $guarded=[];
   protected $appends = array('title','des','summary');
    public function getImageAttribute($value)
    {
        return asset('site/img/blogs/' . $value);
    } // end of get image attribute


    public function setTitleEnAttribute($value)
    {
        $this->attributes['title_en'] = $value;
        $this->attributes['slug'] = Str::slug($value,'-');
        if (static::whereSlug($slug = Str::slug($value))->exists()) {
    
            $slug = $this->incrementSlug($slug);
            $this->attributes['slug'] = $slug;
        }
    }
    
    public function incrementSlug($slug) {
    
        $original = $slug;
    
        $count = 2;
    
        while (static::whereSlug($slug)->exists()) {
    
            $slug = "{$original}-" . $count++;
        }
    
        return $slug;
    
    }
    public function getTitleAttribute()
    {
        return $this->{'title_'.app()->getLocale()};
    }
    public function getSummaryAttribute()
    {
        return $this->{'summary_'.app()->getLocale()};
    }
    public function getDesAttribute()
    {
        return $this->{'des_'.app()->getLocale()};
    }

}
