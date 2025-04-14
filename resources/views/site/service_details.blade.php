@extends('site.master')
@section('content')
   <!-- Page Title -->
   <section class="page-title">
    {{-- <div class="background-container">
      <img class="left-image" src="{{ asset('images/background/header-left-bg.png') }}" alt="" />
      <img class="right-image"  src="{{ asset('images/background/6.jpg') }}" alt="" />
    </div>
    <div class="service-container" style="
          background-image: url('https://themeim.com/');
        ">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url({{ asset('images/background/pattern-8.png') }})">
        </div>
      </div>

      <div class="auto-container">
        <h1>Car Insurance</h1>
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Services single</li>
        </ul>
      </div>
    </div> --}}
  </section>
  <!-- End Page Title -->

  <!-- Services Detail Section -->
  <section class="services-detail-section">
    <div class="auto-container">
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-2">
          <div data-depth="0.30" class="icon-layer" style="background-image: url({{ asset('images/icons/icon-1.png') }})"></div>
          <div data-depth="0.40" class="pattern-layer"
            style="background-image: url({{ asset('images/background/pattern-4.png') }})"></div>
        </div>
        <div class="row clearfix">
          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="image">
                <span class="triangle-one"></span>
                <span class="triangle-two"></span>
                <img src="{{ $service->image }}" alt="" />
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div class="content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <h2>{{ $service->title }}</h2>
              <div class="text">
                {!! $service->des !!}
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Detail Section -->
@stop
