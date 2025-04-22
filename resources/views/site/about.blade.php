@extends('site.master')
@section('content')

    <!-- Page Title -->
    <section class="page-title">
        {{-- <div class="background-container">
          <img class="left-image" src="{{ asset('images/background/header-left-bg.png') }}" alt="" />
          <img class="right-image" src="{{ asset('images/background/1.jpg') }}" alt="" />
        </div>
        <div class="service-container">
          <div class="section-icons-outer parallax-scene-1">
            <div data-depth="0.20" class="pattern-layer" style="background-image: url({{ asset('images/background/pattern-8.png') }})">
            </div>
          </div>
  
          <div class="auto-container">
            <h1>About Us</h1>
            <ul class="page-breadcrumb">
              <li><a href="{{ url('/') }}">home</a></li>
              <li>About Us</li>
            </ul>
          </div>
        </div>--}}
      </section> 
      <!-- End Page Title -->
  
      <!-- About Section -->
      <section class="about-section style-two">
        <div class="auto-container">
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-2">
              <div data-depth="0.20" class="icon-layer-one" style="background-image: url({{ asset('images/icons/icon-1.png') }})"></div>
              <div data-depth="0.20" class="icon-layer-two"
                style="background-image: url({{ asset('images/background/pattern-4.png') }})"></div>
            </div>
            <div class="row clearfix">
              <!-- Image Column -->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="image titlt" data-tilt data-tilt-max="2">
                    <img src="{{ $site_settings->about_image }}" alt="" />
                    <span class="triangle-one"></span>
                    <span class="triangle-two"></span>
                  </div>
                </div>
              </div>
              <!-- Content Column -->
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <div class="title">{{ __("About Us") }}</div>
                        <h2>{{ __("The London Car Trading Company") }}</h2>
                      </div>
                  <div class="text">
                    {!! app()->getLocale() == 'en' ? $site_settings->about_des: $site_settings->about_des_ar !!}
                  </div>
              
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->








@stop
