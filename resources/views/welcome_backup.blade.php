@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
@endsection
@section('content')
    @if(count($sliders) > 0)
        <section class="main-slider">

            <div class="main-slider-carousel owl-carousel owl-theme">
                @foreach(@$sliders as $slider)
                    <div class="slide" style="background-image:url({{ asset('/images/sliders/'.$slider->image) }})">
                    <div class="auto-container">
                        <div class="content">
                            <h3>{{@$slider->subheading}}</h3>
                            <h2>{{@$slider->heading}}</h2>
                            @if(@$slider->link)
                                <div class="link-box">
                                    <a href="{{@$slider->link}}" class="theme-btn btn-style-two">{{@$slider->button ?? 'Start Exploring'}}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </section>
    @endif

    @if($homepage_info->mission)
        <section class="services-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!--Services Block-->
                        <div class="services-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3><a> Our Mission </a></h3>
                                <div class="icon-box">
                                    <span class="icon flaticon-analysis"></span>
                                </div>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->mission) }}
                                </div>
                            </div>
                        </div>

                        <!--Services Block-->
                        <div class="services-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <h3><a>Our Vision </a></h3>
                                <div class="icon-box">
                                    <span class="icon flaticon-sports-and-competition"></span>
                                </div>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->vision) }}
                                </div>
                            </div>
                        </div>

                        <!--Services Block-->
                        <div class="services-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <h3><a>Our Value</a></h3>
                                <div class="icon-box">
                                    <span class="icon flaticon-graph"></span>
                                </div>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->value) }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->welcome_description))
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Title Column-->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>{{$homepage_info->welcome_heading ?? ''}}</h2>
                                <div class="title-text">{{$homepage_info->welcome_subheading ?? ''}}</div>
                            </div>
                            <div class="text">
                                {{ ucfirst(@$homepage_info->welcome_description) }}
                            </div>
                            @if(@$homepage_info->welcome_link)
                                <a href="{{@$homepage_info->welcome_link}}" class="theme-btn btn-style-five">{{@$homepage_info->welcome_button??'Learn More'}}</a>
                            @endif
                        </div>
                    </div>

                    <!--Video Column-->
                    <div class="video-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">

                            <!--Video Box-->
                            <div class="video-box">
                                <figure class="image">
                                    <img src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                </figure>
                                @if(@$homepage_info->welcome_video_link)
                                    <a href="{{@$homepage_info->welcome_video_link}}"
                                       class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->action_heading))
        <div class="call-to-action-section">
            <div class="outer-container">
                <div class="clearfix">

                    <div class="left-column clearfix">
                        <div class="image-layer" style="background-image: url({{asset('assets/frontend/images/background/1.jpg')}})"></div>
                        <div class="inner-column">
                            <h2>{{@$homepage_info->action_heading}}</h2>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="inner-column">
                            <a href="{{@$homepage_info->action_link2}}" class="theme-btn btn-style-four">
                                {{@$homepage_info->action_link ?? 'Learn more'}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->core_main_heading))
        <section class="planning-section">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
                    <div class="title-text">{{ucfirst(@$homepage_info->core_main_description)}}</div>
                    <h2>{{ucfirst(@$homepage_info->core_main_heading)}}</h2>
                </div>

                <div class="row clearfix">
                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-handshake"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description1 ?? '')}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-path"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading2)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description2)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-analysis"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading3)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description3)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-analytics"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading4)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description4)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-worker"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description5)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-value"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description6)}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    @endif

    @if(!empty($homepage_info->why_heading))
        <section class="expert-section pt-5" style="padding-bottom: 50px">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>
                <?php
                $split = explode(" ", @$homepage_info->why_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->why_heading)."\n"}}
                <br/> {{$split[count($split)-1]}} </span></h2>
            </div>
            <div class="row clearfix">

                <!--Counter Column-->
                <div class="counter-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">{{ucwords(@$homepage_info->why_description)}}</div>
                        <div class="fact-counter">
                            <div class="row clearfix">

                                <!--Column-->
                                <div class="column counter-column col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="count-outer count-box alternate">
                                                <span class="count-text" data-speed="2500" data-stop="{{@$homepage_info->happy_clients ?? '660'}}">{{@$homepage_info->happy_clients ?? '660'}}</span>+
                                            </div>
                                            <h4 class="counter-title">Happy Customer</h4>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="count-outer count-box alternate">
                                                <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->project_completed ?? '450'}}">{{@$homepage_info->project_completed ?? '450'}}</span>+
                                            </div>
                                            <h4 class="counter-title">Complete Project</h4>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->visa_approved ?? '340'}}">{{@$homepage_info->visa_approved ?? '340'}}</span>+
                                            </div>
                                            <h4 class="counter-title">Visa Approved</h4>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->success_stories ?? '987'}}">{{@$homepage_info->success_stories ?? '987'}}</span>+
                                            </div>
                                            <h4 class="counter-title">Success Stories</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Blocks Column-->
                <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <figure class="image">
                            <img src="{{asset('/images/home/welcome/'.@$homepage_info->what_image5)}}" alt="">
                        </figure>
                        @if(@$homepage_info->why_subheading)
                            <a href="{{@$homepage_info->why_subheading}}"
                               class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif

    @if(count($latestServices) > 0)
        <section class="case-section" style="padding-bottom: 20px">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title-text">What we provide</div>
                <h2>Our Best Services</h2>
            </div>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme">

            @foreach(@$latestServices as $index=>$service)
                <div class="case-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="text"></div>
                                    <a href="{{route('service.single',$service->slug)}}" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <div class="category">BIRAT OVERSEAS PVT. LTD</div>
                        <h3><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    @endif

    @if(@$recruitments[0]->heading)
        <section class="featured-section-two" style="background-color: #f9f8fc;">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title-text">{{@$recruitments[0]->description ?? 'The Work Flow'}}</div>
                <h2>{{@$recruitments[0]->heading}}</h2>
            </div>
            <div class="row clearfix">
                @foreach(@$recruitments as $index=>$recruitment)
                    <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="{{ ($index * 250 ) }}ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span>{{$index+1}}</span>
                            </div>
                            <h3><a>{{@$recruitment->title}}</a></h3>
                            <div class="text">
                                {{@$recruitment->icon_description}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    @if(count($director) > 0)
        <section class="help-section director-swiper-slider">
            <div class="auto-container swiper-wrapper">
                @foreach($director as $managing)
                    <div class="inner-container clearfix swiper-slide">

                        <div class="content-column">
                            <div class="inner-column">
                                <div class="content">
                                    <div class="sec-title">
                                        <h2>{{ucfirst(@$managing->heading)}}</h2>
                                        <div class="title-text">{{ucfirst(@$managing->designation)}}</div>
                                    </div>
                                    <div class="text">
                                        {{@$managing->description}}
                                    </div>
                                    <a class="risk"><span class="fa fa-angle-right"></span> Message from Director </a>
                                </div>
                            </div>
                        </div>

                        <div class="image-column-2" style="background-image: url({{asset('/images/director/'.@$managing->image)}})">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('/images/director/'.@$managing->image)}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </section>
    @endif

    @if(count($clients) > 0)
        <section class="expert-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title-text">MD resource</div>
                <h2>Our Valuable Clients</h2>
            </div>
            <div class="row clearfix client-column">
                <div class="experts-carousel owl-carousel owl-theme">
                    @foreach($clients as $client)
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('/images/clients/'.@$client->image)}}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">{{$client->name ?? ''}}</a></h3>
                                    <div class="designation">{{ get_country($client->country) ?? ''}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(count($latestJobs) > 1)
        <section class="news-section-three">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
                    <h2> Our Latest Job </h2>
                    <div class="title-text">View & Apply for suitable one</div>
                </div>
                <div class="row clearfix">
                    @foreach($latestJobs as $index=>$job)
                        <!--News Block Three-->
                        <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="{{route('job.single',@$job->slug)}}"><img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li>
                                            @if(@$job->end_date >= $today)
                                                {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                            @else
                                                Expired
                                            @endif
                                        </li>
                                    </ul>
                                    <h3><a href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a></h3>
{{--                                    <a class="read-more" href="{{route('job.single',@$job->slug)}}"><span class="fa fa-angle-right"></span> More Details</a>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(count($testimonials) > 0)

        <section class="testimonial-section pt-5">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Clients Sayings</h2>
                    <div class="title-text">Happy Customer Feedback About Our Process</div>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme">
                    @foreach($testimonials as $testimonial)
                        <!--Testimonial Block Two-->
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <!--Content Column-->
                                    <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                        <div class="inner-column">
                                            <div class="text">{{ucfirst($testimonial->description)}}</div>
                                            <div class="author">{{ucfirst($testimonial->name)}} - {{ucfirst($testimonial->position)}}</div>
                                        </div>
                                    </div>
                                    <!--Image Column-->
                                    <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                        <div class="inner-column">
                                            <div class="image">
                                                <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    @endif

    @if(@$setting_data->grievance_heading)
        <section class="fluid-section-two">
            <div class="outer-container clearfix">

                <!--Image Column-->
                <div class="image-column" style="">
                    <iframe src="{{@$setting_data->google_map}}" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!--Content Column-->
                <div class="content-column">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title light" style="margin-bottom: 25px;">
                            <div class="title-text">MD Human Resource</div>
                            <h2>{{@$setting_data->grievance_heading}}</h2>
                        </div>

                        <!-- Support Form -->
                        <div class="support-form light-description mb-3">
                            {{ ucfirst(@$setting_data->grievance_description) }}
                        </div>
                        <a href="{{route('contact')}}" class="theme-btn btn-style-five mt-2">Reach Out</a>
                    </div>
                </div>

            </div>
        </section>
    @endif

    @if(count($latestPosts) > 0)
        <section class="news-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Latest zemen News</h2>
                <div class="title-text">Automate & Simplify The Whole Process</div>
            </div>
            <div class="row clearfix">
                @foreach(@$latestPosts as $post)
                    <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{route('blog.single',$post->slug)}}"><img src="{{asset('/images/blog/'.@$post->image)}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li>{{date('d M Y', strtotime($post->created_at))}}</li>
                                <li>{{ucfirst(@$post->category->name)}}</li>
                            </ul>
                            <h3><a href="{{route('blog.single',$post->slug)}}">{{ucfirst($post->title)}}</a></h3>
                            <div class="text">
                                {!! elipsis($post->description) !!}
                            </div>
                            <a class="read-more" href="{{route('blog.single',$post->slug)}}"><span class="fa fa-angle-right"></span> Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection

@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
