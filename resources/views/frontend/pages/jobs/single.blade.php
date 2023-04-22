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
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Job Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('job.list')}}">Jobs</a></li>
                <li>{{ @$singleJob->name }}</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    @include('frontend.pages.jobs.sidebar')
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            @if(@$singleJob->title)
                                <h2 class="sc-mb-25">{{@$singleJob->title}}</h2>
                            @endif
                            <div class="gallery-block" style="margin-bottom: 0px;">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ ($singleJob->image !== null) ? asset('/images/job/'.@$singleJob->image): asset('assets/frontend/images/md_human.png')}}" alt="" />
                                        <!--Overlay Box-->
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <a href="{{ ($singleJob->image !== null) ? asset('/images/job/'.@$singleJob->image): asset('assets/frontend/images/md_human.png')}}" data-fancybox="gallery-images-1" data-caption="" class="link">
                                                        <span class="icon fa fa-search"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <ul class="post-meta clearfix">
                                            <li><span class="icon fa fa-calendar"></span>
                                                {{date('M j, Y',strtotime(@$singleJob->end_date))}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2>{{ ucwords(@$singleJob->name) }}</h2>
                                <div class="row">
                                    @if(@$singleJob->getJobCategories(@$singleJob->category_ids) !== 'N/A')
                                        <div class="col-md-6">
                                            <div class="feature-block-two style-two">
                                                <div class="inner-box">
                                                    <h3><a>Category</a></h3>
                                                    <div class="text">{{ucwords(@$singleJob->getJobCategories($singleJob->category_ids))}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($singleJob->extra_company)
                                        <div class="col-md-6">
                                            <div class="feature-block-two style-two">
                                                <div class="inner-box">
                                                    <h3><a>Company</a></h3>
                                                    <div class="text">{{ucwords(@$singleJob->extra_company)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($singleJob->min_qualification)
                                        <div class="col-md-6">
                                            <div class="feature-block-two style-two">
                                                <div class="inner-box">
                                                    <h3><a>Min. Qualification</a></h3>
                                                    <div class="text">{{ucwords(@$singleJob->min_qualification)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($singleJob->min_qualification)
                                        <div class="col-md-6">
                                            <div class="feature-block-two style-two">
                                                <div class="inner-box">
                                                    <h3><a>Min. Qualification</a></h3>
                                                    <div class="text">{{ucwords(@$singleJob->min_qualification)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($singleJob->required_number)
                                        <div class="col-md-6">
                                            <div class="feature-block-two style-two">
                                                <div class="inner-box">
                                                    <h3><a>Required Number</a></h3>
                                                    <div class="text">{{ucwords(@$singleJob->required_number)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($singleJob->salary)
                                        <div class="col-md-6">
                                            <div class="feature-block-two style-two">
                                                <div class="inner-box">
                                                    <h3><a>Salary</a></h3>
                                                    <div class="text">{{ucwords(@$singleJob->salary)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="text custom-description">
                                    {!! $singleJob->description !!}
                                </div>
                                <div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <ul class="pull-right info-links clearfix">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" onclick='fbShare("{{route('job.single',$singleJob->slug)}}")'></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"  onclick='twitShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-whatsapp" onclick='whatsappShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

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
