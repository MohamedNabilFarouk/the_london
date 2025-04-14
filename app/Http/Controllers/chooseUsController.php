<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Choose_us;

use Auth;
use App\Traits\imagesTrait;
use App\User;

class chooseUsController extends Controller
{
    use imagesTrait;

    public function index()
    {

        $rows = Choose_us ::paginate(10);
        return view('admin.chooseUs.index', compact('rows'));
    }




    public function create()
    {

        return view('admin.chooseUs.create');
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'des_en' => 'string',
            'des_ar' => 'string|nullable',
           
            

        ]);


$data = $request->all();
        // if ($request -> has('image')) {
           
        //     $image = $this -> saveImages($request -> image, 'site/img/services');
        //     $data['image'] = $image;
        //     // $product->image = $data['image'];
        // }
       
      
       if($row=Choose_us ::create($data)){
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('chooseUs.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $row = Choose_us ::find($id);

        return view('admin.chooseUs.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'des_en' => 'string|nullable',
            'des_ar' => 'string|nullable',

        ]);

        $row = Choose_us ::find($id);
        $data = $request->all();
        
       

        // if ($request -> has('image')) {
           
        //     $image = $this -> saveImages($request -> image, 'site/img/services');
        //     $data['image'] = $image;
        //     // $product->image = $data['image'];
        // }
       

        
        if( $row->update($data))   {
// dd($product);
                //  dd($data) ;
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('chooseUs.index');
    }

    public function destroy($id)
    {
        $row = Choose_us ::find($id);

       
        $row-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('chooseUs.index');
    }

  
}
