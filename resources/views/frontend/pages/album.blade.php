@extends('frontend.layouts.master')
@section('title') Album @endsection
@section('styles')
@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Our Albums</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Album</li>
            </ul>
        </div>
    </section>

    <section class="portfolio-page-section">
        <div class="auto-container">
            @if(count(@$albums) > 0)
                <div class="mixitup-gallery">
                <div class="row clearfix">
                    @foreach($albums as $album)
                        <div class="gallery-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('/images/albums/'.@$album->cover_image)}}" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="{{route('album.gallery',$album->slug)}}" class="link">
                                                    <span class="icon fa fa-link" style="margin-top: 15px;"></span>
                                                </a>
                                                <a href="{{asset('/images/albums/'.@$album->cover_image)}}" data-fancybox="gallery-images-1" data-caption="" class="link">
                                                    <span class="icon fa fa-search" style="margin-top: 15px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{route('album.gallery',$album->slug)}}">{{ucwords(@$album->name)}}</a></h3>
                                    <div class="designation">
                                        Images: ({{count(@$album->gallery)}})
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


