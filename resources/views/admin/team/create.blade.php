@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Team
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Add</small>
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
            <form method="post" action="{{ route('team.store') }}" enctype="multipart/form-data">
                @csrf


                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">Name</label>
                    <input type='text' name="name" class="form-control" value="{{ old('name') }}" />
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">Title En</label>
                    <input type='text' name="title_en" class="form-control" value="{{ old('title_en') }}" />
                </div>

                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">Title Ar</label>
                    <input type='text' name="title_ar" class="form-control" value="{{ old('title_ar') }}" />
                </div>


                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">description En</label>
                    <textarea name="des_en" class="form-control form-control-solid">{{ old('des_en') }}</textarea>
                </div>


                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">description AR</label>
                    <textarea name="des_ar" class="form-control form-control-solid">{{ old('des_ar') }}</textarea>
                </div>



           

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" class="required form-label">Image</label> -->
                    <!-- <input class="image_name" type="file" name="image" value=""> -->
                    <!-- <input type='text' name="image" placeholder='Add icon like:  <i class="uil uil-phone-volume"></i>' class="form-control" value="{{ old('image') }}" />

                </div> -->

              


                <div class="text-right mb-5">
                    <!-- <input type="submit" name="add" class="btn btn-success" value="Add"> -->
                    <button type="submit"  class="btn btn-success" >Add</button>
                </div>
            </form>
        </div>
    </div>
    <!-- // END drawer-layout__content -->
    </div>
@stop
