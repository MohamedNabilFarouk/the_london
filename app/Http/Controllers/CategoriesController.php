<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {

        $categories = Category ::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',
            
        ]);


    $data = $request->all();
      
       if($category=Category ::create($data)){
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('category.index');
    }


    public function edit($id)
    {
        $category = Category ::find($id);

        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

        ]);

        $category = Category ::find($id);
        $data = $request->all();
       

        
        if( $category->update($data))   {
// dd($product);
                //  dd($data) ;
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('category.index');
    }

    public function destroy($id)
    {
        $category = Category ::find($id);

       
        $category-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('category.index');
    }



}
