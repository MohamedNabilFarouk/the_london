@extends('site.master')
@section('content')
   <!-- Page Title -->
   <section class="page-title">
    {{-- <div class="background-container">
      <img class="left-image" src="images/background/header-left-bg.png" alt="" />
      <img class="right-image" src="images/background/5.jpg" alt="" />
    </div> --}}
    {{-- <div class="service-container">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url(images/background/pattern-8.png)">
        </div>
      </div>

      <div class="auto-container">
        <h1>Services</h1>
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Services</li>
        </ul>
      </div>
    </div> --}}
  </section>
  <!-- End Page Title -->



  <section class="services-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <h2>{{ __("We ensure best services") }}</h2>
        <div class="text">
          {{ __("We are a professional and creative company and we offer you a trusty Trading cars services") }}
        </div>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-2">
          <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
          <div data-depth="0.20" class="pattern-layer"
            style="background-image: url(images/background/pattern-3.png)"></div>
          <div data-depth="0.20" class="pattern-layer-two style-two"
            style="background-image: url(images/background/pattern-4.png)"></div>
        </div>
        <div class="row clearfix">
          @foreach($services as $s)
          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image">
                <a href="{{ route('service.details', $s->slug) }}"><img src="{{ $s->image }}" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="{{ route('service.details', $s->slug) }}">{{ $s->title }}</a></h4>
                <div class="text">
                  {{-- {!! ($s->des,100,'.....') !!}   --}}
                  {{ \Illuminate\Support\Str::limit(strip_tags($s->des), 100, '...') }}

                </div>
                <a href="{{ route('service.details', $s->slug) }}" class="read-more">{{ __("Read More") }}</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

   <!-- End Services Section -->

@stop
