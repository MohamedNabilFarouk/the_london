@extends('site.master')
@section('content')
  <!--Page Title-->
  <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
    <div class="container">
        <h1>{{__("Projects")}}</h1>
    </div>
</section>
<!--End Page Title-->

<!--Page Info-->
<section class="page-info mt-5">
    <div class="container">
        <div class="flex-box-five">
            <ul class="bread-crumb">
                <li><a href="{{ url('/') }}">{{__("Home")}}</a></li>
                <li>{{__("Projects")}}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Info -->


    <!-- project section -->
    <section class="project-section sp-one">
        <div class="container">
       
            <!--Sortable Gallery-->
            <div class="mixitup-gallery">

           

                <div class="filter-list row clearfix">


                    @foreach ($projects as $p)
                    <!-- projects block one -->
                    <div class="projects-block-one mix all col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <img src="{{ asset($p->image) }}" alt="{{ $p->title_field }}" style="height:260px;">
                            <div class="box-content">
                                <a href="{{ route('project.details',$p->slug) }}">
                                     <h4 style="color: #ffc107; margin-top: 100px;">{{ strtoupper($p->title_field) }}</h4>
                                </a>
                                {{-- <ul class="icon">
                                    <li><a href="{{ route('project.details',$p->slug) }}"><i class="fa fa-link"></i> </a> </li>

                                </ul> --}}
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>

            </div>

        </div>
    </section>


@stop
