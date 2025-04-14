<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title_en','title_ar'];

    protected $appends = array('title');
    public function product(){
        return $this->hasMany(Product::class);
    }

    public function getTitleAttribute()
    {
        if(app()->getLocale()== 'ar'){
        return $this->{'title_'.app()->getLocale()};
        }else{
        return $this->{'title_en'};

        }
    }
}
