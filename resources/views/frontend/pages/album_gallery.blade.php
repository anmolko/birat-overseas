@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleAlbum->name)}} | Album @endsection
@section('css')
    <style>
        .img-wrapper {
            height: 270px;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/backgrounds/background_action.jpeg')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{route('album')}}">Albums</a></li>
                    <li><span>/</span></li>
                    <li>Album Gallery</li>
                </ul>
                <h2>{{ucwords(@$singleAlbum->name)}}</h2>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            @if(count(@$singleAlbum->gallery) > 0)
                <div class="row">
                    @foreach($singleAlbum->gallery as $gallery)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img class="img-wrapper" src="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box" style="margin-bottom: 40px;">
                                <h3 class="error-page__sub-title">Gallery Images not found!</h3>
                            </div>
                            <p class="error-page__text">Sorry we can't find the any images in {{ucwords(@$singleAlbum->name)}} album  ! It could have been <br>
                                moved or doesn't exist.</p>
                            <a href="/" class="thm-btn error-page__btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection
@section('js')
@endsection
