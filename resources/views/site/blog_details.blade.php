@extends('site.master')
@section('content')

  
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
      <div class="container">
          <h1>{{ $blog->title }}</h1>
      </div>
  </section>
  <!--End Page Title-->

  <!--Page Info-->
  <section class="page-info">
      <div class="container">
          <div class="flex-box-five">
              <ul class="bread-crumb">
                  <li><a href="{{ url('/') }}">{{__("Home")}}</a></li>
                  <li>{{ $blog->title }}</li>
              </ul>
             
          </div>
      </div>
  </section>    
  <!-- End Page Info -->

  <!-- sidebar page -->
  <section class="sidebar-page sp-two">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <!--New Block Two-->
                  <div class="news-block-two">
                      <div class="inner-box">
                          <div class="image">
                              <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
                              <div class="post-date">{{ \Carbon\Carbon::parse($blog->updated_at)->format('d M, Y') }}</div>
                          </div>
                         
                      </div>
                  </div>
                  <!-- end -->
                

                  <div class="text">{!! $blog->des !!}</div>
              
              
                 
                  <!-- end -->
              </div>
              <div class="col-lg-4">
                <aside class="sidebar">
                 
                    <div class="sidebar-widget news-widget">
                        <div class="sidebar-title">
                            <h4>{{__("Recent News")}}</h4>
                        </div>
                @foreach($related as $r)
                        <div class="post">
                            <figure class="post-thumb"><a href="{{ route('blog.details',$r->slug) }}"><img src="{{ $r->image }}" alt="{{ $r->title }}"></a></figure>
                            <div class="text"><a href="{{ route('blog.details',$r->slug) }}">{!! \Illuminate\Support\Str::limit($r->summary, 50, '...') !!}</a></div>
                            <div class="post-info">{{ \Carbon\Carbon::parse($r->updated_at)->format('d M, Y') }} </div>
                        </div>

                @endforeach
                        <!-- end -->
                    </div>
                    {{-- <div class="sidebar-widget tag-widget">
                        <div class="sidebar-title">
                            <h4>Keyword</h4>
                        </div>
                        <a href="#">Ideas</a>
                        <a href="#">Building</a>
                        <a href="#">Energy</a>
                        <a href="#">Chemical</a>
                        <a href="#">Industry</a>
                        <a href="#">Drilling</a>
                    </div> --}}
                    <!-- end -->
                </aside>
            </div>
          </div>
      </div>
  </section>


@stop


