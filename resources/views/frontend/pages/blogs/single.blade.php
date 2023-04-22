@extends('frontend.layouts.seo_master')
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} |  {{ucwords(@$setting_data->website_name ?? 'BIRAT OVERSEAS PVT. LTD - leading manpower company')}}</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='{{ @$singleBlog->updated_at ?? $singleBlog->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? 'BIRAT OVERSEAS PVT. LTD - leading manpower company')}}" />
    <meta property="og:image" content="{{asset('/images/blog/'.@$singleBlog->image)}}" />
    <meta property="og:image:url" content="{{asset('/images/blog/'.@$singleBlog->image)}}" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Blog details</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('blog.frontend')}}">Blog</a></li>
                <li>{{ @$singleBlog->title }}</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    @include('frontend.pages.blogs.sidebar')
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('/images/blog/'.@$singleBlog->image) }}" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <ul class="post-meta clearfix">
                                            <li>{{@$singleBlog->category->name }}</li>
                                            <li><span class="icon fa fa-calendar"></span> {{date('j M, Y',strtotime(@$latest->created_at))}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <h2>{{ ucwords(@$singleBlog->title) }}</h2>
                                <div class="text">
                                    {!! $singleBlog->description !!}
                                </div>
                                <div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <ul class="pull-right info-links clearfix">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")'></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"  onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-whatsapp" onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
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
