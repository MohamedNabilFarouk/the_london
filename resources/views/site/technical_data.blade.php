@extends('site.master')
@section('content')
 
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
        <div class="container">
            <h1>{{__("Technical Data")}}</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Page Info-->
    <section class="page-info mt-5">
        <div class="container">
            <div class="flex-box-five">
                <ul class="bread-crumb">
                    <li><a href="{{ url('/') }}">{{__("Home")}}</a></li>
                    <li>{{__("Technical Data")}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Info -->

    <!-- Shop Details -->
    <section class="shop-single-area sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-products-details">

                        <div class="product-tab-box">
                        
                            <div class="tab-content">
                                <div class="tab-pane active" id="desc">
                                    <div class="product-content-box">
                                        <div class="row">
                                            
                                                <div class="col-md-6 img-box">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li data-thumb="{{ $site_settings->technical_data_image }}">
                                                                <div class="thumb-image">
                                                                    <img src="{{ $site_settings->technical_data_image }}" alt=""
                                                                        data-imagezoom="true" class="img-responsive">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                         
                                         

                                            <div class="col-md-6">
                                                <div class="content-box">
                                                    
                                                    <div class="text">
                                                        <p>@if(app()->getLocale()=='en'){!! $site_settings->technical_data_en !!}@else{!! $site_settings->technical_data_ar !!} @endif</p>
                                                
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               


                            </div>
                        </div>




                     
                    </div>
                </div>
        
            </div>
        </div>
    </section>


@stop
