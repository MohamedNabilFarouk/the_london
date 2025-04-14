@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{ __('Technical Data') }}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1"></small>
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

    <div class="card mb-5 mb-xl-8">

        <form class="col-12" action="{{ route('settings.site.update') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('put') }}

            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
               

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">

                    <table class="table table-hover align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-325px text-center"></th>
                                <th class="ps-4 min-w-325px">@lang('site.value')</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="border">

                    {{-- en --}}
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Text En
                                                </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="technical_data_en" rows="2" id="editor" class="form-control form-control-solid">{{ old('about_des', $site_settings->technical_data_en) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- ar --}}
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Text Ar
                                                </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="technical_data_ar" rows="2" id="editor" class="form-control form-control-solid">{{ old('technical_data_ar', $site_settings->technical_data_ar) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                           



                            {{-- technical data image heree --}}

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">image
                                            </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="technical_data_image"
                                                class="form-control input-sm aboutimage1" accept="jpg, png, jpeg, svg">
                                            <img src="{{ $site_settings->technical_data_image }}" width="100px"
                                                class="img-thumbnail aboutimage1-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          

                        </tbody>
                        <!--end::Table body-->
                    </table>



                    <!--begin::Table-->
                    {{-- <table class="table table-hover align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-325px text-center">@lang('site.Site Settings')</th>
                                <th class="ps-4 min-w-325px">@lang('site.English')</th>
                                <th class="ps-4 min-w-325px">@lang('site.Arabic')</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="border">

                            <tr>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.Title')</a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> title_en }}</a>
                                            <input type="text" name="title_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.Title') @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> title_ar }}</a>
                                            <input type="text" name="title_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') @lang('site.Title') @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>






                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Meta Title</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_title_en }}</a>
                                            <input type="text" name="meta_title_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Title @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_title_ar }}</a>
                                            <input type="text" name="meta_title_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Title @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Meta Description</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_description_en }}</a>
                                            <input type="text" name="meta_description_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Title @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_description_ar }}</a>
                                            <input type="text" name="meta_description_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Description @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Meta Keywords</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_keyword_en }}</a>
                                            <input type="text" name="meta_keyword_en" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Keywords @lang('site.in English')"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> meta_keyword_ar }}</a>
                                            <input type="text" name="meta_keyword_ar" class="form-control form-control-solid" placeholder="@lang('site.Enter New') Meta Keywords @lang('site.in Arabic')"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                            <!--end::Table body-->
                        </table> --}}


                    <!--end::Table-->
                </div>
                <!--end::Table container-->

                <button type="submit" href="{{ route('settings.site.update') }}"
                    class="m-5 btn btn-lg btn-primary float-end">
                    @lang('site.Update') <i class="fa fa-edit"></i>
                </button>

            </div>
            <!--begin::Body-->
        </form>
    </div>
    <!--end::Tables Widget 11-->
@endsection



<!--begin::Tables Widget 11-->
