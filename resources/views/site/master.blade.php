<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from themeim.com/demo/carsore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 14:03:58 GMT -->
<head>
  <meta charset="utf-8" />
  <title>London | Homepage</title>
  <!-- Stylesheets -->
  <link href="{{ asset('site/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{ asset('site/css/niceselect.css')}}" rel="stylesheet" />
  <link href="{{ asset('site/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('site/css/responsive.css')}}" rel="stylesheet" />

  <!-- Switcher Mockup -->
  <link href="{{ asset('site/css/color-switcher-design.css') }}" rel="stylesheet" />

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Ubuntu:wght@300;400;500;700&amp;display=swap"
    rel="stylesheet" />

  <link rel="shortcut icon" href="{{ $site_settings->logo }}" type="image/x-icon" />
  <link rel="icon" href="{{ $site_settings->logo }}" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
  <div class="main-homepage">
    <div class="page-wrapper">
      <!-- Loading -->
      {{-- <div class="loading-window-outer">
        <div class="loading-window">
          <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
          </div>

          <div class="text">
            <span>Loading</span><span class="dots">...</span>
          </div>
        </div>
      </div> --}}
      <!-- End Loading -->

      <!-- Main Header-->
      <header class="main-header">
        <!-- Header Upper -->
        <div class="header-upper">
          <div class="auto-container">
            @include('admin.includes.messages')
            <div class="inner-container clearfix">
              <div class="logo-box">
                <div class="logo">
                  <a href="{{ url('/') }}"><img src="{{ $site_settings->logo }}" alt="" title="" /></a>
                </div>
              </div>

              <div class="nav-outer clearfix">
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler">
                  <span class="icon flaticon-menu-2"></span>
                </div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-xl">
                  <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                      <li class="current dropdown">
                        <a href="{{ url('/') }}">Home</a>
                        
                      </li>
                      <li>
                        <a href="{{ route('about') }}">About Us</a>
                      </li>
                      <li class="">
                        <a href="{{ route('services') }}">Services</a>
                       
                      </li>
                      <!-- <li class="">
                        <a href="#">Blog</a>
                       
                      </li> -->
                     
                     
                      <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                  </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                  <!-- Phone Btn -->
                  <div class="phone-box">
                    <div class="box-inner">
                      <a class="phone" href="tel:+{{ $site_settings->phone }}">{{ $site_settings->phone }}
                        <span class="icon flaticon-call-2"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
          <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
              <a href="{{ url('/') }}" title=""><img src="{{ $site_settings->logo }}" alt="" title="" /></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
              <!-- Mobile Navigation Toggler -->
              <div class="mobile-nav-toggler">
                <span class="icon flaticon-menu-2"></span>
              </div>
              <!-- Main Menu -->
              <nav class="main-menu navbar-expand-md">
                
              </nav>
              <!-- Main Menu End-->

              <!-- Main Menu End-->
              <div class="outer-box clearfix">
                <!-- Phone Btn -->
                <div class="phone-box">
                  <div class="box-inner">
                    <a class="phone" href="tel:+{{ $site_settings->phone }}">{{ $site_settings->phone }} <span
                        class="icon flaticon-call-2"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
            <span class="icon flaticon-multiply"></span>
          </div>

          <nav class="menu-box">
            <div class="nav-logo">
              <a href="{{ url('/') }}"><img src="{{ $site_settings->logo }}" alt="" title="" /></a>
            </div>
            <div class="menu-outer">
              <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
          </nav>
        </div>
        <!-- End Mobile Menu -->
      </header>
      <!-- End Main Header -->
        @yield('content')
          <!-- CTA Section -->
      <section class="cta-section">
        <div class="auto-container">
          <div class="inner-container" style="background-image: url({{ asset('images/background/pattern-5.png') }})">
            <div class="row clearfix">
              <!-- Title Column -->
              <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                  <h3>Let us take care about your veicle</h3>
                </div>
              </div>

              <!-- Form Column -->
              <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="newsletter-form">
                    <form method="post" action="{{ route('add.subscriber') }}">
                      @csrf
                      <div class="form-group">
                        <span class="icon fa fa-envelope"></span>
                        <input type="email" name="email" value="" placeholder="{{ __("Email Address") }}" required="" />
                        <button type="submit" class="theme-btn flaticon-send"></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End CTA Section -->

      <!-- Main Footer -->
      <footer class="main-footer" style="background-image: url({{ asset('images/background/pattern-2.png') }})">
        <!-- <div
            class="top-pattern-layer"
            style="background-image: url(images/background/pattern-1.png)"
          ></div> -->
        <div class="auto-container">
          <!-- Upper Box -->
          <div class="upper-box">
            <div class="row clearfix">
              <!-- Info Column -->
              <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                  <span class="icon flaticon-call-2"></span>
                  call now<br />
                  <a href="tel:{{ $site_settings->phone }}">{{ $site_settings->phone }}</a>
                </div>
              </div>

              <!-- Info Column -->
              <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                  <span class="icon flaticon-email-2"></span>
                  24*7 online Support<br />
                  <a href="mailto:{{ $site_settings->email }}">{{ $site_settings->email }}</a>
                </div>
              </div>

              <!-- Info Column -->
              <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                  <span class="icon flaticon-maps-and-flags"></span>
                   Address<br />
                  <strong>{!! app()->getLocale() == 'en' ? $site_settings->address_en : $site_settings->address_ar !!}</strong>
                </div>
              </div>
            </div>
          </div>
          <!-- End Upper Box -->

          <!-- Widgets Section -->
          <div class="widgets-section">
            <div class="row clearfix">
              <!-- Footer Column -->
              <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                <div class="footer-widget logo-widget">
                  <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ $site_settings->logo }}" alt="The London" /></a>
                  </div>
                  <div class="white-text">
                    {!! app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($site_settings->about_des , 100 , '....'): \Illuminate\Support\Str::limit($site_settings->about_des_ar,100,'....') !!}

                  </div>
                  <!-- Social Box -->
                  <ul class="social-box">
                    @foreach($social_settings as $s)
                    <li>
                      <a href="{{ $s->value }}" target="_blank" class="fab fa-{{ $s->key }}"></a>
                    </li>
                   @endforeach
                  </ul>
                </div>
              </div>

              <!-- Footer Column -->
              <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                <div class="footer-widget links-widget">
                  <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                      <h3>Company</h3>
                      <ul class="list-links">
                        <li><a href="{{ route('about') }}">About us</a></li>
                       
                        <li><a href="{{ route('services') }}">Services</a></li>
                       
                       
                        <li><a href="{{ route('contact') }}">contact us</a></li>
                      </ul>
                    </div>
                    <!-- Column -->
                   
                  </div>
                </div>
              </div>

              <!-- Footer Column -->
              <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget quote-widget">
                  <h3>Request a Quote</h3>

                  <!-- Quote Form -->
                  <div class="quote-form">
                    <form method="post" action="{{ url('sendMessage') }}">
                      @csrf
                      <div class="clearfix">
                        <div class="form-group">
                          <input type="text" name="name" placeholder="Your Name *" required="" />
                        </div>

                        <div class="form-group">
                          <input type="email" name="email" placeholder="Your Email" required="" />
                        </div>

                        <!--Form Group-->
                        <div class="form-group">
                          <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required="" />
                          </div>
                        </div>

                        <div class="form-group">
                          <textarea type="text" name="message" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="form-group">
                          <button class="theme-btn submit-btn" type="submit" name="submit-form">
                            Submit Now
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="footer-bottom">
            <div class="clearfix">
              <div class="pull-left">
                <div class="copyright">
                  Copyright &copy; 2025. All rights reserved by <br />
                  <span>The London Company.</span>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </footer>
      <!-- End Main Footer -->

      <!-- Calculator Palate  -->
     
      <!-- End Calculator Palate  -->

      <!-- Contact Palate  -->
      
      <!-- End Contact Palate  -->
    </div>
  </div>
  <!-- End pagewrapper -->

  <!-- Scroll To Top -->
  <div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
  </div>

  <script src="{{asset('site/js/jquery.js')}}"></script>
  <script src="{{asset('site/js/popper.min.js')}}"></script>
  <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.fancybox.js')}}"></script>
  <script src="{{asset('site/js/appear.js')}}"></script>
  <script src="{{asset('site/js/parallax.min.js')}}"></script>
  <script src="{{asset('site/js/tilt.jquery.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.paroller.min.js')}}"></script>
  <script src="{{asset('site/js/owl.js')}}"></script>
  <script src="{{asset('site/js/wow.js')}}"></script>
  <script src="{{asset('site/js/nav-tool.js')}}"></script>
  <script src="{{asset('site/js/jquery-ui.js')}}"></script>
  <script src="{{asset('site/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{asset('site/js/script.js')}}"></script>
  <script src="{{asset('site/js/color-settings.js')}}"></script>
</body>


<!-- Mirrored from themeim.com/demo/carsore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 14:04:16 GMT -->
</html>


   