@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('css')
    <style>
        .img-wrapper {
            height: 110px;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/get-insurance-bg.png')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/backgrounds/background_action.jpeg')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Clients</li>
                </ul>
                <h2>Our Clients</h2>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            @if(count(@$clients) > 0)
                <div class="row">
                    @foreach($clients as $client)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img class="img-wrapper" style="width: 200px;" src="{{asset('/images/clients/'.@$client->image)}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('/images/clients/'.@$client->image)}}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">   {{ get_country($client->country) }}</p>
                                    <h3 class="team-one__name"><a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                            {{@$client->name ?? ''}}</a></h3>
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
                                <h3 class="error-page__sub-title">Clients not found!</h3>
                            </div>
                            <p class="error-page__text">Sorry we can't find the any clients currently ! It could have been <br>
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
