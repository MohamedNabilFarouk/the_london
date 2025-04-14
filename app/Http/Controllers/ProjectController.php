<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Traits\imagesTrait;
use App\ProjectGallery;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Str;
use Illuminate\Support\Facades\File;
class ProjectController extends Controller
{
    use imagesTrait;

    public function index()
    {
        $projects = Project ::paginate(10);
        return view('admin.project.index', compact('projects'));
    }




    public function create()
    {
       
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'des' => 'string',
            'des_ar' => 'string',
            'image' => 'required',

        ]);
        $data = $request->except(['gallery']);
        if ($request -> has('image')) {
            $image = $this -> saveImages($request -> image, 'site/img/projects');
            $data['image'] = $image;
        }
       

        DB::beginTransaction();
        if($project=Project ::create($data))   {
         // start save room Gallery
         if ($request -> has('gallery')) {

            foreach($request->gallery as $i){

                $image = $this -> saveImages($i, 'site/img/projects');
                $gallery = new ProjectGallery();
                $gallery->project_id = $project->id;
                $gallery->image = $image;
                $gallery->save();
            }
        // end of saving room gallery

        }

       DB::commit();

       session() -> flash('success', trans('added successfully'));
    }else{
       DB::rollback();

       session() -> flash('success', trans('Error'));
    }

        return redirect() -> route('project.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $project = Project ::find($id);
      

        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',

            'des' => 'string',
            'des_ar' => 'string',

        ]);

        $project = Project ::find($id);
        $data = $request->except(['gallery']);
        // dd(asset($project -> image));
       

        if ($request -> has('image')) {
            $imagePath = public_path('site/img/projects/'.basename($project->image));
              if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }

           
            $image = $this -> saveImages($request -> image, 'site/img/projects');
            $data['image'] = $image;
            // $project->image = $data['image'];
        }
       

        DB::beginTransaction();
        if( $project->update($data))   {
// dd($project);
                //  dd($data) ;


               // start save room Gallery
               if ($request -> has('gallery')) {
                   $project->gallery()->delete();
                   foreach($request->gallery as $i){

                       $image = $this -> saveImages($i, 'site/img/projects');
                       $gallery = new ProjectGallery();
                       $gallery->project_id = $project->id;
                       $gallery->image = $image;
                       $gallery->save();
                   }
               }
               // end of saving room gallery

          DB::commit();
        //   dd('here');
          session() -> flash('success', trans('Updated successfully'));
       }else{
        // dd('ss');
          DB::rollback();
          session() -> flash('success', trans('Error'));
       }

        
        return redirect() -> route('project.index');
    }

    public function destroy($id)
    {
        $project = Project ::find($id);

        DB::beginTransaction();

        $project->gallery()->delete();
        $project-> delete();

        DB::commit();

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('project.index');
    }

    public function search(Request $request){
        $projects = Project::where('name','like',  '%'.$request->name.'%')->get();
         $projects->is_filter = 1;

        //  dd($projects);
        return view('admin.project.index', compact('projects'));
    }

public function allprojects(){

    $projects = Project ::paginate(8);
    return view('admin.allprojects',compact('projects'));
}


}