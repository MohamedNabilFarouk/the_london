<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    //
    protected $guarded=[];
    protected $appends = array('title_field','des_field','features_field','advantage_field');

    public function getImageAttribute($value)
    {
        return asset('site/img/products/' . $value);
    } // end of get image attribute
    public function getFeaturesImageAttribute($value)
    {
        return asset('site/img/products/' . $value);
    } // end of get image attribute
    public function getTechnicalDataImageAttribute($value)
    {
        return asset('site/img/products/' . $value);
    } // end of get image attribute
    public function getAdvantageImageAttribute($value)
    {
        return asset('site/img/products/' . $value);
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
    public function getFeaturesFieldAttribute()
    {
        if(app()->getLocale()== 'ar'){
            return $this->{'features_text_'.app()->getLocale()};
            }else{
            return $this->{'features_text'};
    
            }
    }
    public function getAdvantageFieldAttribute()
    {
        if(app()->getLocale()== 'ar'){
            return $this->{'features_text_'.app()->getLocale()};
            }else{
            return $this->{'features_text'};
    
            }
    }


    public function gallery(){

        return $this->hasMany(ProductGallery::class, 'product_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($product) {
    //         $product->slug = Str::slug($product->title);
    //     });
    // }
}
