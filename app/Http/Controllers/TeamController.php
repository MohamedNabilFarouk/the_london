<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;

use Auth;
use App\Traits\imagesTrait;
use App\User;

class TeamController extends Controller
{
    use imagesTrait;

    public function index()
    {

        $team = Team ::paginate(10);
        return view('admin.team.index', compact('team'));
    }




    public function create()
    {

        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title_en' => 'required|string|max:200',
            'title_ar' => 'required|string|max:200',
            'des_en' => 'string',
            'des_ar' => 'string|nullable',
            // 'image' => 'required',
            

        ]);


$data = $request->all();
        // if ($request -> has('image')) {
           
        //     $image = $this -> saveImages($request -> image, 'site/img/services');
        //     $data['image'] = $image;
        //     // $product->image = $data['image'];
        // }
       
      
       if($team=Team ::create($data)){
       
       
       session() -> flash('success', trans('added successfully'));
    }else{
      

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('team.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team = Team ::find($id);

        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'name' => 'required|string|max:100',
            'title_en' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',
            'des_en' => 'string|nullable',
            'des_ar' => 'string|nullable',

        ]);

        $team = Team ::find($id);
        $data = $request->all();
        
       

        // if ($request -> has('image')) {
           
        //     $image = $this -> saveImages($request -> image, 'site/img/services');
        //     $data['image'] = $image;
        //     // $product->image = $data['image'];
        // }
       

        
        if( $team->update($data))   {
// dd($product);
                //  dd($data) ;
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('team.index');
    }

    public function destroy($id)
    {
        $team = Team ::find($id);

       
        $team-> delete();

     

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('team.index');
    }

  
}
