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
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/background_action.jpeg')}})">
        </div>
        <div class="page-header-shape-1"><img src="{{asset('assets/frontend/images/shapes/page-header-shape-1.png')}}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Our Teams</li>
                </ul>
                <h2>Team</h2>
            </div>
        </div>
    </section>

    <section class="team-page">
        <div class="container">
            @if(count($teams) > 0)
                <div class="row">
                    @foreach($teams as $index=>$team)
                        <div class="col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="{{($index+1)*100}}ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ ($team->image!==null) ? asset('/images/teams/'.$team->image ):asset('assets/backend/images/users/user-dummy-img.jpg')}}" alt="">
                                </div>
                                @if(!empty(@$team->fb) || !empty(@$team->twitter) || !empty(@$team->linkedin) || !empty(@$team->insta))

                                <ul class="list-unstyled team-one__social">
                                    @if(!empty(@$team->fb))
                                        <li><a href="{{@$team->fb}}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if(!empty(@$team->twitter))
                                        <li><a href="{{@$team->fb}}"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if(!empty(@$team->linkedin))
                                        <li><a href="{{@$team->fb}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                    @if(!empty(@$team->insta))
                                        <li><a href="{{@$team->fb}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                                @endif
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">{{ucfirst(@$team->post)}}</p>
                                <h3 class="team-one__name"><a>{{ucfirst(@$team->name)}}</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
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
                                <h3 class="error-page__sub-title">Teams not found!</h3>
                            </div>
                            <p class="error-page__text">Sorry we can't find the any team members currently ! It could have been <br>
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
