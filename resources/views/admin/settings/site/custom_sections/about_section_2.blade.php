@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">@lang('site.Site Settings')
                <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1"></small>
                    <!--end::Description--></h1>
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

        <form class="col-12" action="{{ route('settings.site.update') }}" method="post"
              enctype="multipart/form-data">

        {{ csrf_field() }}
        {{ method_field('put') }}

            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">@lang('site.Site Settings')</span>
                </h3>

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
                                <th class="ps-4 min-w-325px text-center">@lang('site.Site Settings')</th>
                                <th class="ps-4 min-w-325px">@lang('site.value') EN</th>
                                <th class="ps-4 min-w-325px">@lang('site.value') AR</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="border">

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">about_section_2_title</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_section_2_title_en }}</a>
                                            <input type="text" name="about_section_2_title_en" class="form-control form-control-solid" placeholder="about_section_2_title en"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_section_2_title_ar }}</a>
                                            <input type="text" name="about_section_2_title_ar" class="form-control form-control-solid" placeholder="about_section_2_title_ar"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">about_section_2 Subtitle</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_section_2_Subtitle_en }}</a>
                                            <input type="text" name="about_section_2_Subtitle_en" class="form-control form-control-solid" placeholder="about_section_2_Subtitle en"/>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_section_2_Subtitle_ar }}</a>
                                            <input type="text" name="about_section_2_Subtitle_ar" class="form-control form-control-solid" placeholder="about_section_2_Subtitle_ar"/>
                                        </div>
                                    </div>
                                </td>
                                </tr>


                              
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column m-auto">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">about_section_2_text</a>
                                            </div>
                                        </div>
                                    </td>
    
    
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                             
                                                <textarea name="about_section_2_text_en" class="form-control form-control-solid">{{ $site_settings ->about_section_2_text_en}}</textarea>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                             
                                                <textarea name="about_section_2_text_ar" class="form-control form-control-solid">{{ $site_settings ->about_section_2_text_ar }}</textarea>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column m-auto">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">about_section_2_step 1</a>
                                                </div>
                                            </div>
                                        </td>
        
        
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                 
                                                    <textarea name="about_section_2_step1_en" class="form-control form-control-solid">{{ $site_settings ->about_section_2_step1_en }}</textarea>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                 
                                                    <textarea name="about_section_2_step1_ar" class="form-control form-control-solid">{{ $site_settings ->about_section_2_step1_ar }}</textarea>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column m-auto">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">about_section_2_step 2</a>
                                                </div>
                                            </div>
                                        </td>
        
        
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                 
                                                    <textarea name="about_section_2_step2_en" class="form-control form-control-solid">{{ $site_settings ->about_section_2_step2_en }}</textarea>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                 
                                                    <textarea name="about_section_2_step2_ar" class="form-control form-control-solid">{{ $site_settings ->about_section_2_step2_ar }}</textarea>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column m-auto">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">about_section_2_step 3</a>
                                                </div>
                                            </div>
                                        </td>
        
        
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                 
                                                    <textarea name="about_section_2_step3_en" class="form-control form-control-solid">{{ $site_settings ->about_section_2_step3_en }}</textarea>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                 
                                                    <textarea name="about_section_2_step3_ar" class="form-control form-control-solid">{{ $site_settings ->about_section_2_step3_ar }}</textarea>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>

                            
                            </tbody>
                            <!--end::Table body-->
                        </table>



                                    </div>
                <!--end::Table container-->

                <button type="submit" href="{{route('settings.site.update')}}" class="m-5 btn btn-lg btn-primary float-end">
                    @lang('site.Update') @lang('site.Site Settings') <i class="fa fa-edit"></i>
                </button>

            </div>
            <!--begin::Body-->
        </form>
    </div>
    <!--end::Tables Widget 11-->
@endsection



<!--begin::Tables Widget 11-->
