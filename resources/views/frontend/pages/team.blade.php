@extends('frontend.layouts.master')
@section('title') Team @endsection
@section('css')
    <style>
        .team-member:after{
            height: 340px;
        }
    </style>
@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/5.jpg')}})">
        <div class="auto-container">
            <h1>Our Teams</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </section>

    <section class="team-page-section">
        <div class="auto-container">
            @if(count($teams) > 0)
                <div class="row clearfix">
                    @foreach($teams as $team)
                        <div class="team-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="{{ ($team->image!==null) ? asset('/images/teams/'.$team->image ):asset('assets/backend/images/users/user-dummy-img.jpg')}}" alt="" />
                                    <div class="overlay-box">
                                        @if(!empty(@$team->fb) || !empty(@$team->twitter) || !empty(@$team->linkedin) || !empty(@$team->insta))
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <div class="social-box">
                                                        @if(!empty(@$team->fb))
                                                            <a href="{{@$team->fb}}"><span class="fa-brands fa-facebook"></span></a>
                                                        @endif
                                                        @if(!empty(@$team->twitter))
                                                            <a href="{{$team->twitter}}"><span class="fa-brands fa-twitter"></span></a>
                                                        @endif
                                                        @if(!empty(@$team->linkedin))
                                                            <a href="{{$team->linkedin}}"><span class="fa-brands fa-linkedin"></span></a>
                                                        @endif
                                                        @if(!empty(@$team->insta))
                                                            <a href="{{ $team->insta }}"><span class="fa-brands fa-instagram"></span></a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a>{{ucfirst(@$team->name)}}</a></h3>
                                    <div class="designation">{{ucfirst(@$team->post)}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

@endsection
@section('js')
@endsection
