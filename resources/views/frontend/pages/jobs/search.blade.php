@extends('frontend.layouts.master')
@section('title') Search | Jobs @endsection
@section('css')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/get-insurance-bg.png')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/shapes/page-header-shape-1.png')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{route('job.list')}}">Jobs</a></li>
                    <li><span>/</span></li>
                    <li>Search result for Jobs</li>
                </ul>
                <h2>{{$title}}</h2>
            </div>
        </div>
    </section>

    <section class="news-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    @include('frontend.pages.jobs.sidebar')
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="news-sideabr__left">
                        @if(count($alljobs)>0)
                        <div class="row">
                            @foreach($alljobs as $job)
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="portfolio__single">
                                        <div class="portfolio__img">
                                            <img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/birat_thumb.png')}}" alt="">
                                            <div class="portfolio__plus">
                                                <a href="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/birat_thumb.png')}}" class="img-popup"><span
                                                        class="icon-plus"></span></a>
                                            </div>
                                            <div class="portfolio__content">
                                                <p class="portfolio__sub-title">
                                                    @if(@$job->end_date >= $today)
                                                        {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                                    @else
                                                        Expired
                                                    @endif
                                                </p>
                                                <h4 class="portfolio__title"><a href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $alljobs->links('vendor.pagination.default') }}
                        </div>
                        @else
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="error-page__inner">
                                        <div class="error-page__title-box" style="margin-bottom: 40px;">
                                            <h2 class="error-page__title">404</h2>
                                            <h3 class="error-page__sub-title">job not found!</h3>
                                        </div>
                                        <p class="error-page__text">Sorry we can't find the jobs you are looking for ! It could have been <br>
                                            moved or doesn't exist.</p>
                                        <a href="/" class="thm-btn error-page__btn">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
