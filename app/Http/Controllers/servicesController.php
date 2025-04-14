<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

use Auth;
use App\Traits\imagesTrait;
use App\User;

class servicesController extends Controller
{
    use imagesTrait;

    public function index()
    {

        $services = Service ::paginate(10);
        return view('admin.service.index', compact('services'));
    }




    public function create()
    {

        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'des_en' => 'string',
            'des_ar' => 'string|nullable',
            // 'image' => 'required',
            

        ]);


$data = $request->all();
        if ($request -> has('image')) {
           
            $image = $this -> saveImages($request -> image, 'site/img/services');
            $data['image'] = $image;
            
        }
       
      
       if($service=Service ::create($data)){
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('service.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service ::find($id);

        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'des_en' => 'string|nullable',
            'des_ar' => 'string|nullable',

        ]);

        $service = Service ::find($id);
        $data = $request->all();
        
       

        if ($request -> has('image')) {
           
            $image = $this -> saveImages($request -> image, 'site/img/services');
            $data['image'] = $image;
        }
       

        
        if( $service->update($data))   {
// dd($product);
                //  dd($data) ;
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('service.index');
    }

    public function destroy($id)
    {
        $service = Service ::find($id);

       
        $service-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('service.index');
    }

  
}
