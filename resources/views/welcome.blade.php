@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
@endsection
@section('content')
    @if(count($sliders) > 0)
        <section class="main-slider-three clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 50000000
                    }}'>
                <div class="swiper-wrapper">
                    @foreach(@$sliders as $slider)
                        <div class="swiper-slide">
                        <div class="image-layer-three"
                             style="background-image: url({{ asset('/images/sliders/'.$slider->image) }});"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">{{@$slider->heading}}</h2>
                                        <p class="main-slider-three__text">{{@$slider->subheading}}</p>
                                        @if(@$slider->link)
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{@$slider->link}}" class="thm-btn main-slider-three__btn">{{@$slider->button ?? 'Get Started'}}</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-three__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
    @endif

    @if($homepage_info->mission)
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-mission"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a>Our Mission</a></h3>
                                    <p class="feature-one__text">{{ ucfirst(@$homepage_info->mission) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-insurance-2"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a>Our Vision</a></h3>
                                    <p class="feature-one__text">{{ ucfirst(@$homepage_info->vision) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a>Our Goal</a></h3>
                                    <p class="feature-one__text">{{ ucfirst(@$homepage_info->value) }}</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->welcome_description))
        <section class="about-three mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left">
                            <div class="about-three__img-box wow slideInLeft" data-wow-delay="100ms"
                                 data-wow-duration="2500ms">
                                <div class="about-three__img">
                                    <img class="lazy" data-src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                </div>
                                <div class="about-three__location">
                                    <div class="about-three__location-bg"
                                         style="background-image: url({{asset('assets/frontend/images/shapes/about-three-shape-2.png')}});">
                                    </div>
                                    <div class="about-three__location-text">
                                        Over 10 <br> Years <br> of service
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">{{$homepage_info->welcome_subheading ?? ''}}</p>
                                    <div class="section-title-shape-1">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">{{$homepage_info->welcome_heading ?? ''}}</h2>
                            </div>
                            <div class="about-three__text">
                                {{ ucfirst(@$homepage_info->welcome_description) }}
                            </div>
                            <div class="about-three__bottom">
                                @if(@$homepage_info->welcome_video_link)
                                <div class="main-slider-two__video-link welcome-section-video" style="position: initial;">
                                    <a href="{{@$homepage_info->welcome_video_link}}" class="video-popup">
                                        <div class="main-slider-two__video-icon welcome-section-video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                                @endif
                                 @if(@$homepage_info->welcome_link)
                                    <div class="about-three__btn-box">
                                        <a href="{{@$homepage_info->welcome_link}}" class="thm-btn about-three__btn">{{@$homepage_info->welcome_button??'Learn More'}}</a>
                                    </div>
                                 @endif
                                    <img class="service-image lazy" data-src="{{ (@$homepage_info->what_image1 !== null) ? asset('/images/home/welcome/'.@$homepage_info->what_image1) :''}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($latestJobs) > 1)
        <section class="benefits">
            <div class="benefits-bg-2" style="background-image: url({{asset('assets/frontend/images/backgrounds/benefits-bg-2.jpg')}});"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our current demands</p>
                        <div class="section-title-shape-1">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Latest jobs for<br> everyone</h2>
                </div>

                <div class="row">
                    @foreach($latestJobs as $index=>$job)
                        <div class="col-xl-4 col-lg-4 d-flex align-items-stretch wow fadeInUp" data-wow-delay="{{ ($index+1) * 100 }}ms">
                            <div class="news-three__single">
                                <div class="news-three-bg" style="background-image: url({{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/birat.png')}});"></div>
                                <div class="news-three__client-info">
                                    <div class="news-three__client-content">
                                        <p><i class="far fa-calendar-alt"></i>Apply date</p>
                                        <h5> @if(@$job->end_date >= $today)
                                                {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                            @else
                                                Expired
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                                <div class="news-three__content">
                                    <h3 class="news-three__title"><a href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a></h3>
                                    <div class="news-three__arrow">
                                        <a href="{{route('job.single',@$job->slug)}}"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(count($latestServices) > 0)
        <section class="services-three">
            <div class="container">
                <div class="services-three__inner">
                    <div class="services-three-shape-1">
                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/services-three-shape-1.png')}}" alt="">
                    </div>
                    <div class="row">
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-three__single">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our Categories</p>
                                        <div class="section-title-shape-1">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">Covering all important fields</h2>
                                </div>
                            </div>
                        </div>
                        @foreach(@$latestServices as $index=>$service)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index + 2) * 100 }}ms">
                            <div class="services-three__single">
                                <div class="services-three__img">
                                    <img class="lazy" data-src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                                    <div class="services-three__content">
                                        <h3 class="services-three__title"><a href="{{route('service.single',$service->slug)}}">
                                                {{ucwords(@$service->title)}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="col-xl-6 col-lg-7 col-md-9 wow fadeInUp" data-wow-delay="700ms">
                            <div class="services-three__single">
                                <div class="services-three__get-quote">
                                    <p class="services-three__get-quote-sub-title">Best categories out there</p>
                                    <h3 class="services-three__get-quote-title">You can reach out and get information regarding our categories.</h3>
                                    <a href="{{ route('service.frontend') }}" class="thm-btn services-three__get-quote-btn">View All Categories</a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($legal_data)>0 && count($legal_data['data'])>0)
        <section class="portfolio" style="padding: 0px 0 80px;">
            <div class="container">
{{--                @if($legal_data['heading'] !==null)--}}
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Our showcase
{{--                                {{ ucfirst($legal_data['subheading']  ?? '')}}--}}
                            </p>
                            <div class="section-title-shape-1">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">
{{--                            {{ ucfirst(@$legal_data['heading']) }}--}}
                            Legal documents</h2>
                    </div>
{{--                @endif--}}
                @if(count(@$legal_data['data']) > 0)
                    <div class="row">
                        @foreach(@$legal_data['data'] as $gallery_element)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio__single">
                                    <div class="portfolio__img">
                                        <img  class="lazy" data-src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" alt="">
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

    @if(!empty($homepage_info->core_main_heading))
        <section class="services-one">
        <div class="services-one__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex align-items-stretch">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">{{ucfirst(@$homepage_info->core_main_description)}}</p>
                                    <div class="section-title-shape-1">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">{{ucfirst(@$homepage_info->core_main_heading)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-one__bottom">
            <div class="services-one__container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-agreement"></span>
                                </div>
                                <h2 class="service-one__title">
                                    <a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a></h2>
                                <p class="service-one__text">
                                    {{ucfirst(@$homepage_info->core_description1 ?? '')}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-mission"></span>
                                </div>
                                <h2 class="service-one__title">
                                    <a>{{ucwords(@$homepage_info->core_heading2)}}</a></h2>
                                <p class="service-one__text">{{ucfirst(@$homepage_info->core_description2)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-fire"></span>
                                </div>
                                <h2 class="service-one__title"><a>
                                        {{ucwords(@$homepage_info->core_heading3)}}
                                    </a></h2>
                                <p class="service-one__text">
                                    {{ucfirst(@$homepage_info->core_description3)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-heart-beat"></span>
                                </div>
                                <h2 class="service-one__title"><a>{{ucwords(@$homepage_info->core_heading4)}}</a>
                                </h2>
                                <p class="service-one__text">{{ucfirst(@$homepage_info->core_description4)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <h2 class="service-one__title"><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h2>
                                <p class="service-one__text">{{ucfirst(@$homepage_info->core_description5)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-meeting"></span>
                                </div>
                                <h2 class="service-one__title"><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h2>
                                <p class="service-one__text">{{ucfirst(@$homepage_info->core_description6)}}</p>
                            </div>
                        </div>
                    </div>

                    <!--Services One Single End-->
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(count($clients) > 0)
        <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="brand-one__title">
                        <h2>Trusted by vast pool of clients across the world</h2>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true,"autoplay": {
                        "delay": 1000
                        },
                        "spaceBetween": 200, "slidesPerView": 4, "breakpoints": {
                        "0": {
                            "spaceBetween": 60,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 60,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 60,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 60,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 60,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 55,
                            "slidesPerView": 4
                        }
                    }}'>
                            <div class="swiper-wrapper">
                                @foreach($clients as $client)
                                    <div class="swiper-slide" style="margin-right: 130px">
                                        <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}"><img class="lazy" data-src="{{asset('/images/clients/'.@$client->image)}}" alt=""></a>
                                    </div><!-- /.swiper-slide -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(!empty($homepage_info->action_heading))
        <section class="download">
            <div class="download-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/download-bg.png')}});"></div>
            <div class="download-shape-1 float-bob-y">
                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/download-shape-1.png')}}" alt="">
            </div>
            <div class="download-shape-2 float-bob-x">
                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/download-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-6">
                        <div class="download__left">
                            <p class="download__sub-title">{{@$homepage_info->action_heading2}}</p>
                            <h3 class="download__title">{{@$homepage_info->action_heading}}</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="download__right">
                            <div class="download__img wow slideInRight" data-wow-delay="100ms"
                                 data-wow-duration="2500ms">
                                <div class="download__apps">
                                    <div class="download__app-one">
                                        <a href="{{@$homepage_info->action_link2}}">
                                            <i class="fa fa-play"></i>
                                            <p> <span> Get started </span> <br> {{@$homepage_info->action_link ?? 'Learn more'}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(@$recruitments[0]->heading)
        <section class="process">
            <div class="container">
                <div class="section-title text-center mb-3">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">{{@$recruitments[0]->description ?? 'The Work Flow'}}</p>
                        <div class="section-title-shape-1">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">{{@$recruitments[0]->heading}}</h2>
                </div>
                <div class="process__inner">
                    <div class="process-shape-1">
                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/process-shape-1.png')}}" alt="">
                    </div>
                    @if(count($recruitments)>4)
                        <div class="process-shape-2">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/process-shape-1.png')}}" alt="">
                        </div>
                    @endif
                    <div class="row">
                        @foreach(@$recruitments as $index=>$recruitment)
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="process__single {{get_recruitment_class($index)}}">
                                    <div class="process__icon-box">
                                        <div class="process__icon">
                                            <span class="{{get_recruitment_icons($index)}}"></span>
                                        </div>
                                        <div class="process__count"></div>
                                    </div>
                                    <div class="process__content">
                                        <h3 class="process__title">{{@$recruitment->title}}</h3>
                                        <p class="process__text">{{@$recruitment->icon_description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="process__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="process__contact">
                                <div class="process__input-box">
                                    <input type="text" placeholder="Like our process? Feel free to contact us.">
                                    <a type="submit" href="{{route('contact')}}" class="process__btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->why_heading))
        <section class="about-two mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why choose us</p>
                                    <div class="section-title-shape-1">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">{{@$homepage_info->why_heading}}</h2>
                            </div>
                            <p class="about-two__text">{{ucwords(@$homepage_info->why_description)}}</p>
                            @if(@$homepage_info->why_subheading)
                                <div class="main-slider-two__video-link main-slider-two__video-link-2 welcome-section-video" style="position: initial;">
                                    <a href="{{@$homepage_info->why_subheading}}" class="video-popup">
                                        <div class="main-slider-two__video-icon welcome-section-video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__middle">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img class="lazy" data-src="{{asset('/images/home/welcome/'.@$homepage_info->what_image5)}}" alt="">
                                </div>
                                <div class="about-two__dots float-bob-y">
                                    <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-two-dots.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="about-two__counter">
                            <ul class="list-unstyled about-two__counter-list">
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000"
                                                data-stop="{{@$homepage_info->project_completed ?? '450'}}">00</h3>
                                        </div>
                                        <p class="about-two__counter-text-1">Projects completed</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000"
                                                data-stop="{{@$homepage_info->happy_clients ?? '660'}}">00</h3>
                                        </div>
                                        <p class="about-two__counter-text-1">Happy Customer</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000"
                                                data-stop="{{@$homepage_info->visa_approved ?? '450'}}">00</h3>
                                            <span class="about-two__counter-percent"></span>
                                        </div>
                                        <p class="about-two__counter-text-1">Visa success rates</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000"
                                                data-stop="{{@$homepage_info->success_stories ?? '987'}}">00</h3>
                                            <span class="about-two__counter-percent"></span>
                                        </div>
                                        <p class="about-two__counter-text-1">Success rates</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($director) > 0)
        <section class="testimonial-three">
            <div class="container">
                <div class="testimonial-three__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="testimonial-three__left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Up close</p>
                                        <div class="section-title-shape-1">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">Closely relayed message from our director</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-three__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-three__carousel"
                                 data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                                @foreach($director as $managing)
                                    <div class="item">
                                        <section class="team-details">
                                            <div class="container">
                                                <div class="team-details__top">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="team-details__top-left">
                                                                <div class="team-details__top-img">
                                                                    <img class="lazy" data-src="{{asset('/images/director/'.@$managing->image)}}" alt="">
                                                                    <div class="team-details__big-text">director</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="team-details__top-right">
                                                                <div class="team-details__top-content">
                                                                    <p class="team-details__top-title">{{ucfirst(@$managing->designation)}}</p>
                                                                    <h3 class="team-details__top-name">{{ucfirst(@$managing->heading)}}</h3>
                                                                    <p class="team-details__top-text-2 text-justify">{{@$managing->description}}</p>
                                                                    @if(@$managing->link)
                                                                        <a href="{{ $managing->link }}" class="thm-btn services-three__get-quote-btn">{{ @$managing->button ?? 'Read More' }}</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="cta-one cta-two">
        <div class="container">
            <div class="cta-one__content">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <h3 class="cta-one__title">Get started with us</h3>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__call">
                            <div class="cta-one__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="cta-one__call-number">
                                <a href="tel:{{@$setting_data->phone}}">{{@$setting_data->mobile}}</a>
                                <p>Reach out via call</p>
                            </div>
                        </div>
                        <div class="cta-one__btn-box">
                            <a href="{{route('contact')}}" class="thm-btn cta-one__btn">Send us a Message</a>
                        </div>
                    </div>
                    <div class="cta-one__img">
                        <img class="lazy" data-src="{{asset('assets/frontend/images/resources/cta-one-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($testimonials) > 0)
        <section class="testimonial-three">
            <div class="container">
                <div class="testimonial-three__top testimonials-top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="testimonial-three__left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">testimonials</p>
                                        <div class="section-title-shape-1">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">What our customers are talking about</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-three__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-three__carousel"
                                 data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 2
                                        },
                                        "992": {
                                            "items": 2
                                        },
                                        "1200": {
                                            "items": 3
                                        }
                                    }
                                }'>

                                @foreach($testimonials as $testimonial)
                                    <div class="item">
                                        <div class="testimonial-three__single">
                                            <div class="testimonial-three__client-img-box">
                                                <div class="testimonial-three__client-img">
                                                    <img class="lazy" src="{{asset('/images/testimonial/'.@$testimonial->image)}}" data-src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="">
                                                </div>
                                                <div class="testimonial-three__quote">
                                                    <img src="{{asset('assets/frontend/images/testimonial/testimonial-1-quote.png')}}" alt="">
                                                </div>
                                            </div>
                                            <p class="testimonial-three__text">{{ucfirst($testimonial->description)}}</p>
                                            <div class="testimonial-three__client">
                                                <h4 class="testimonial-three__client-name">{{ucfirst($testimonial->name)}}</h4>
                                                <p class="testimonial-three__client-sub-title">{{ucfirst($testimonial->position)}}</p>
                                            </div>
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


    @if(@$setting_data->grievance_heading)
        <section class="about-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms"
                                 data-wow-duration="2500ms">
                                <iframe src="{{@$setting_data->google_map}}" style="border:0;width: 625px;height: 725px;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Birat Overseas</p>
                                    <div class="section-title-shape-1">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">{{@$setting_data->grievance_heading}}</h2>
                            </div>
                            <p class="about-four__text-2"> {{ ucfirst(@$setting_data->grievance_description) }}</p>
                            <div class="about-four__founder">
                                <a href="{{route('contact')}}" class="thm-btn services-three__get-quote-btn">Reach Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($latestPosts)>0)
        <!--News Three Start-->
        <section class="news-three">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">recent news feed</p>
                        <div class="section-title-shape-1">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Latest news & Articles <br> from the blog</h2>
                </div>
                <div class="row">
                    @foreach(@$latestPosts as $index=>$post)
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index+1) * 100 }}ms">
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img class="lazy" data-src="{{asset('/images/blog/'.@$post->image)}}" alt="">
                                    <div class="news-one__tag">
                                        <p><i class="far fa-folder"></i>{{ucfirst(@$post->category->name)}}</p>
                                    </div>
                                    <div class="news-one__arrow-box">
                                        <a href="{{route('blog.single',$post->slug)}}" class="news-one__arrow">
                                            <span class="icon-right-arrow1"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="{{route('blog.single',$post->slug)}}"><i class="far fa-calendar"></i>{{date('d M Y', strtotime($post->created_at))}} </a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{route('blog.single',$post->slug)}}">T{{ucfirst($post->title)}}</a></h3>
                                    <p class="news-one__text"> {!! elipsis($post->description) !!}</p>
                                    <div class="news-one__read-more">
                                        <a href="{{route('blog.single',$post->slug)}}">Read More <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--News Three End-->
    @endif

    @include('frontend.includes.modal')
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            let popup1 = "{{$setting_data->intro_heading}}";
            let popup2 = "{{$setting_data->intro_subheading}}";

            if(popup1){
                $('#firstmodal').modal('toggle');
            }
            if(popup2){
                $('#firstmodal').on('hidden.bs.modal', function () {
                    $('#secondmodal').modal('toggle');
                });
            }
        });
    </script>
@endsection
