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
                    <div class="title">WELCOME TO The London</div>
                    <h1>{{ $s->title }}</h1>
                   
                    <div class="btns-box clearfix">
                      <a class="btn-style-one theme-btn" href="#"><span class="txt">Read More
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
                    <div class="title">about us</div>
                    <h2>Welcome to The London,</h2>
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

      <!-- Services Section -->
      <section class="services-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
            <div class="title">our services</div>
            <h2>
              We ensure best financial services <br />
              for our clients.
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
                      {!! \Illuminate\Support\Str::limit($s->des, 100, '...') !!}
                    </div>
                    <a href="#" class="read-more">Read More</a>
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
            <div class="title">why us</div>
            <h2>Why Choose Us</h2>
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
                                Customer <br />
                                satisfaction
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
                                Monthly active <br />
                                users
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
                                Experience <br />
                              
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

    

      <!-- Faq's Section -->
      <section class="faq-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
            <div class="title">faq</div>
            <h2>Frequently Asked Questions</h2>
          </div>
          <!-- End Sec Title -->
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-6">
              <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
              <div data-depth="0.40" class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"></div>
            </div>
            <div class="row clearfix">
              <!-- Accordion Column -->
              <div class="accordion-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                  <!-- Accordian Box -->
                  <ul class="accordion-box">
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn">
                        <div class="icon-outer">
                          <span class="icon icon-plus fa fa-plus"></span>
                          <span class="icon icon-minus fa fa-minus"></span>
                        </div>
                        1. Compare personalized quotes?
                      </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley
                          </div>
                        </div>
                      </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block active-block">
                      <div class="acc-btn active">
                        <div class="icon-outer">
                          <span class="icon icon-plus fa fa-plus"></span>
                          <span class="icon icon-minus fa fa-minus"></span>
                        </div>
                        2. Compare personalized quotes?
                      </div>
                      <div class="acc-content current">
                        <div class="content">
                          <div class="text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley
                          </div>
                        </div>
                      </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn">
                        <div class="icon-outer">
                          <span class="icon icon-plus fa fa-plus"></span>
                          <span class="icon icon-minus fa fa-minus"></span>
                        </div>
                        3. Compare personalized quotes?
                      </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley
                          </div>
                        </div>
                      </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn">
                        <div class="icon-outer">
                          <span class="icon icon-plus fa fa-plus"></span>
                          <span class="icon icon-minus fa fa-minus"></span>
                        </div>
                        4. Compare personalized quotes?
                      </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Image Column -->
              <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="image">
                    <span class="triangle-one"></span>
                    <span class="triangle-two"></span>
                    <img src="images/resource/faq.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Faq's Section -->

      <!-- Testimonial Section -->
      <section class="testimonial-section">
        <div class="auto-container">
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-7">
              <div data-depth="0.20" class="icon-layer" style="background-image: url(images/icons/icon-1.png)"></div>
              <div data-depth="0.30" class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"></div>
            </div>
            <div class="row clearfix">
              <!-- Image Column -->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="image titlt" data-tilt data-tilt-max="2">
                    <img src="images/resource/testimonial.jpg" alt="" />
                    <span class="triangle-one"></span>
                    <span class="triangle-two"></span>
                  </div>
                </div>
              </div>

              <!-- Carousel Column -->
              <div class="carousel-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <!-- Sec Title -->
                  <div class="sec-title">
                    <div class="title">feedback</div>
                    <h2>
                      What Clients Says <br />
                      About us?
                    </h2>
                  </div>
                  <div class="single-item-carousel owl-carousel owl-theme">
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                      <div class="inner-box">
                        <div class="quote-icon">
                          <img src="images/icons/quote-icon.png" alt="" />
                        </div>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing and
                          typesetting industry. Lorem Ipsum has been the
                          industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and
                          scrambled it to make a type specimen.
                        </div>
                        <div class="author-box">
                          <div class="box-inner">
                            <div class="author-image">
                              <img src="images/resource/author-2.jpg" alt="" />
                            </div>
                            Luiz Jenifer<br />
                            <div class="designation">Client</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                      <div class="inner-box">
                        <div class="quote-icon">
                          <img src="images/icons/quote-icon.png" alt="" />
                        </div>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing and
                          typesetting industry. Lorem Ipsum has been the
                          industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and
                          scrambled it to make a type specimen.
                        </div>
                        <div class="author-box">
                          <div class="box-inner">
                            <div class="author-image">
                              <img src="images/resource/author-2.jpg" alt="" />
                            </div>
                            Luiz Jenifer<br />
                            <div class="designation">Client</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                      <div class="inner-box">
                        <div class="quote-icon">
                          <img src="images/icons/quote-icon.png" alt="" />
                        </div>
                        <div class="text">
                          Lorem Ipsum is simply dummy text of the printing and
                          typesetting industry. Lorem Ipsum has been the
                          industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and
                          scrambled it to make a type specimen.
                        </div>
                        <div class="author-box">
                          <div class="box-inner">
                            <div class="author-image">
                              <img src="images/resource/author-2.jpg" alt="" />
                            </div>
                            Luiz Jenifer<br />
                            <div class="designation">Client</div>
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
      <!-- End Testimonial Section -->

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