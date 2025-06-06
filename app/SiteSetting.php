<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $guarded =[];

    public $timestamps = true;

    public function getLogoAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get name attribute

    public function getFaviconAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get name attribute
    public function getBannerAttribute($value)
    {
        return asset('images/site/' . $value);
    } // end of get name attribute
    public function getBannerVidAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get name attribute
    public function getAboutImageAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get name attribute
  
    public function getAskedQuestionsImageAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get asked question image attribute
    public function getChooseUsImageAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get choose us attribute
    public function getwhatClientsSaysImageAttribute($value)
    {
        return asset('site/img/' . $value);
    } // end of get what_clients_says_image attribute

}
