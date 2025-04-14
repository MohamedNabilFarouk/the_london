<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $appends = array('title_field','des_field');
    public function getImageAttribute($value)
    {
        return asset('site/img/projects/' . $value);
    } // end of get image attribute

    public function getTitleFieldAttribute()
    {
        if(app()->getLocale()== 'ar'){
        return $this->{'title_'.app()->getLocale()};
        }else{
        return $this->{'title'};

        }
    }


   
    public function setTitleAttribute($value)
{
    $this->attributes['title'] = $value;
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
public function getDesFieldAttribute()
{
    if(app()->getLocale()== 'ar'){
        return $this->{'des_'.app()->getLocale()};
        }else{
        return $this->{'des'};

        }
}

public function gallery(){

    return $this->hasMany(ProjectGallery::class, 'project_id');
}
}
