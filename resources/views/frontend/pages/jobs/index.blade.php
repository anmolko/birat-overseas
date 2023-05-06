@extends('frontend.layouts.master')
@section('title') Job List @endsection
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
                    <li>Recent Jobs</li>
                </ul>
                <h2>All Jobs</h2>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="row">
                @foreach($alljobs as $job)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/birat_thumb.png')}}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ ($job->image !== null) ? asset('/images/job/'.@$job->image): asset('assets/frontend/images/birat_thumb.png')}}" class="img-popup"><span
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
        </div>
    </section>


@endsection
@section('js')

@endsection
