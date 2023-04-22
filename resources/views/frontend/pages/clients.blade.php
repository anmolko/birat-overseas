@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('css')
    <style>
        .img-wrapper {
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Our Clients</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Clients</li>
            </ul>
        </div>
    </section>

    <section class="portfolio-page-section">
        <div class="auto-container">
            @if(count(@$clients) > 0)
                <div class="mixitup-gallery">
                    <div class="row clearfix">
                        @foreach($clients as $client)
                            <div class="gallery-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img class="img-wrapper" src="{{asset('/images/clients/'.@$client->image)}}" alt="" />
                                        <!--Overlay Box-->
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <a href="{{asset('/images/clients/'.@$client->image)}}" data-fancybox="gallery-images-1" data-caption="" class="link">
                                                        <span class="icon fa fa-search"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                                {{@$client->name ?? ''}}
                                            </a></h3>
                                        <div class="designation">
                                            {{ get_country($client->country) }}
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
@endsection
