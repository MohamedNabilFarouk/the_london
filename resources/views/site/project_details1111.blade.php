@extends('site.master')
@section('content')
<style>
    .img-box {
        max-width: 100%;
        margin: auto;
        overflow: hidden;
    }
</style>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
        <div class="container">
            <h1>{{ $project->title_field }}</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Page Info-->
    <section class="page-info mt-5">
        <div class="container">
            <div class="flex-box-five">
                <ul class="bread-crumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>{{ $project->title_field }}</li>
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

                        
                        
                            <div class="tab-content">
                                <div class="tab-pane active" id="desc">
                                    
                                        <div class="row">
                                            
                                            @if ($project->gallery == '[]')
                                            <div class="col-md-12 img-box">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="{{ asset($project->image) }}">
                                                            <div class="thumb-image">
                                                                <img src="{{ asset($project->image) }}" alt="{{ $project->title_field }}"
                                                                    data-imagezoom="true" class="img-responsive" style="max-height: 300px;">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @else
                                            <div class=" col-md-12 img-box">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($project->gallery as $g)
                                                            <div class="swiper-slide">
                                                                <img src="{{ asset($g->image) }}" alt="Image 1" style="max-height: 300px;">
                                                            </div>
                                                        @endforeach
                                                       
                                                    </div>
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-pagination"></div>
                                                    <!-- Add Navigation -->
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                            </div>
                                        @endif
                                         
                                         

                                            <div class="col-md-12">
                                                <div class="content-box">
                                                    
                                                    <div class="text">
                                                        <p>{!! $project->des_field !!}</p>
                                                
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Enable autoplay if desired
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
        });
    </script>



@stop
