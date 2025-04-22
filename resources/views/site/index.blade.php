@extends('site.master')
@section('content')

      <!-- Main Slider Section -->
      <section class="main-slider">
        <div class="auto-container">
          <div class="slider-icons-outer parallax-scene-1">
            <div data-depth="0.20" class="pattern-layer"
              style="background-image: url(images/main-slider/pattern-1.png)"></div>
            <div data-depth="0.40" class="pattern-layer-two"
              style="background-image: url(images/main-slider/pattern-2.png)"></div>
            <div data-depth="0.40" class="pattern-layer-three"
              style="background-image: url(images/main-slider/pattern-3.png)"></div>
            <div class="pattern-layer-four" style="background-image: url(images/main-slider/pattern-4.png)"></div>
            <div class="pattern-layer-six" style="background-image: url(images/main-slider/pattern-6.png)"></div>
          </div>
          <div class="main-slider-carousel owl-carousel owl-theme">
           @foreach ( $sliders  as $s )
               <!-- Slide 01 -->
            <div class="slide">
              <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                  <div class="inner-column">
                    <div class="title">{{__("The London Car Trading Company")}}</div>
                    <h1>{{ $s->title }}</h1>
                   
                    <div class="btns-box clearfix">
                      <a class="btn-style-one theme-btn" href="{{ route('about') }}"><span class="txt">{{__("Read More")}}
                          <i class="fa fa-arrow-circle-right"></i></span></a>
                    </div>
                    <div class="slide-arrow scroll-to-target" data-target=".about-section">
                      <img src="images/icons/slider-arrow.png" alt="" />
                    </div>
                  </div>
                </div>

                <!-- Image Column Start-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                  <div class="pattern-layer-five" style="
                        background-image: url(images/main-slider/pattern-5.png);
                      "></div>
                  <div class="inner-column">
                    <div class="image">
                      <img src="{{ $s->image }}" alt="" width="817" height="411" />
                    </div>
                  </div>
                </div>
                <!-- Image Column End-->
              </div>
            </div>
            <!-- End Slide 01 -->

           @endforeach
          
 

   
          </div>
        </div>
      </section>
      <!-- End Main Slider Section -->

      <!-- About Section -->
      <section class="about-section" style="background-image: url(images/background/pattern-2.png)">
        <!-- <div
            class="top-pattern-layer"
            style="background-image: url(images/background/pattern-1.png)"
          ></div> -->
        <div class="auto-container">
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-2">
              <div data-depth="0.20" class="icon-layer-one" style="background-image: url(images/icons/icon-1.png)">
              </div>
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
                  <div class="sec-title light">
                    <div class="title">{{ __("About Us") }}</div>
                    <h2>{{__("The London Car Trading Company")}},</h2>
                  </div>
                  <div class="white-text">
                    {!! app()->getLocale() == 'en' ? $site_settings->about_des: $site_settings->about_des_ar !!}
                  </div>
              
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Services Section -->
      <section class="services-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
            <div class="title">{{ __("our services") }}</div>
            <h2>
              {{ __("We are a professional and creative company and we offer you a trusty Trading cars services") }}
            </h2>
          </div>
          <!-- End Sec Title -->
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-3">
              <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
              <div data-depth="0.20" class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"></div>
              <div data-depth="0.20" class="pattern-layer-two"
                style="background-image: url(images/background/pattern-4.png)"></div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
              @foreach ( $services as $s )
                
             
              <!-- Service Block -->
              <div class="service-block">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"><img src="{{ $s->image }}" alt="" /></a>
                  </div>
                  <div class="lower-content">
                    <h4><a href="#">{{ $s->title }}</a></h4>
                    <div class="text">
                      {!! \Illuminate\Support\Str::limit(strip_tags($s->des), 100, '...') !!}
                    </div>
                    <a href="#" class="read-more">{{__("Read More")}}</a>
                  </div>
                </div>
              </div>

          @endforeach

          
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Choose Section -->
      <section class="choose-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title light centered">
            <div class="title">{{ __("why us") }}</div>
            <h2>{{ __("Why Choose Us") }}</h2>
          </div>
          <!-- End Sec Title -->
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-4">
              <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
              <div data-depth="0.20" class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"></div>
              <div data-depth="0.20" class="pattern-layer-two"
                style="background-image: url(images/background/pattern-4.png)"></div>
            </div>
            <div class="row clearfix">
              <!-- Image Column -->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="image titlt" data-tilt data-tilt-max="2">
                    <img src="{{ $site_settings->choose_us_image }}" alt="Why choose us" />
                    <span class="triangle-one"></span>
                    <span class="triangle-two"></span>
                    <!-- Fact Counter -->
                    <div class="fact-counter">
                      <div class="row clearfix">
                        <!-- Column -->
                        <div class="
                              column
                              counter-column
                              col-lg-4 col-md-4 col-sm-4
                            ">
                          <div class="inner">
                            <div class="content">
                              <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="{{ $site_settings->customer_satisfaction }}">0</span>%
                              </div>
                              <div class="counter-title">
                                {{ __("Customers") }} <br />
                                {{ __("satisfaction") }}
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Column -->
                        <div class="
                              column
                              counter-column
                              col-lg-4 col-md-4 col-sm-4
                            ">
                          <div class="inner">
                            <div class="content">
                              <div class="count-outer count-box">
                                <span class="count-text" data-speed="4000" data-stop="200">{{ $site_settings->monthly_active_user }}</span>+
                              </div>
                              <div class="counter-title">
                                {{ __("Monthly active") }} <br />
                                {{ __("users") }}
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Column -->
                        <div class="
                              column
                              counter-column
                              col-lg-4 col-md-4 col-sm-4
                            ">
                          <div class="inner">
                            <div class="content">
                              <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="{{ $site_settings->experience }}">0</span>+
                              </div>
                              <div class="counter-title">
                                {{ __("Experience") }} <br />
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Content Column -->
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
               
                  <div class="list-outer">
                    <ul class="choose-list">
                     
                     @foreach ($choose_us as $key=>$c )
                     <li>
                      <span class="number">{{ $key+1 }}</span>
                      <strong>{{ $c->title }}</strong>
                     {!! $c->des !!}
                    </li>
                     @endforeach
                    
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Choose Section -->

    

      <!-- vid's Section -->
      <section class="services-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
            <div class="title">{{ __("Our Videos") }}</div>
            <h2>
              {{-- {{ __("We are a professional and creative company and we offer you a trusty Trading cars services") }} --}}
            </h2>
          </div>
          <!-- End Sec Title -->
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-3">
              <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
              <div data-depth="0.20" class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"></div>
              <div data-depth="0.20" class="pattern-layer-two"
                style="background-image: url(images/background/pattern-4.png)"></div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
              @foreach ( $videos as $s )
                
             
              <!-- Service Block -->
              <div class="service-block">
                <div class="inner-box">
                  <div class="image">
                    <a href="{{  $s->video  }}" target="_blank"><img src="{{ $s->image }}" alt="" />
                      <div class="play-icon">
                        <i class="fas fa-play"></i>
                    </div>
                    
                    </a>
                  </div>
                  <div class="lower-content">
                    <h4><a href="{{  $s->video  }}">{{ $s->title }}</a></h4>
                    <a href="{{ $s->video }}" target="_blank" class="read-more">{{__("Show Video")}}</a>
                  </div>
                </div>
              </div>

          @endforeach

          
            </div>
          </div>
        </div>
      </section>
      <!-- End Faq's Section -->
