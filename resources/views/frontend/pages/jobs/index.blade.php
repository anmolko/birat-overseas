@extends('frontend.layouts.master')
@section('title') Job List @endsection
@section('css')
    <style>
        .text-flow {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
@endsection
@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Recent Jobs</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>All Jobs</li>
            </ul>
        </div>
    </section>

    <section class="portfolio-page-section">
        <div class="auto-container">
            <div class="mixitup-gallery">
                <div class="row clearfix">
                    @foreach($alljobs as $job)
                        <div class="gallery-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/md_human.png')}}" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="{{route('job.single',@$job->slug)}}" class="link">
                                                    <span class="icon fa fa-link" style="margin-top: 15px;"></span>
                                                </a>
                                                <a href="{{ ($job->image !== null) ? asset('/images/job/'.@$job->image): asset('assets/frontend/images/md_human.png')}}" data-fancybox="gallery-images-1" data-caption="" class="link">
                                                    <span class="icon fa fa-search" style="margin-top: 15px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a></h3>
                                    <div class="designation">
                                        @if(@$job->end_date >= $today)
                                            {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                        @else
                                            Expired
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="styled-pagination text-center">
                    {{ $alljobs->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </section>


@endsection
@section('js')
    <!-- For Contact Form -->
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/contact-form-script.js')}}"></script>
@endsection
