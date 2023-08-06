@extends('frontend.layouts.master')
@section('title') {{ucwords(@$cat_name)}} | Blog @endsection
@section('css')
<style>
.home-one a.active {
    color: #27aae1;
}
</style>
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
                    <li><a href="{{route('blog.frontend')}}">Blog</a></li>
                    <li><span>/</span></li>
                    <li>Category</li>
                </ul>
                <h2>{{ucwords($cat_name)}}</h2>
            </div>
        </div>
    </section>

    <section class="news-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    @include('frontend.pages.blogs.sidebar')
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="news-sideabr__left">
                        <div class="row">
                            @foreach($allPosts as $index=>$post)
                                <div class="col-xl-6 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index+1) * 100 }}ms">
                                    <div class="news-one__single">
                                        <div class="news-one__img">
                                            <img src="{{asset('/images/blog/'.@$post->image) }}" alt="">
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
                                                <li><a href="{{route('blog.single',$post->slug)}}"><i class="far fa-calendar"></i> {{date('j M, Y',strtotime(@$post->created_at))}} </a>
                                                </li>
                                            </ul>
                                            <h3 class="news-one__title"><a href="{{route('blog.single',@$post->slug)}}">{{@$post->title}}</a></h3>
                                            <p class="news-one__text"> {!! ucwords(Str::limit(@$post->description, 80,'...')) !!}</p>
                                            <div class="news-one__read-more">
                                                <a href="{{route('blog.single',$post->slug)}}">Read More <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $allPosts->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
