@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleAlbum->name)}} | Album @endsection
@section('css')
    <style>

        .img-wrapper {
            height: 270px;
            object-fit: cover;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lightbox.css')}}">

@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Album Gallery</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>{{ucwords(@$singleAlbum->name)}}</li>
            </ul>
        </div>
    </section>

    <section class="portfolio-page-section">
        <div class="auto-container">
            @if(count(@$singleAlbum->gallery) > 0)
                <div class="mixitup-gallery">
                    <div class="row clearfix">
                        @foreach($singleAlbum->gallery as $gallery)
                            <div class="gallery-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img class="img-wrapper" src="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" alt="" />
                                        <!--Overlay Box-->
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <a href="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" data-fancybox="gallery-images-1" data-caption="" class="link">
                                                        <span class="icon fa fa-search" style="margin-top: 15px;"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
