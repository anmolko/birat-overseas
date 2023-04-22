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

    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>News Category</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('blog.frontend')}}">Blog</a></li>
                <li>{{ucwords($cat_name)}}</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="sticky-container row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    @include('frontend.pages.blogs.sidebar')
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        @foreach($allPosts as $post)
                            <div class="news-block-five style-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{route('blog.single',$post->slug)}}"><img src="{{asset('/images/blog/'.@$post->image) }}" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <ul class="post-meta clearfix">
                                                    <li> {{ucfirst(@$post->category->name)}}</li>
                                                    <li><span class="icon fa fa-calendar"></span> {{date('j M, Y',strtotime(@$latest->created_at))}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h2><a href="{{route('blog.single',$post->slug)}}">{{@$post->title}}</a></h2>
                                        <div class="text">
                                            {!! ucwords(Str::limit(@$post->description, 100,'...')) !!}
                                        </div>
                                        <a class="read-more" href="{{route('blog.single',$post->slug)}}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!--Styled Pagination-->
                    <div class="styled-pagination text-center">
                        {{ $allPosts->links('vendor.pagination.default') }}

                    </div>
                    <!--End Styled Pagination-->

                </div>
            </div>
        </div>
    </div>


@endsection
