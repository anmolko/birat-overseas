@extends('frontend.layouts.master')
@section('title') Client Testimonials @endsection
@section('css')
    <style>
        .blog-meta li:not(:last-child) {
            margin-right: 15px;
        }
        .blog-meta li:not(:first-child) {
            padding-left: 15px;
            border-left: 2px solid #0066ff;
        }
        .justify-content{
            text-align: justify;
            font-size: 18px;
        }
    </style>
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
                    <li>Client Feedback</li>
                </ul>
                <h2>Testimonials</h2>
            </div>
        </div>
    </section>

    <section class="testimonial-page">
        <div class="container">
            @if(count($testimonials) > 0)
                <div class="row">
                    @foreach($testimonials as $testimonial)
                        <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{asset('assets/frontend/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{asset('assets/frontend/images/testimonial/testimonial-1-quote.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">{{ucwords($testimonial->name)}}</h3>
                                            <p class="testimonial-one__client-sub-title">{{ucwords($testimonial->position)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__text">{{@$testimonial->description }}</div>
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
                                <h3 class="error-page__sub-title">Testimonials not found!</h3>
                            </div>
                            <p class="error-page__text">Sorry we can't find the any clients feedback currently ! It could have been <br>
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
