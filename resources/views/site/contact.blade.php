
@extends('site.master')
@section('content')
<style>
  iframe {
      width: 100%; 
      height: 500px; 

  }
</style>
 <!-- Page Title -->
 <section class="page-title">
    {{-- <div class="background-container">
      <img class="left-image" src="{{ asset('images/background/header-left-bg.png') }}" alt="" />
      <img class="right-image" class="right-image" src="{{ asset('images/background/contact-right-bg.png') }}" alt="" />
    </div>
    <div class="service-container">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url({{ asset('images/background/pattern-8.png') }})">
        </div>
      </div>

      <div class="auto-container">
        <h1>Contact</h1>
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Contact</li>
        </ul>
      </div>
    </div> --}}
  </section>
  <!-- End Page Title -->

  <!-- Contact Form Section -->
  <section class="contact-form-section">
    <div class="auto-container">
       
      <div class="row clearfix">
        <!-- Info Column -->
        <div class="info-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="section-icons-outer parallax-scene-2">
              <div data-depth="0.40" class="icon-layer" style="background-image: url({{ asset('images/icons/icon-1.png') }})">
              </div>
            </div>
            <!-- Sec Title -->
            <div class="sec-title">
              <h2>{{__("Get In Touch")}}</h2>
              <div class="text">
                {{ __("Get in touch with us through our channels below for any questions or queries and one of our representatives will get back to you as soon.") }}
              </div>
            </div>
            <h4>{{ __("Contact us") }}</h4>
            <ul class="contact-info-list">
              <li>
                <span class="icon flaticon-envelope"><svg xmlns="http://www.w3.org/2000/svg" width="34.813"
                    height="25.5" viewBox="0 0 34.813 25.5">
                    <path id="Path_1787" data-name="Path 1787"
                      d="M30.413,24.61H4.4A4.4,4.4,0,0,0,0,29.01v16.7a4.4,4.4,0,0,0,4.4,4.4H30.413a4.4,4.4,0,0,0,4.4-4.4V29.01A4.4,4.4,0,0,0,30.413,24.61Zm-.687,2.838L17.406,36.964,5.087,27.448Zm.687,19.824H4.4a1.563,1.563,0,0,1-1.562-1.562V29.3l13.7,10.584a1.419,1.419,0,0,0,1.735,0L31.975,29.3V45.71A1.564,1.564,0,0,1,30.413,47.272Z"
                      transform="translate(0 -24.61)" fill="#fff" /></svg></span>
                <strong>{{ __("E-mail") }}</strong>
                <a href="mailto:{{ $site_settings->email }}">{{ $site_settings->email }}</a>
              </li>
              <li>
                <span class="icon flaticon-phone"><svg id="telephone" xmlns="http://www.w3.org/2000/svg"
                    width="42.838" height="43" viewBox="0 0 42.838 43">
                    <path id="Path_1788" data-name="Path 1788"
                      d="M9.592,28.583A45.619,45.619,0,0,0,24.766,40.47a23.616,23.616,0,0,0,8.491,2.513c.2.009.4.018.606.018a7.032,7.032,0,0,0,5.453-2.343.2.2,0,0,0,.036-.045,22.956,22.956,0,0,1,1.72-1.782c.419-.4.846-.82,1.256-1.247a4.3,4.3,0,0,0-.018-6.406l-5.355-5.355a4.334,4.334,0,0,0-3.136-1.443,4.48,4.48,0,0,0-3.172,1.435L27.457,29c-.294-.169-.6-.321-.882-.463a11.018,11.018,0,0,1-.98-.535,33.759,33.759,0,0,1-8.064-7.342A19.44,19.44,0,0,1,14.8,16.314c.838-.757,1.622-1.55,2.379-2.326.267-.276.544-.552.82-.829a4.568,4.568,0,0,0,1.479-3.208A4.532,4.532,0,0,0,18,6.745L15.348,4.09c-.312-.312-.606-.615-.909-.927-.588-.606-1.2-1.23-1.809-1.791A4.442,4.442,0,0,0,9.494,0,4.573,4.573,0,0,0,6.322,1.381L2.99,4.713A6.847,6.847,0,0,0,.95,9.1a16.49,16.49,0,0,0,1.238,7.128A41.469,41.469,0,0,0,9.592,28.583ZM3.124,9.284A4.713,4.713,0,0,1,4.54,6.255L7.855,2.94a2.4,2.4,0,0,1,1.639-.757,2.277,2.277,0,0,1,1.6.775c.6.552,1.158,1.132,1.764,1.746.3.312.615.624.927.944L16.444,8.3a2.42,2.42,0,0,1,.838,1.666,2.42,2.42,0,0,1-.838,1.666c-.276.276-.552.561-.829.838-.829.838-1.6,1.631-2.459,2.388l-.045.045a1.742,1.742,0,0,0-.446,1.978c.009.027.018.045.027.071a20.97,20.97,0,0,0,3.127,5.088,35.63,35.63,0,0,0,8.589,7.823,12.754,12.754,0,0,0,1.176.642,11.019,11.019,0,0,1,.98.535c.036.018.062.036.1.053a1.863,1.863,0,0,0,.864.223,1.89,1.89,0,0,0,1.328-.606l3.332-3.332a2.358,2.358,0,0,1,1.631-.793,2.238,2.238,0,0,1,1.577.793l5.373,5.364a2.149,2.149,0,0,1-.027,3.359c-.374.4-.766.784-1.185,1.185a25.659,25.659,0,0,0-1.862,1.933,4.892,4.892,0,0,1-3.822,1.622c-.151,0-.312-.009-.463-.018a21.455,21.455,0,0,1-7.68-2.3A43.337,43.337,0,0,1,11.285,27.211,39.693,39.693,0,0,1,4.246,15.495,14.371,14.371,0,0,1,3.124,9.284Z"
                      transform="translate(-0.912 0)" fill="#fff" /></svg></span>
                <strong>{{ __("Call") }}</strong>
                <a href="tel:{{ $site_settings->phone }}">{{ $site_settings->phone }}</a>
              </li>
              <li>
                <span class="icon flaticon-map"><svg id="location-icon" xmlns="http://www.w3.org/2000/svg"
                    width="30.234" height="43" viewBox="0 0 30.234 43">
                    <g id="Group_727" data-name="Group 727">
                      <g id="Group_726" data-name="Group 726">
                        <path id="Path_1789" data-name="Path 1789"
                          d="M91.117,0A15.12,15.12,0,0,0,78.257,23.066l12,19.338a1.26,1.26,0,0,0,1.07.6h.01a1.26,1.26,0,0,0,1.071-.612L104.1,22.862A15.12,15.12,0,0,0,91.117,0ZM101.94,21.569,91.308,39.32,80.4,21.739a12.606,12.606,0,1,1,21.542-.17Z"
                          transform="translate(-76)" fill="#fff" />
                      </g>
                    </g>
                    <g id="Group_729" data-name="Group 729" transform="translate(7.559 7.559)">
                      <g id="Group_728" data-name="Group 728">
                        <path id="Path_1790" data-name="Path 1790"
                          d="M173.559,90a7.559,7.559,0,1,0,7.559,7.559A7.567,7.567,0,0,0,173.559,90Zm0,12.614a5.056,5.056,0,1,1,5.047-5.056A5.06,5.06,0,0,1,173.559,102.614Z"
                          transform="translate(-166 -90)" fill="#fff" />
                      </g>
                    </g>
                  </svg></span>
                <strong>{{ __("Location") }}</strong>
                {!! app()->getLocale() == 'en' ? $site_settings->address_en : $site_settings->address_ar !!}
              </li>
            </ul>
            <h4>{{ __("Social Links") }}</h4>
            <!-- Social Box -->
            <ul class="social-box">
              @foreach($social_settings as $s)
              <li>
                <a href="{{ $s->value }}" class="fab fa-{{ $s->key }}"></a>
              </li>
              @endforeach
              
            </ul>
          </div>
        </div>

        <!-- Form Column -->
        <div class="form-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="section-icons-outer parallax-scene-3">
              <div data-depth="0.40" class="pattern-layer" style="
                    background-image: url({{ asset('images/background/pattern-4.png') }});
                  "></div>
            </div>
            <h3>{{ __("Leave us a little info, and we'll be in touch") }}</h3>
            <!-- Contact Form -->
            <div class="contact-form">
              <form method="post" action="{{ url('sendMessage') }}" id="contact-form">
                @csrf
                <div class="form-group">
                  <label>{{ __("Name") }}*</label>
                  <input type="text" name="name" placeholder="{{ __("Name") }}" required />
                </div>

                <div class="form-group">
                  <label>{{ __("Email") }}*</label>
                  <input type="email" name="email" placeholder="{{ __("Email") }}" required />
                </div>

                <div class="form-group">
                  <label>{{ __("Phone") }}</label>
                  <input type="text" name="phone" placeholder="{{ __("Phone") }}" required />
                </div>
                <div class="form-group">
                  <label>{{ __("Subject") }}</label>
                  <input type="text" name="subject" placeholder="{{ __("Subject") }}" required />
                </div>

                <div class="form-group">
                  <label>{{ __("Message") }}</label>
                  <textarea name="message" placeholder="{{ __("Message") }}"></textarea>
                </div>

                <div class="form-group">
                  <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                    <span class="txt-center">{{ __("Send Message") }}</span>
                  </button>
                </div>
              </form>
            </div>
            <!-- eND Contact Form -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Form Section -->


   <!-- map Section -->
   <section class="booking-section">
    <div class="auto-container">
      <div class="clearfix">
        <!-- Booking Column -->
    

        <!-- Map Column -->
        <div class="map-column col-lg-12 col-md-12 col-sm-12">
          <div class="inner-column">
            <!-- Map Boxed -->
            <div class="map-boxed">
              <div class="map-outer">
               {!! $site_settings->map !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End map Section -->


@stop
