@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>

    .img-wrapper {
          height: 270px;
        object-fit: cover;
      }
    </style>
  <link rel="stylesheet" href="{{asset('assets/frontend/css/lightbox.css')}}">

@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Page</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>{{ucwords(@$page_detail->name)}}</li>
            </ul>
        </div>
    </section>
    @foreach($sections as $key=>$value)

        @if($value == "basic_section")

            <section class="help-section dynamic-help">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="content">
                                    <div class="sec-title" style="margin-bottom: 20px;">
                                        <div class="title-text">{{$basic_elements->subheading??'BIRAT OVERSEAS PVT. LTD - leading manpower company'}}</div>
                                        <h2>{{$basic_elements->heading ?? ''}}</h2>
                                    </div>
                                    <div class="text dynamic-text" style="font-size: 16px;">
                                        {!! @$basic_elements->description !!}
                                    </div>
                                    @if(@$basic_elements->button_link)
                                        <a class="risk" href="{{@$basic_elements->button_link}}">
                                            <span class="fa fa-angle-right"></span>
                                            {{ucwords(@$basic_elements->button ?? 'Discover More')}}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--Image Column-->
                        <div class="image-column" style="background-image: url({{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }})">
                            <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "call_to_action_1")
            <section class="call-to-action-two" style="background-image: url({{asset('assets/frontend/images/background/3.jpg')}})">
                <div class="auto-container">
                    <h2>{{ucfirst(@$call1_elements->heading)}}</h2>
                    <div class="text">{{ucfirst(@$call1_elements->subheading)}} </div>
                    <a href="{{@$call1_elements->button_link ?? '/contact-us'}}" class="theme-btn btn-style-five">{{ucwords(@$call1_elements->button ?? 'Get in touch')}}</a>
                </div>
            </section>
        @endif

        @if($value == "background_image_section")
            <section class="task-section">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Image Column-->
                        <div class="image-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}}" alt="" />
                                </div>
                            </div>
                        </div>

                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">{{@$bgimage_elements->subheading ?? ''}}</div>
                                <h2>{{@$bgimage_elements->heading ?? ''}}</h2>

                                <!--Featured Block Two-->
                                <div class="feature-block-two alternate">
                                    <div class="inner-box custom-box">
                                        <div class="text">
                                            {{ @$bgimage_elements->description }} </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif

        @if($value == "flash_cards")
            <section class="planning-section">
                <div class="auto-container">
                    <!--Sec Title-->
                    <div class="sec-title centered">
                        <div class="title-text">{{$flash_elements[0]->subheading}}</div>
                        <h2>{{@$flash_elements[0]->heading}}</h2>
                    </div>

                    <div class="row clearfix">
                        @foreach(@$flash_elements as $index=>$flash_element)
                            <div class="services-block alternate col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <h3><a>{{ucwords(@$flash_element->list_header)}}</a></h3>
                                    <div class="icon-box">
                                        <span class="icon {{get_icons($index)}}"></span>
                                    </div>
                                    <div class="text">
                                        {{ucfirst(@$flash_element->list_description) }}
                                    </div>
                                    <div class="more-link"><a class="read-more"><span class="arrow fa fa-angle-right"></span> BIRAT OVERSEAS PVT. LTD - leading manpower company </a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        @endif

        @if($value == "simple_header_and_description")
            <div class="page-container header-description ">
                <div class="container">
                    @if($header_descp_elements->heading)
                        <div class="sec-title centered mt-5" style="margin-bottom: 25px;">
                            <div class="title-text">{{@$header_descp_elements->subheading ?? ''}}</div>
                            <h2>{{@$header_descp_elements->heading}}</h2>
                        </div>
                    @endif
                    <div class="row clearfix content-section">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="text">
                                {!! @$header_descp_elements->description !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif

        @if($value == "map_and_description")
            <section class="fluid-section-two">
                <div class="outer-container clearfix">

                    @if(@$setting_data->google_map)
                        <!--Image Column-->
                        <div class="image-column" style="">
                            <iframe src="{{@$setting_data->google_map}}" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    @endif

                    <!--Content Column-->
                    <div class="content-column">
                        <div class="inner-column">
                            <!--Sec Title-->
                            <div class="sec-title light" style="margin-bottom: 25px;">
                                <div class="title-text">BIRAT OVERSEAS PVT. LTD</div>
                                <h2>{{@$map_descp->heading}}</h2>
                            </div>

                            <!-- Support Form -->
                            <div class="support-form light-description mb-3">
                                {!! ucfirst(@$map_descp->description) !!}
                            </div>
                            @if(@$map_descp->button_link)
                                <a href="{{@$map_descp->button_link}}" class="theme-btn btn-style-five mt-2">{{ucwords(@$map_descp->button ?? 'Reach out')}}</a>
                            @endif
                        </div>
                    </div>

                </div>
            </section>
        @endif

        @if($value == "small_box_description")
            <section class="services-section-three">
                <div class="auto-container">
                    <div class="sec-title centered mt-5" style="margin-bottom: 25px;">
                        <div class="title-text"> {{ ucfirst($process_elements[0]->subheading ?? 'Advance Solutions')}}</div>
                        <h2>{{@$process_elements[0]->heading}}</h2>
                    </div>


                    <div class="row clearfix">
                    @for ($i = 1; $i <=@$process_num; $i++)
                        <div class="feature-block alternate col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon {{get_solution_icons($i-1)}}"></span>
                                </div>
                                <h3><a>{{ucwords(@$process_elements[$i-1]->list_header ??'')}}</a></h3>
                                <div class="text"> {{ucfirst(@$process_elements[$i-1]->list_description)}}</div>
                            </div>
                        </div>
                    @endfor

                    </div>
                </div>
            </section>
        @endif

        @if($value == "gallery_section")
            <section class="portfolio-page-section">
                <div class="auto-container">
                    @if($heading!==null)
                        <div class="sec-title centered" style="margin-bottom: 25px;">
                            <div class="title-text">{{$subheading ?? ''}}</div>
                            <h2>{{@$heading}}</h2>
                        </div>
                    @endif
                    @if(count(@$gallery_elements) > 0)
                        <div class="mixitup-gallery">
                            <div class="row clearfix">
                                @foreach(@$gallery_elements as $gallery_element)
                                    <div class="gallery-block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img class="img-wrapper" src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="content">
                                                            <a href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" data-fancybox="gallery-images-1" data-caption="" class="link">
                                                                <span class="icon fa fa-search" style="margin-top: 15px;"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        @endif

        @if($value == "slider_list")
            <section class="stories-section" style="background-image: url({{asset('assets/frontend/images/background/4.jpg')}})">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Title Column-->
                        <div class="title-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="sec-title light">
                                    <h2>{{ucwords(@$slider_list_elements[0]->heading)}}</h2>
                                </div>
                                <div class="text">
                                    {{ucwords(@$slider_list_elements[0]->description)}}
                                </div>
                            </div>
                        </div>

                        <!--Blocks Column-->
                        <div class="blocks-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="two-item-carousel owl-carousel owl-theme">

                                    @for ($i = 1; $i <=@$list_3; $i++)
                                        <div class="story-block">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"><img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }}" alt="" /></a>
                                                </div>
                                                <div class="lower-content">
                                                    <h3><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"> {{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></h3>
                                                    <a class="read-more" href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">
                                                        <span class="fa fa-angle-right"></span> Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif

    @endforeach


@endsection
@section('js')
  <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
  <script>
      $( document ).ready(function() {
          let selector = $('.content-section').find('table').length;
          if(selector>0){
              $('.content-section').find('table').addClass('table table-bordered');
          }
      });
  </script>
@endsection
