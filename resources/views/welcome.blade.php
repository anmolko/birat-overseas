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
                                        <img src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
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
                                        <img src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
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
                                        <img src="{{asset('assets/frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
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
                                    <img src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
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
                                        <img src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
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
                                    <img class="service-image" src="{{ (@$homepage_info->what_image1 !== null) ? asset('/images/home/welcome/'.@$homepage_info->what_image1) :''}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($latestServices) > 0)
        <section class="services-three">
            <div class="container">
                <div class="services-three__inner">
                    <div class="services-three-shape-1">
                        <img src="{{asset('assets/frontend/images/shapes/services-three-shape-1.png')}}" alt="">
                    </div>
                    <div class="row">
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-three__single">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our services</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
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
                                    <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
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
                                    <p class="services-three__get-quote-sub-title">Best services out there</p>
                                    <h3 class="services-three__get-quote-title">You can reach out and get information regarding our services.</h3>
                                    <a href="insurance-01.html" class="thm-btn services-three__get-quote-btn">Send us a messgae</a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(!empty($homepage_info->core_main_heading))
        <section class="services-one">
        <div class="services-one__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">{{ucfirst(@$homepage_info->core_main_description)}}</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
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
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 200, "slidesPerView": 4, "breakpoints": {
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
                                        <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}"><img src="{{asset('/images/clients/'.@$client->image)}}" alt=""></a>
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
                <img src="{{asset('assets/frontend/images/shapes/download-shape-1.png')}}" alt="">
            </div>
            <div class="download-shape-2 float-bob-x">
                <img src="{{asset('assets/frontend/images/shapes/download-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="download__left">
                            <p class="download__sub-title">{{@$homepage_info->action_heading2}}</p>
                            <h3 class="download__title">{{@$homepage_info->action_heading}}</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="download__right">
                            <div class="download__img wow slideInRight" data-wow-delay="100ms"
                                 data-wow-duration="2500ms">
                                <div class="download__apps">
                                    <div class="download__app-one">
                                        <a href="{{@$homepage_info->action_link2}}">
                                            <i class="fa fa-play"></i>
                                            <p> <span> Get started </span> <br>
                                                {{@$homepage_info->action_link ?? 'Learn more'}}</p>
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
    <!--Download End-->
    <section class="benefits">
        <div class="benefits-bg" style="background-image: url(assets/images/backgrounds/benefits-bg.png);"></div>
        <div class="benefits-bg-2" style="background-image: url(assets/images/backgrounds/benefits-bg-2.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="benefits__left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">insur benefits</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">We inspire and help our customers</h2>
                        </div>
                        <p class="benefits__text">Pellentesque habitant morbi tristique senectus netus et <br>
                            malesuada fames ac turp egestas. Aliquam viverra arcu. Donec <br> aliquet blandit enim
                            feugiat mattis.</p>
                        <div class="benefits__point-box">
                            <ul class="list-unstyled benefits__point">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Prosper in this volatile</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Prosper in this volatile</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled benefits__point benefits__point-two">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Embaras hidden inse</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Embaras hidden inse</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three Start-->
    <section class="testimonial-three">
        <div class="container">
            <div class="testimonial-three__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-three__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">testimonials</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">What our customers are talking about</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-three__right">
                            <p class="testimonial-three__right-text">Pellentesque habitant morbi tristique senectus
                                netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet
                                blandit enim feugiat mattis.</p>
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
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Smith Vectoria</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Jessica Brown</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Kevin Martin</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Smith Vectoria</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Jessica Brown</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Kevin Martin</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Smith Vectoria</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Jessica Brown</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__client-img-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="assets/images/testimonial/testimonial-3-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-three__star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-three__text">Pellentesque habitant morbi tristique
                                        senectus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec
                                        aliquet blandit enim feugiat mattis.</p>
                                    <div class="testimonial-three__client">
                                        <h4 class="testimonial-three__client-name">Kevin Martin</h4>
                                        <p class="testimonial-three__client-sub-title">director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End-->

    <!--Download Start-->
    <section class="download">
        <div class="download-bg" style="background-image: url(assets/images/backgrounds/download-bg.png);"></div>
        <div class="download-shape-1 float-bob-y">
            <img src="assets/images/shapes/download-shape-1.png" alt="">
        </div>
        <div class="download-shape-2 float-bob-x">
            <img src="assets/images/shapes/download-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="download__left">
                        <p class="download__sub-title">Get our application free now! Protect yourself</p>
                        <h3 class="download__title">Download our application</h3>
                        <div class="download__apps">
                            <div class="download__app-one">
                                <a href="#">
                                    <i class="fa fa-play"></i>
                                    <p> <span>Available on</span> <br> Google Play</p>
                                </a>
                            </div>
                            <div class="download__app-one download__app-one--two">
                                <a href="#">
                                    <i class="fab fa-apple"></i>
                                    <p> <span>get it on</span> <br> Play Store</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="download__right">
                        <div class="download__img wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <img src="assets/images/resources/download-img-1.png" alt="">
                            <div class="download__badge">
                                <img src="assets/images/shapes/download-dadge.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Download End-->

    <!--We Provide Start-->
    <section class="we-provide">
        <div class="we-provide-bg" style="background-image: url(assets/images/backgrounds/we-provide-bg.jpg);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">award winning company</p>
                    <div class="section-title-shape-1">
                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">We provide better insurance <br> for everyone</h2>
            </div>
            <div class="we-provide__tab">
                <div class="we-provide__tab-box tabs-box">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="we-provide__tab-btn-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#values" class="tab-btn"><span>Our Values</span></li>
                                    <li data-tab="#mission" class="tab-btn active-btn"><span>Company Mission</span>
                                    </li>
                                    <li data-tab="#goals" class="tab-btn"><span>Our Goals</span></li>
                                    <li data-tab="#rewards" class="tab-btn"><span>Cash Rewards</span></li>
                                    <li data-tab="#choose" class="tab-btn"><span>Why Choose Insur</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="we-provide__tab-main-content">
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab" id="values">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="assets/images/shapes/we-provide-shape-1.png" alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">Our Values</h3>
                                                <p class="we-provide__tab-main-content-text">Lorem ipsum dolor sit
                                                    amet consectetur adipiscing elit sed do eiusmod tempor
                                                    incididunt labore dolore magna aliqua enim ad minim veniam quis
                                                    nostrud.</p>
                                                <ul class="list-unstyled we-provide__tab-main-content-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Pina & Associates Insurance</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Payment at Contingency</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="assets/images/resources/we-provide-tab-main-content-right-img.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab active-tab" id="mission">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="assets/images/shapes/we-provide-shape-1.png" alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">Company Mission</h3>
                                                <p class="we-provide__tab-main-content-text">Lorem ipsum dolor sit
                                                    amet consectetur adipiscing elit sed do eiusmod tempor
                                                    incididunt labore dolore magna aliqua enim ad minim veniam quis
                                                    nostrud.</p>
                                                <ul class="list-unstyled we-provide__tab-main-content-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Pina & Associates Insurance</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Payment at Contingency</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="assets/images/resources/we-provide-tab-main-content-right-img-2.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="goals">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="assets/images/shapes/we-provide-shape-1.png" alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">Our Goals</h3>
                                                <p class="we-provide__tab-main-content-text">Lorem ipsum dolor sit
                                                    amet consectetur adipiscing elit sed do eiusmod tempor
                                                    incididunt labore dolore magna aliqua enim ad minim veniam quis
                                                    nostrud.</p>
                                                <ul class="list-unstyled we-provide__tab-main-content-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Pina & Associates Insurance</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Payment at Contingency</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="assets/images/resources/we-provide-tab-main-content-right-img-3.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="rewards">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="assets/images/shapes/we-provide-shape-1.png" alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">Cash Rewards</h3>
                                                <p class="we-provide__tab-main-content-text">Lorem ipsum dolor sit
                                                    amet consectetur adipiscing elit sed do eiusmod tempor
                                                    incididunt labore dolore magna aliqua enim ad minim veniam quis
                                                    nostrud.</p>
                                                <ul class="list-unstyled we-provide__tab-main-content-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Pina & Associates Insurance</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Payment at Contingency</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="assets/images/resources/we-provide-tab-main-content-right-img-4.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="choose">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="assets/images/shapes/we-provide-shape-1.png" alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">Why Choose Insur</h3>
                                                <p class="we-provide__tab-main-content-text">Lorem ipsum dolor sit
                                                    amet consectetur adipiscing elit sed do eiusmod tempor
                                                    incididunt labore dolore magna aliqua enim ad minim veniam quis
                                                    nostrud.</p>
                                                <ul class="list-unstyled we-provide__tab-main-content-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Pina & Associates Insurance</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Payment at Contingency</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="assets/images/resources/we-provide-tab-main-content-right-img-5.jpg"
                                                         alt="">
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
        </div>
    </section>
    <!--We Provide End-->

    <!--CTA One Start-->
    <section class="cta-one cta-two">
        <div class="container">
            <div class="cta-one__content">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <h3 class="cta-one__title">Find a local insurance agent</h3>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__call">
                            <div class="cta-one__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="cta-one__call-number">
                                <a href="tel:9200368090">+92 (003) 68-090</a>
                                <p>Call to Our Experts</p>
                            </div>
                        </div>
                        <div class="cta-one__btn-box">
                            <a href="contact.html" class="thm-btn cta-one__btn">Get a Quote</a>
                        </div>
                    </div>
                    <div class="cta-one__img">
                        <img src="assets/images/resources/cta-one-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->

    <!--News Three Start-->
    <section class="news-three">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">recent news feed</p>
                    <div class="section-title-shape-1">
                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Latest news & Articles <br> from the blog</h2>
            </div>
            <div class="row">
                <!--News Three Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-three__single">
                        <div class="news-three-bg" style="background-image: url(assets/images/blog/news-3-1.jpg);">
                        </div>
                        <div class="news-three__client-info">
                            <div class="news-three__client-img">
                                <img src="assets/images/blog/news-two-client-img-1.jpg" alt="">
                            </div>
                            <div class="news-three__client-content">
                                <p><i class="far fa-user-circle"></i>by Admin</p>
                                <h5>15 March, 2022</h5>
                            </div>
                        </div>
                        <div class="news-three__content">
                            <h3 class="news-three__title"><a href="news-details.html">Which allows you to pay down
                                    insurance bills</a></h3>
                            <div class="news-three__arrow">
                                <a href="news-details.html"><span class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Three Single End-->
                <!--News Three Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-three__single">
                        <div class="news-three-bg" style="background-image: url(assets/images/blog/news-3-2.jpg);">
                        </div>
                        <div class="news-three__client-info">
                            <div class="news-three__client-img">
                                <img src="assets/images/blog/news-two-client-img-2.jpg" alt="">
                            </div>
                            <div class="news-three__client-content">
                                <p><i class="far fa-user-circle"></i>by Admin</p>
                                <h5>15 March, 2022</h5>
                            </div>
                        </div>
                        <div class="news-three__content">
                            <h3 class="news-three__title"><a href="news-details.html">Leverage agile frameworks to
                                    provide</a></h3>
                            <div class="news-three__arrow">
                                <a href="news-details.html"><span class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Three Single End-->
                <!--News Three Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-three__single">
                        <div class="news-three-bg" style="background-image: url(assets/images/blog/news-3-3.jpg);">
                        </div>
                        <div class="news-three__client-info">
                            <div class="news-three__client-img">
                                <img src="assets/images/blog/news-two-client-img-3.jpg" alt="">
                            </div>
                            <div class="news-three__client-content">
                                <p><i class="far fa-user-circle"></i>by Admin</p>
                                <h5>15 March, 2022</h5>
                            </div>
                        </div>
                        <div class="news-three__content">
                            <h3 class="news-three__title"><a href="news-details.html">Bring to the table win-win
                                    survival strategis insurance bills</a></h3>
                            <div class="news-three__arrow">
                                <a href="news-details.html"><span class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Three Single End-->
            </div>
        </div>
    </section>
    <!--News Three End-->

@endsection

@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
