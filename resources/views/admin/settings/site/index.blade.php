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
                                <th class="ps-4 min-w-325px">@lang('site.value')</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="border">

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.phone')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->phone }}</a>
                                            <input type="text" name="phone" class="form-control form-control-solid"
                                                placeholder="@lang('site.Enter New') @lang('site.phone')" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.address')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->address_en }}</a>
                                            <input type="text" name="address_en" class="form-control form-control-solid"
                                                placeholder="@lang('site.Enter New') @lang('site.address')" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Address
                                                Ar</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->address_ar }}</a>
                                            <input type="text" name="address_ar" class="form-control form-control-solid"
                                                placeholder="@lang('site.Enter New') @lang('site.address')" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column m-auto">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.Email')</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->email }}</a>
                                        <input type="text" name="email" class="form-control form-control-solid"
                                            placeholder="@lang('site.Enter New') @lang('site.Email')" />
                                    </div>
                                </div>
                            </td>
                            </tr>


                        
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">experience
                                            </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->experience }}</a>
                                            <input type="text" name="experience" class="form-control form-control-solid"
                                                placeholder="experience" />
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">
                                                customer satisfaction </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->customer_satisfaction }}</a>
                                            <input type="text" name="customer_satisfaction"
                                                class="form-control form-control-solid" placeholder="customer satisfaction" />
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">
                                                monthly active users </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings->monthly_active_users }}</a>
                                            <input type="text" name="monthly_active_users"
                                                class="form-control form-control-solid" placeholder="monthly active users" />
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- about section  --}}
                            {{-- about des --}}

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">About
                                                Description EN</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="about_des" rows="2" id="editor" class="form-control form-control-solid">{{ old('about_des', $site_settings->about_des) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">About
                                                Description AR</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="about_des_ar" rows="2" id="editor" class="form-control form-control-solid">{{ old('about_des_ar', $site_settings->about_des_ar) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- about image  --}}

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">About
                                                image</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="about_image"
                                                class="form-control input-sm aboutimage1" accept="jpg, png, jpeg, svg">
                                            <img src="{{ $site_settings->about_image }}" width="100px"
                                                class="img-thumbnail aboutimage1-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- end about section --}}

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.logo')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="logo" class="form-control input-sm logo"
                                                accept="jpg, png, jpeg, svg">

                                            <img src="{{ $site_settings->logo }}" width="100px"
                                                class="img-thumbnail logo-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">@lang('site.favicon')</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="favicon" class="form-control input-sm favicon"
                                                accept="jpg, png, jpeg, svg">

                                            <img src="{{ $site_settings->favicon }}" width="100px"
                                                class="img-thumbnail favicon-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>





                            {{-- choose us image  --}}

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Why Choose us
                                                image</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="file" name="choose_us_image"
                                                class="form-control input-sm aboutimage1" accept="jpg, png, jpeg, svg">
                                            <img src="{{ $site_settings->choose_us_image }}" width="100px"
                                                class="img-thumbnail aboutimage1-preview mt-1" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- end choose us --}}
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Map</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input type="text" name="map" class="form-control input-sm image"
                                                value='{{ $site_settings->map }}'>
                                            {!! $site_settings->map !!}
                                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.61185028528!2d31.17606207091597!3d30.059611343484303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1683415177676!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- meta --}}


                            <tr>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Meta
                                                Keywords EN</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="meta_keyword_en" rows="2" id="editor" class="form-control form-control-solid">{{ old('meta_keyword_en', $site_settings->meta_keyword_en) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Meta
                                                Keywords AR</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="meta_keyword_ar" rows="2" id="editor" class="form-control form-control-solid">{{ old('meta_keyword_ar', $site_settings->meta_keyword_ar) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Meta
                                                Description EN</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="meta_description_en" rows="2" id="editor" class="form-control form-control-solid">{{ old('meta_description_en', $site_settings->meta_description_en) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column m-auto">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6 text-center">Meta
                                                Description AR</a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            {{-- <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $site_settings -> about_des }}</a> --}}
                                            <textarea name="meta_description_ar" rows="2" id="editor" class="form-control form-control-solid">{{ old('meta_description_ar', $site_settings->meta_description_ar) }}</textarea>
                                            {{-- <input type="text" name="about_des" class="form-control form-control-solid" placeholder="@lang('site.Enter New') About Description"/> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- end meta --}}


                        </tbody>
                        <!--end::Table body-->
                    </table>

                    <!--end::Table-->
                </div>
                <!--end::Table container-->

                <button type="submit" href="{{ route('settings.site.update') }}"
                    class="m-5 btn btn-lg btn-primary float-end">
                    @lang('site.Update') @lang('site.Site Settings') <i class="fa fa-edit"></i>
                </button>

            </div>
            <!--begin::Body-->
        </form>
    </div>
    <!--end::Tables Widget 11-->
@endsection



<!--begin::Tables Widget 11-->
