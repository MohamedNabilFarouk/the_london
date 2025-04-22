<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;

use Auth;
use App\Traits\imagesTrait;
use App\User;

class VideoController extends Controller
{
    use imagesTrait;

    public function index()
    {

        $data = Video ::paginate(10);
        return view('admin.video.index', compact('data'));
    }




    public function create()
    {

        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:200',
            'title_ar' => 'required|string|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
            // 'video' => 'required|mimes:mp4,mov,avi,wmv|max:10240', //
            'video' => 'required', //
            

        ]);


$data = $request->all();
        if ($request -> has('image')) {
           
            $image = $this -> saveImages($request -> image, 'site/img/videos');
            $data['image'] = $image;
            // $product->image = $data['image'];
        }
       
      
       if(Video ::create($data)){
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('video.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Video ::find($id);

        return view('admin.video.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
          'title_en' => 'required|string|max:200',
            'title_ar' => 'required|string|max:200',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
            // 'video' => 'required|mimes:mp4,mov,avi,wmv|max:10240', //
            'video' => 'required', //
        ]);

        $video = Video ::find($id);
        $data = $request->all();
        
       

        if ($request -> has('image')) {
           
            $image = $this -> saveImages($request -> image, 'site/img/videos');
            $data['image'] = $image;
            // $product->image = $data['image'];
        }
       

        
        if( $video->update($data))   {
// dd($product);
                //  dd($data) ;
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('video.index');
    }

    public function destroy($id)
    {
        $data = Video ::find($id);

       
        $data-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('video.index');
    }

  
}
