@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>

    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
@endsection
@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Our Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Service List</li>
            </ul>
        </div>
    </section>

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="sticky-container row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    @include('frontend.pages.services.sidebar')
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        @foreach(@$allservices as $index=>$service)
                            <div class="news-block-five style-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{route('service.single',$service->slug)}}">
                                            <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h2><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h2>
                                        <a class="read-more" href="{{route('service.single',$service->slug)}}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!--Styled Pagination-->
                    <div class="styled-pagination text-center">
                        {{ $allservices->links('vendor.pagination.default') }}

                    </div>
                    <!--End Styled Pagination-->

                </div>
            </div>
        </div>
    </div>
@endsection
