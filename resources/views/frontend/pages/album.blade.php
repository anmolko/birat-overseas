@extends('frontend.layouts.master')
@section('title') Album @endsection
@section('styles')
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/background_action.jpeg')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/shapes/page-header-shape-1.png')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Our album</li>
                </ul>
                <h2>Album</h2>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            @if(count(@$albums) > 0)
                <div class="row">
                    @foreach($albums as $album)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{asset('/images/albums/'.@$album->cover_image)}}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{asset('/images/albums/'.@$album->cover_image)}}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Images: ({{count(@$album->gallery)}})</p>
                                <h3 class="team-one__name"><a href="{{route('album.gallery',$album->slug)}}">{{ucwords(@$album->name)}}</a></h3>
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
                                <h3 class="error-page__sub-title">Albums not found!</h3>
                            </div>
                            <p class="error-page__text">Sorry we can't find the albums you are looking for ! It could have been <br>
                                moved or doesn't exist.</p>
                            <a href="/" class="thm-btn error-page__btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection


