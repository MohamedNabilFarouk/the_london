<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SiteSetting;
use App\SocialSetting;
use App\Traits\imagesTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    use imagesTrait;

    public function generalShow()
    {
        $site_settings =  SiteSetting::first();

        return view('admin.settings.site.index', compact('site_settings'));

    } // end of index

    public function generalUpdate(Request $request)
    {
        //  return $request -> all();
        $site_settings = SiteSetting::findorFail(1);

        $request_data = $request->except(['_token', '_method', 'logo', 'favicon','about_image','asked_questions_image','choose_us_image','what_clients_says_image']);

        foreach ($request_data as $index => $item) {
            if($request_data[$index] == null){
                $request_data[$index] = $site_settings[$index];
            }
        }

        if($request->has('logo')){
            if ($site_settings -> logo != 'default.png') {
                Storage::disk('public_uploads')->delete('site/img' . $site_settings -> logo);
            } // end of inner if
            $logoPath = $this->saveImages( $request -> logo , 'site/img');
            $request_data['logo']= $logoPath;
        }
        if($request->has('banner_vid')){

            $Path = public_path('site/img/'.basename($site_settings->banner_vid));
            if (File::exists($Path)) {
                  File::delete($Path);
              }

            $vidPath = $this->saveImages( $request -> banner_vid , 'site/img');
            $request_data['banner_vid']= $vidPath;
        }
        if($request->has('about_image')){
            if ($site_settings -> about_image != 'default.png') {
                Storage::disk('public_uploads')->delete('site/img' . $site_settings -> about_image);
            } // end of inner if
            $aboutimg1Path = $this->saveImages( $request -> about_image, 'site/img');
            $request_data['about_image']= $aboutimg1Path;
        }
    

        if($request->has('favicon')){
            if ($site_settings -> favicon != 'favicon.png') {
                Storage::disk('public_uploads')->delete('site/img' . $site_settings -> favicon);
            } // end of inner if
            $faviconPath = $this->saveImages( $request -> favicon , 'site/img');
            $request_data['favicon'] = $faviconPath;
        }
        if($request->has('choose_us_image')){
          
            $chooseUsImagePath = $this->saveImages( $request -> choose_us_image , 'site/img/');
            $request_data['choose_us_image'] = $chooseUsImagePath;
        }
        if($request->has('asked_questions_image')){
          
            $askedImagePath = $this->saveImages( $request -> asked_questions_image , 'site/img/');
            $request_data['asked_questions_image'] = $askedImagePath;
        }
        if($request->has('what_clients_says_image')){
          
            $ImagePath = $this->saveImages( $request -> what_clients_says_image , 'site/img/');
            $request_data['what_clients_says_image'] = $ImagePath;
        }

        $site_settings->update($request_data);

        session()->flash('success', trans('Updated Successfully'));
        return redirect()->back();

    } // end of index

    public function socialShow()
    {
        $social_settings =  SocialSetting::all();

        return view('admin.settings.social.index', compact('social_settings'));

    } // end of index

    public function socialUpdate(Request $request)
    {
        $social_settings = SocialSetting::all();

        $request_data = $request -> except('_token', '_method');

        foreach ($social_settings as $social){

            $values = [];
            $setting_key = $social_settings -> where('key', $social -> key)-> first() -> key;

            $values += [
                'key' => $setting_key,
                'value' => $request_data[$setting_key],
            ];

            $social -> update($values);

        }  // end of foreach

        session()->flash('success', trans('Updated Successfully'));
        return redirect()->route('settings.social.show');

    } // end of index

}
