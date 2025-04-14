<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

use Auth;
use App\Traits\imagesTrait;
use App\User;

class blogsController extends Controller
{
    use imagesTrait;

    public function index()
    {

        $blogs = Blog ::paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }




    public function create()
    {

        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'summary_en' => 'string',
            'summary_ar' => 'string|nullable',
            'des_en' => 'string',
            'des_ar' => 'string|nullable',
            'image' => 'required',
            

        ]);


$data = $request->all();
        if ($request -> has('image')) {
           
            $image = $this -> saveImages($request -> image, 'site/img/blogs');
            $data['image'] = $image;
            // $product->image = $data['image'];
        }
       
      
       if($blog=Blog ::create($data)){
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('blog.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $blog = Blog ::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'summary_en' => 'string|nullable',
            'summary_ar' => 'string|nullable',
            'des_en' => 'string|nullable',
            'des_ar' => 'string|nullable',

        ]);

        $blog = Blog ::find($id);
        $data = $request->all();
        
       

        if ($request -> has('image')) {
           
            $image = $this -> saveImages($request -> image, 'site/img/blogs');
            $data['image'] = $image;
            // $product->image = $data['image'];
        }
       

        
        if( $blog->update($data))   {
// dd($product);
                //  dd($data) ;
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('blog.index');
    }

    public function destroy($id)
    {
        $blog = Blog ::find($id);

       
        $blog-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('blog.index');
    }

  
}
