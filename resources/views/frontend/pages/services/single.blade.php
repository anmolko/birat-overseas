@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
		.home-one a.active {
		color: #fc653c !important;
	}

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->title)}} | {{ucwords(@$setting_data->website_name ?? 'MD Human resource')}}   </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleService->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleService->meta_tags)}}' />
    <meta property='article:published_time' content='{{@$singleService->updated_at ?? @$singleService->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleService->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleService->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? 'MD Human resource')}} " />
    <meta property="og:image" content="{{asset('/images/service/'.@$singleService->banner_image)}}" />
    <meta property="og:image:url" content="{{asset('/images/service/'.@$singleService->banner_image)}}" />
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
                    <li><a href="{{route('service.frontend')}}">Service</a></li>
                    <li><span>/</span></li>
                    <li>Service Detail</li>
                </ul>
                <h2>{{ @$singleService->title }}</h2>
            </div>
        </div>
    </section>

    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{asset('/images/service/'.@$singleService->banner_image)}}" alt="">
                        </div>
                        <div class="news-details__content">
                            <ul class="list-unstyled news-details__meta">
                                <li><a><i class="far fa-calendar"></i>  {{date('j M, Y',strtotime(@$singleService->created_at))}} </a>
                                </li>
                            </ul>
                            <h3 class="news-details__title">{{ucwords(@$singleService->title)}}</h3>
                            <div class="news-details__text-1 custom-description">
                                {!! $singleService->description !!}
                            </div>

                        </div>
                        <div class="news-details__bottom">
                            <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-facebook" onclick='fbShare("{{route('service.single',$singleService->slug)}}")'></i></a>
                                <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                                <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    @include('frontend.pages.services.sidebar')
                </div>
            </div>
        </div>
    </section>

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