<style>
  .play-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Center the icon */
    color: white; /* Icon color */
    font-size: 48px; /* Icon size */
    display: none; /* Initially hidden */
}

.image .play-icon {
    display: block; /* Show on hover */
}
</style>





      <!-- Awards Section -->
      {{-- <section class="awards-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title light centered">
            <div class="title">We Achieved</div>
            <h2>Awards & Recognition</h2>
          </div>
          <!-- End Sec Title -->
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-8">
              <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
              <div data-depth="0.20" class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"></div>
            </div>
            <div class="row clearfix">
              <!-- blocks Column -->
              <div class="blocks-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="row clearfix">
                    <!-- Award Block -->
                    <div class="award-block col-lg-6 col-md-6 col-sm-12">
                      <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="color-layer"></div>
                        <div class="icon flaticon-graduated-1"></div>
                        <h5>
                          <a href="#">Best Company</a>
                        </h5>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing.
                        </div>
                      </div>
                    </div>

                    <!-- Award Block -->
                    <div class="award-block col-lg-6 col-md-6 col-sm-12">
                      <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="color-layer"></div>
                        <div class="icon flaticon-bar-chart-1"></div>
                        <h5>
                          <a href="#">Growing Business</a>
                        </h5>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing.
                        </div>
                      </div>
                    </div>

                    <!-- Award Block -->
                    <div class="award-block col-lg-6 col-md-6 col-sm-12">
                      <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="color-layer"></div>
                        <div class="icon flaticon-charity"></div>
                        <h5>
                          <a href="#">Great Support</a>
                        </h5>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing.
                        </div>
                      </div>
                    </div>

                    <!-- Award Block -->
                    <div class="award-block col-lg-6 col-md-6 col-sm-12">
                      <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="color-layer"></div>
                        <div class="icon flaticon-trophy-1"></div>
                        <h5>
                          <a href="#">Excellent Service</a>
                        </h5>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Image Column -->
              <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="image">
                    <span class="triangle-one"></span>
                    <span class="triangle-two"></span>
                    <img src="images/resource/award.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- End Awards Section -->

      <!-- News Section -->
     
      <!-- End News Section -->

      <!-- Clients Section -->
      {{-- <div class="clients-section">
        <div class="auto-container">
          <div class="section-icons-outer parallax-scene-10">
            <div data-depth="0.50" class="pattern-layer" style="background-image: url(images/background/pattern-3.png)">
            </div>
          </div>
          <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/1.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/2.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/3.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/4.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/5.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/1.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/2.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/3.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="image-box">
                  <a href="#"><img src="images/clients/4.png" alt="" /></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}
      <!-- End Clients Section -->

    @stop