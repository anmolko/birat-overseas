@extends('frontend.layouts.seo_master')
@section('title') Job List @endsection
@section('css')
@endsection
@section('seo')
    <title>{{ucfirst(@$singleJob->name)}} | {{ucwords(@$setting_data->website_name ?? 'MD Human resource')}}</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleJob->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleJob->meta_tags)}}' />
    <meta property='article:published_time' content='{{@$singleJob->updated_at ?? @$singleJob->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleJob->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleJob->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? 'MD Human resource')}}" />
    <meta property="og:image" content="{{asset('/images/job/'.@$singleJob->image)}}" />
    <meta property="og:image:url" content="{{asset('/images/job/'.@$singleJob->image)}}" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/get-insurance-bg.png')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/shapes/page-header-shape-1.png')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{route('job.list')}}">Jobs</a></li>
                    <li><span>/</span></li>
                    <li>Job Detail</li>
                </ul>
                <h2>{{ @$singleJob->name }}</h2>
            </div>
        </div>
    </section>


    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-details__img">
                        <img src="{{ ($singleJob->image !== null) ? asset('/images/job/'.@$singleJob->image): asset('assets/frontend/images/birat.png')}}" alt="">
                    </div>
                    <div class="insurance-details__age-box">
                        @if(@$singleJob->title)
                            <div class="insurance-details__age-title-box">
                                <h3 class="insurance-details__age-title">{{@$singleJob->title}}</h3>
                            </div>
                        @endif
                        <ul class="insurance-details__age-list list-unstyled">
                            @if($singleJob->min_qualification)
                                <li>
                                    <p>Min Qualification: <span>{{@$singleJob->min_qualification}}</span></p>
                                </li>
                            @endif
                            <li>
                                <p>Expires on: <span>{{date('M j, Y',strtotime(@$singleJob->end_date))}}</span></p>
                            </li>
                            @if($singleJob->formlink && @$singleJob->end_date >= $today)
                                <li>
                                    <p>Apply: <span><a href="{{@$singleJob->formlink}}" target="_blank">Submit response</a></span></p>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <h3 class="portfolio-details__title">{{ ucwords(@$singleJob->name) }}</h3>
                            <div class="portfolio-details__text-1 custom-description">{!! $singleJob->description !!}</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio-details__content-right">
                            <div class="portfolio-details__details-box">
                                <ul class="list-unstyled portfolio-details__details-list">
                                    @if(@$singleJob->extra_company)
                                    <li>
                                        <p class="portfolio-details__client">Company:</p>
                                        <h4 class="portfolio-details__name">{{@$singleJob->extra_company}}</h4>
                                    </li>
                                    @endif
                                    @if(@$singleJob->getJobCategories(@$singleJob->category_ids) !== 'N/A')
                                    <li>
                                        <p class="portfolio-details__client">Category:</p>
                                        <h4 class="portfolio-details__name">{{ucwords(@$singleJob->getJobCategories($singleJob->category_ids))}}</h4>
                                    </li>
                                    @endif
                                    @if($singleJob->required_number)
                                       <li>
                                            <p class="portfolio-details__client">Required Number:</p>
                                            <h4 class="portfolio-details__name">{{@$singleJob->required_number}}</h4>
                                        </li>
                                    @endif
                                    @if($singleJob->salary)
                                       <li>
                                            <p class="portfolio-details__client">Salary:</p>
                                            <h4 class="portfolio-details__name">{{@$singleJob->salary}}</h4>
                                        </li>
                                    @endif
                                    <li>
                                        <div class="portfolio-details__social">

                                            <a href="#"><i class="fab fa-facebook" onclick='fbShare("{{route('job.single',$singleJob->slug)}}")'></i></a>
                                            <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                            <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(count($latestJobs)>0)
    <section class="similar-portfolio">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">More similar jobs</p>
                    <div class="section-title-shape-1">
                        <img src="{{asset('assets/frontend/images/shapes/section-title-shape-1.png')}}" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="{{asset('assets/frontend/images/shapes/section-title-shape-2.png')}}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Our Latest <br> Jobs</h2>
            </div>
            <div class="row">
                @foreach($latestJobs as $index => $latest)
                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ ($latest->image !== null) ? asset('/images/job/thumb/thumb_'.@$latest->image): asset('assets/frontend/images/birat_thumb.png')}}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ ($latest->image !== null) ? asset('/images/job/thumb/thumb_'.@$latest->image): asset('assets/frontend/images/birat_thumb.png')}}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">
                                        @if(@$latest->end_date >= $today)
                                            {{date('M j, Y',strtotime(@$latest->start_date))}} - {{date('M j, Y',strtotime(@$latest->end_date))}}
                                        @else
                                            Expired
                                        @endif
                                    </p>
                                    <h4 class="portfolio__title"><a href="{{route('job.single',@$latest->slug)}}">{{ucfirst(@$latest->name)}}</a>
                                    </h4>
                                </div>
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
    <script>
        function fbShare(url) {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function twitShare(url, title) {
            window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function whatsappShare(url, title) {
            message = title + " " + url;
            window.open("https://api.whatsapp.com/send?text=" + message);
        }
        $( document ).ready(function() {
            let selector = $('.custom-description').find('table').length;
            if(selector>0){
                $('.custom-description').find('table').addClass('table table-bordered');
            }
        });
    </script>
@endsection
