@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Products
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Edit</small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')

    @include('admin.includes.messages')

    <div class="container-fluid page__container p-2">

        <div class="card rounded card-form__body card-body shadow-lg">
            <form method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">title En</label>
                    <input type='text' name="title" class="form-control" value="{{ $product->title }}" required />
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">title Ar</label>
                    <input type='text' name="title_ar" class="form-control" value="{{ $product->title_ar }}" required  />
                </div>


                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">Category</label>
                   <select class="form-control" name='category_id' required >
                    <option value='0' >Select Category</option>

                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->title_en  }}</option>
                    @endforeach
                   </select>
                </div>


                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">Description En</label>
                    <textarea name="des" class="form-control form-control-solid" rows="2" id="editor">{{ $product->des }}</textarea>
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">Description Ar</label>
                    <textarea name="des_ar" class="form-control form-control-solid" rows="2" id="editor">{{ $product->des_ar }}</textarea>
                </div>


                <div class="row">
                    <div class="form-group mb-10 col-md-6">
                        <label for="exampleFormControlInput1" class=" form-label">Features En</label>
                        <textarea name="features_text" class="form-control form-control-solid" rows="2" id="editor">{{ $product->features_text }}</textarea>
                    </div>
                    <div class="form-group mb-10 col-md-6">
                        <label for="exampleFormControlInput1" class=" form-label">Features Ar</label>
                        <textarea name="features_text_ar" class="form-control form-control-solid" rows="2" id="editor">{{ $product->features_text_ar }}</textarea>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group mb-10 col-md-6">
                        <label for="exampleFormControlInput1" class=" form-label">Advantages En</label>
                        <textarea name="advantage_text" class="form-control form-control-solid" rows="1" id="editor">{{ $product->advantage_text }}</textarea>
                    </div>


                    <div class="form-group mb-10 col-md-5">
                        <label for="exampleFormControlInput1" class=" form-label">Advantages Ar</label>
                        <textarea name="advantage_text_ar" class="form-control form-control-solid" rows="1" id="editor">{{ $product->advantage_text_ar }}</textarea>
                    </div>
                </div>





                <div class="row mb-2">
                    <div class="form-group col-md-3">
                        <label for="exampleFormControlInput1" class="required form-label">Image</label>
                        <input class="image_name" type="file" name="image" value="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleFormControlInput1" class="required form-label">Features Image</label>
                        <input class="image_name" type="file" name="features_image" value="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleFormControlInput1" class=" form-label">technical data image</label>
                        <input class="image_name" type="file" name="technical_data_image" value="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleFormControlInput1" class="form-label">Advantage Image</label>
                        <input class="image_name" type="file" name="advantage_image" value="">
                    </div>

                    <div class=" form-group" style="margin-top: 30px">
                        <label for="exampleFormControlInput1" class="form-label">Gallery</label>
    
                        <input type="file" name="gallery[]" class="image_name" multiple>
                    </div>

                </div>
                


                <div class="text-right mb-5">
                    <!-- <input type="submit" name="add" class="btn btn-success" value="Add"> -->
                    <button type="submit"  class="btn btn-success" >Edit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- // END drawer-layout__content -->
    </div>
@stop
