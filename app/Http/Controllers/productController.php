<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Code;
use Auth;
use App\Traits\imagesTrait;
use App\User;
use App\Category;
use App\ProductGallery;
use BeyondCode\Vouchers\Models\Voucher;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Str;
class productController extends Controller
{
    use imagesTrait;

    public function index()
    {

        $products = Product ::paginate(10);
        return view('admin.product.index', compact('products'));
    }




    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->veg);
        $data = $request -> validate([
            'title' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',
            'category_id' => 'required',

            'des' => 'string',
            'des_ar' => 'string',
            'image' => 'required',

        ]);
        $data = $request->except(['gallery']);
        if ($request -> has('image')) {
            
            $image = $this -> saveImages($request -> image, 'site/img/products');
            $data['image'] = $image;
        }
        if ($request -> has('features_image')) {
            $image = $this -> saveImages($request -> features_image, 'site/img/products');
            $data['features_image'] = $image;
        }
        if ($request -> has('technical_data_image')) {
            $image = $this -> saveImages($request -> technical_data_image, 'site/img/products');
            $data['technical_data_image'] = $image;
        }
        if ($request -> has('advantage_image')) {
            $image = $this -> saveImages($request -> advantage_image, 'site/img/products');
            $data['advantage_image'] = $image;
        }

        DB::beginTransaction();
        if($product=Product ::create($data))   {
         // start save room Gallery
         if ($request -> has('gallery')) {

            foreach($request->gallery as $i){

                $image = $this -> saveImages($i, 'site/img/products');
                $gallery = new ProductGallery();
                $gallery->product_id = $product->id;
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

        return redirect() -> route('product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product ::find($id);
        $categories = Category::all();

        return view('admin.product.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'title' => 'required|string|max:100',
            'title_ar' => 'required|string|max:100',
            'category_id' => 'required',

            'des' => 'string',
            'des_ar' => 'string',

        ]);

        $product = Product ::find($id);
        $data = $request->except(['gallery']);
        
       

       if ($request -> has('image')) {
            $image = $this -> saveImages($request -> image, 'site/img/products');
            $data['image'] = $image;
        }
        if ($request -> has('features_image')) {
            $image = $this -> saveImages($request -> features_image, 'site/img/products');
            $data['features_image'] = $image;
        }
        if ($request -> has('technical_data_image')) {
            $image = $this -> saveImages($request -> technical_data_image, 'site/img/products');
            $data['technical_data_image'] = $image;
        }
        if ($request -> has('advantage_image')) {
            $image = $this -> saveImages($request -> advantage_image, 'site/img/products');
            $data['advantage_image'] = $image;
        }
       

        DB::beginTransaction();
        if( $product->update($data))   {
// dd($product);
                //  dd($data) ;


               // start save room Gallery
               if ($request -> has('gallery')) {
                   $product->gallery()->delete();
                  
                   foreach($request->gallery as $i){
                       $image = $this -> saveImages($i, 'site/img/products');
                       $gallery = new ProductGallery();
                       $gallery->product_id = $product->id;
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

        
        return redirect() -> route('product.index');
    }

    public function destroy($id)
    {
        $product = Product ::find($id);

        DB::beginTransaction();

        $product->gallery()->delete();
        $product-> delete();

        DB::commit();

        session() -> flash('success', trans('deleted successfully'));
        return redirect() -> route('product.index');
    }

    public function search(Request $request){
        $products = Product::where('name','like',  '%'.$request->name.'%')->get();
         $products->is_filter = 1;

        //  dd($products);
        return view('admin.product.index', compact('products'));
    }

public function allproducts(){


    // $code = (Auth::user()->code);
    // $generation = (substr((substr($code, strpos($code, "%G") + 2)), 0,1)) + 1 ; // generation of auth user.
    // $first_parent_id = (substr($code, -1)); // that will increase balance 30 EGP .
    // $parent = (User::find($first_parent_id));
    // if ( ($generation - $parent->generation ) == 5 ){
    //     return 'will increase';
    // }else{
    //     return 'will not increase';
    // }
    $products = Product ::paginate(8);
    return view('admin.allproducts',compact('products'));
}


    // public function codeGenerator(){
    //     $auth_user = Auth::user();

    //     for($i=0; $i<=2; $i++){
    //         $string = Str::random(8);
    //         $code[] = $auth_user->name.'#'.$auth_user->id.'%'.$string;

    //         Code::create(array(
    //             'parent_id'=>$auth_user->id,
    //             'code'=>$auth_user->name.'#'.$auth_user->id.'%'.$string,
    //         ));
    //     }
    //    return 'success';
    //     // dd($code);


    // }

}
