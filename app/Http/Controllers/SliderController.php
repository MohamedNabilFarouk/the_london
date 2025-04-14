<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Slider;
use App\Traits\imagesTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    use imagesTrait;

    public function index()
    {
        $sliders = Slider ::take(3) -> get();
        return view('admin.sliders.index', compact('sliders'));
    } // end of index

    public function create()
    {
       
        return view('admin.sliders.create');
    }


    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:200',
            'title_ar' => 'required|string|max:200',  
            'image' => 'required',
        ]);


    $data = $request->all();

    if ($request -> has('image')) {
       
        $image = $this -> saveImages($request -> image, 'site/img/sliders');
        $data['image'] = $image;

    }
      
       if($slider=Slider ::create($data)){
        
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('slider.index');
    }


    public function edit($id)
    {
        $slider = Slider ::find($id);
        return view('admin.sliders.edit', compact('slider'));

    } // end of edit

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'image' => 'required',
        ]);

        $slider = Slider ::find($id);

        DB ::beginTransaction();

        if ($request -> has('image')) {
            if($slider -> image != 'default.png'){
                Storage ::disk('public_uploads') -> delete('sliders/' . $slider -> image);
            }

            $image = $this -> saveImages($request -> image, 'site/img/sliders');
            $data['image'] = $image;

        }
        $slider -> update($data);

        DB ::commit();

        session() -> flash('success', trans('Updated Successfully'));
        return redirect() -> route('slider.index');
    } // end of update


    public function destroy($id)
    {
        $slider = Slider ::find($id);

       
        $slider-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('slider.index');
    }

} // end of controller
