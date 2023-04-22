@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection
@section('css')
@endsection


@section('content')

    <section class="page-title" style="background-image: url({{asset('/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Page details</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('page',$singleSlider->section->page->slug)}}">{{ucwords(@$singleSlider->section->page->name)}}</a></li>
                <li>{{ucwords(@$singleSlider->list_header)}}</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    @include('frontend.pages.sliderlist.sidebar')
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <ul class="post-meta clearfix">
                                            <li><span class="icon fa fa-calendar"></span> {{date('j M, Y',strtotime(@$singleSlider->created_at))}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <h2>{{ucwords(@$singleSlider->list_header)}}}</h2>
                                <div class="text">
                                    {!! @$singleSlider->list_description !!}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
