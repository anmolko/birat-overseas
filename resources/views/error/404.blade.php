@extends('frontend.layouts.master')
@section('title')404 - Page Not Found @endsection
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
                    <li>404 error</li>
                </ul>
                <h2>404 error</h2>
            </div>
        </div>
    </section>

    <section class="error-page">
        <div class="error-page-shape-1 float-bob-y"
             style="background-image: url({{asset('assets/frontend/images/shapes/error-page-shape-1.png')}});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <div class="error-page__title-box">
                            <h2 class="error-page__title">404</h2>
                            <h3 class="error-page__sub-title">Page not found!</h3>
                        </div>
                        <p class="error-page__text">Sorry we can't find that page! The page you are looking <br> for
                            was either moved or doesn't exist.</p>
                        <a href="/" class="thm-btn error-page__btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
