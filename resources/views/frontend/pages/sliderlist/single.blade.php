@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection
@section('css')
@endsection

@section('content')

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/shapes/page-header-shape-1.png')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{route('page',$singleSlider->section->page->slug)}}">{{ucwords(@$singleSlider->section->page->name)}}</a></li>
                    <li><span>/</span></li>
                    <li>List Detail</li>
                </ul>
                <h2>{{ucwords(@$singleSlider->list_header)}}</h2>
            </div>
        </div>
    </section>

    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="">
                        </div>
                        <div class="news-details__content">
                            <ul class="list-unstyled news-details__meta">
                                <li><a><i class="far fa-calendar"></i> {{date('j M, Y',strtotime(@$singleSlider->created_at))}} </a>
                                </li>
                            </ul>
                            <h3 class="news-details__title">{{ucwords(@$singleSlider->list_header)}}</h3>
                            <div class="news-details__text-1 custom-description">
                                {!! @$singleSlider->list_description !!}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    @include('frontend.pages.sliderlist.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
