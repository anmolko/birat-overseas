@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>

    .img-wrapper {
          height: 270px;
        object-fit: cover;
      }

    .custom-description img{
        margin: 5px!important;
        padding: 5px;
    }
    </style>

@endsection
@section('content')
    <section class="page-header mb-5">
        <div class="page-header-bg" style="background-image: url( {{ @$page_detail->image ? asset('/images/dynamic_page/'.@$page_detail->image):asset('assets/frontend/images/backgrounds/background_action.jpeg') }})">
        </div>
        <div class="page-header-shape-1">
            <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-1.png') }}" alt="">
        </div>
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
            <section class="about-three mt-5" style="padding: 70px 0 10px;">
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
            <section class="news-details" style="padding: 10px 0 80px;">
                <div class="container">
                    @if($header_descp_elements->heading)
                        <div class="section-title text-center">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">{{@$header_descp_elements->subheading ?? ''}}</p>
                                <div class="section-title-shape-1">
                                    <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">{{@$header_descp_elements->heading}}</h2>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="news-details__left">
                                <div class="news-details__content custom-description">
                                    <div class="news-details__text-1">{!! @$header_descp_elements->description !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "map_and_description")
            <section class="about-four">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-four__right">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">{{@$map_descp->subheading ?? 'Birat Overseas'}} </p>
                                        <div class="section-title-shape-1">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">{{@$map_descp->heading ?? ''}}</h2>
                                </div>
                                <div class="about-four__text-2">{!! ucfirst(@$map_descp->description) !!}</div>
                                @if(@$map_descp->button_link)
                                    <div class="about-four__founder">
                                        <a href="{{@$map_descp->button_link}}" class="thm-btn services-three__get-quote-btn">{{ucwords(@$map_descp->button ?? 'Reach out')}}</a>
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="col-xl-6">
                            @if(@$setting_data->google_map)
                                <div class="about-four__left">
                                    <div class="about-four__img-box wow slideInRight" data-wow-delay="100ms"
                                         data-wow-duration="2500ms">
                                        <iframe src="{{@$setting_data->google_map}}" style="border:0;width: 625px;height: 725px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "small_box_description")
            <section class="feature-four">
                <div class="container">
                    <div class="feature-four__bottom" style="padding: 80px 0 80px;">
                        <div class="row">
                            @for ($i = 1; $i <=@$process_num; $i++)
                                <div class="col-xl-4 col-lg-4">
                                    <div class="feature-four__single">
                                        <div class="feature-four__single-top">
                                            <div class="feature-four__icon">
                                                <span class="{{get_solution_icons($i-1)}}"></span>
                                            </div>
                                            <h4 class="feature-four__title">{{ucwords(@$process_elements[$i-1]->list_header ??'')}}</h4>
                                        </div>
                                        <p class="feature-four__text">{{ucfirst(@$process_elements[$i-1]->list_description)}}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "gallery_section")
            <section class="portfolio" style="padding: 70px 0 80px;">
                <div class="container">
                    @if($heading!==null)
                        <div class="section-title text-center">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">{{ ucfirst($subheading ?? '')}}</p>
                                <div class="section-title-shape-1">
                                    <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">{{ ucfirst(@$heading) }}</h2>
                        </div>
                    @endif
                    @if(count(@$gallery_elements) > 0)
                        <div class="row">
                            @foreach(@$gallery_elements as $gallery_element)
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="portfolio__single">
                                        <div class="portfolio__img">
                                            <img class="{{ @$page_detail->slug=='legal-document' || @$page_detail->slug=='legal-documents' ? '':'img-wrapper' }} lazy" data-src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" alt="">
                                            <div class="portfolio__plus">
                                                <a href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" class="img-popup"><span
                                                        class="icon-plus"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </section>
        @endif

        @if($value == "slider_list")
            <section class="benefits">
                <div class="benefits-bg-2" style="background-image: url({{asset('assets/frontend/images/backgrounds/benefits-bg-2.jpg')}});"></div>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"> {{ucwords(@$slider_list_elements[0]->description)}}</p>
                            <div class="section-title-shape-1">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">{{ucwords(@$slider_list_elements[0]->heading)}}</h2>
                    </div>
                    <div class="row">
                        <div class="thm-owl__carousel owl-theme owl-carousel news-carousel carousel-dot-style"
                             data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 3
                            }
                        }
                    }'>
                        @for ($i = 1; $i <=@$list_3; $i++)

                            <div class="item wow fadeInUp" data-wow-delay="{{ ($index+1) * 100 }}ms">
                                <div class="news-three__single" style="height: 300px;">
                                    <div class="news-three-bg" style="background-image: url({{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }});"></div>
                                    <div class="news-three__content">
                                        <h3 class="news-three__title"><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">
                                                {{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></h3>
                                        <div class="news-three__arrow">
                                            <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"><span class="icon-right-arrow1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endfor

                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($value == "accordion_section_2")
            <section class="faq-one">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">{{ucwords(@$accordian2_elements[0]->subheading ?? 'We always help')}}</p>
                            <div class="section-title-shape-1">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">{{ucwords(@$accordian2_elements[0]->heading ?? '')}}</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="faq-one__single">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    @foreach(@$accordian2_elements as $index=>$accordian2_element)
                                        <div class="accrodion {{$index==0? 'active':''}}">
                                        <div class="accrodion-title">
                                            <h4><span>?</span> {{@$accordian2_element->list_header}}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{{@$accordian2_element->list_description}}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    @endforeach
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
          let selector = $('.custom-description').find('table').length;
          if(selector>0){
              $('.custom-description').find('table').addClass('table table-bordered');
          }
      });
  </script>
@endsection
