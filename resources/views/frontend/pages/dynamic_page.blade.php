@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>

    .img-wrapper {
          height: 270px;
        object-fit: cover;
      }
    </style>

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/shapes/page-header-shape-1.png')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Page</li>
                </ul>
                <h2>{{ucwords(@$page_detail->name)}}</h2>
            </div>
        </div>
    </section>

    @foreach($sections as $key=>$value)

        @if($value == "basic_section")
            <section class="about-three mt-5" style="padding: 70px 0 80px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-three__right">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">{{@$basic_elements->subheading ?? 'Birat overseas'}}</p>
                                        <div class="section-title-shape-1">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">{{ ucfirst(@$basic_elements->heading ?? '')}}</h2>
                                </div>
                                <div class="about-three__text">
                                    {!! ucfirst(@$basic_elements->description) !!}
                                </div>
                                <div class="about-three__bottom">
                                    @if(@$basic_elements->button_link)
                                        <div class="about-three__btn-box" style=" margin-left: 0px;">
                                            <a href="{{@$basic_elements->button_link}}" class="thm-btn about-three__btn">{{@$basic_elements->button ?? 'Learn More'}}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-6">
                            <div class="about-three__left">
                                <div class="about-three__img-box wow slideInRight" data-wow-delay="100ms"
                                     data-wow-duration="2500ms">
                                    <div class="about-three__img">
                                        <img class="lazy" data-src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "call_to_action_1")
            <!--CTA One Start-->
            <section class="cta-one cta-two">
                <div class="container">
                    <div class="cta-one__content">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <h3 class="cta-one__title">{{ucfirst(@$call1_elements->heading)}}</h3>
                            </div>
                            <div class="cta-one__right">
                                <div class="cta-one__btn-box">
                                    <a href="{{@$call1_elements->button_link ?? '/contact-us'}}" class="thm-btn cta-one__btn">{{ucwords(@$call1_elements->button ?? 'Get in touch')}}</a>
                                </div>
                            </div>
                            <div class="cta-one__img">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/resources/cta-one-img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "background_image_section")
            <section class="get-insuracne-two">
                <div class="get-insuracne-two-shape-3 float-bob-x">
                    <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/get-insuracne-two-shape-3.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="get-insuracne-two__left">
                                <div class="get-insuracne-two__shape-box">
                                    <div class="get-insuracne-two-shape-1"
                                         style="background-image: url({{asset('assets/frontend/images/shapes/get-insuracne-two-shape-1.png')}});">
                                    </div>
                                    <div class="get-insuracne-two-shape-2">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/get-insuracne-two-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="get-insuracne-two__img">
                                    <img class="lazy" data-src="{{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="get-insuracne-two__right">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">{{@$bgimage_elements->subheading ?? ''}}</p>
                                        <div class="section-title-shape-1">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">{{@$bgimage_elements->heading ?? ''}}</h2>
                                </div>
                                <div class="get-insuracne-two__tab clearfix">
                                    <div class="get-insuracne-two__tab-box tabs-box clearfix">
                                        <div class="benefits__text"> {{ @$bgimage_elements->description }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "flash_cards")
            <section class="feature-one">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">{{@$flash_elements[0]->subheading ?? ''}}</p>
                            <div class="section-title-shape-1">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">{{@$flash_elements[0]->heading ?? ''}}</h2>
                    </div>
                    <div class="feature-one__inner">
                        <div class="row">
                            @foreach(@$flash_elements as $index=>$flash_element)
                                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="{{ ($index+1)*100 }}ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="{{get_icons($index)}}"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a>{{ucwords(@$flash_element->list_header)}}</a></h3>
                                        <p class="feature-one__text">{{ucfirst(@$flash_element->list_description) }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
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
  <script>
      $( document ).ready(function() {
          let selector = $('.content-section').find('table').length;
          if(selector>0){
              $('.content-section').find('table').addClass('table table-bordered');
          }
      });
  </script>
@endsection
