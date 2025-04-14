@extends('site.master')
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('site/img//background/3.jpg') }});">
        <div class="container">
            <h1>{{__("News")}}</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Page Info-->
    <section class="page-info">
        <div class="container">
            <div class="flex-box-five">
                <ul class="bread-crumb">
                    <li><a href="{{ url('/') }}">{{__("Home")}}</a></li>
                    <li>{{__("News")}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Info -->

    <section class="sidebar-page sp-two">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $b)
                    <!--New Block One-->
                    <div class="news-block-one col-lg-4 col-md-6 col-sm-6">
                        <figure class="image">
                            <img src="{{ $b->image }}" alt="{{ $b->title }}" style="height:260px;">
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{ route('blog.details', $b->slug) }}"><i class="fa fa-link"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                            <div class="date">{{ \Carbon\Carbon::parse($b->updated_at)->format('d') }}
                                <br>{{ \Carbon\Carbon::parse($b->updated_at)->format('F') }}</div>
                        </figure>
                        <div class="lower-content">
                            <div class="pl-30 pr-30">
                              <h4><a href="{{ route('blog.details',$b->slug) }}">{{ $b->title }}</a></h4>
                                <div class="text">
                                  <p>{!! \Illuminate\Support\Str::limit($b->summary, 100, '...') !!}</p>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                    <!-- end -->
                @endforeach
            </div>
        </div>
    </section>


@stop
