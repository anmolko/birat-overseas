<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <!-- favicons Icons -->
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/frontend/images/favicons/favicon-32x32.png')}}" />--}}
    {{--    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/frontend/images/favicons/favicon-16x16.png')}}" />--}}

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content=" BIRAT OVERSEAS PVT. LTD - leading manpower company">
    <meta name="description"
          content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else BIRAT OVERSEAS PVT. LTD - leading manpower company @endif"/>
    <meta name="keywords"
          content="@if(!empty(@$setting_data->meta_tags)) {{@$setting_data->meta_tags}} @else BIRAT OVERSEAS PVT. LTD - leading manpower company @endif">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="canonical" href="https://biratoverseas.com/"/>

    @if (Request::is('/'))
        <title>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else  BIRAT OVERSEAS
            PVT. LTD - leading manpower company @endif </title>
    @else
        <title>@yield('title')
            | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else  BIRAT OVERSEAS
            PVT. LTD - leading manpower company @endif </title>
    @endif

    <meta property="og:title" content="@if(!empty(@$setting_data->meta_title)) {{ucwords(@$setting_data->meta_title)}} @else   BIRAT OVERSEAS PVT. LTD - leading manpower company @endif" />
    <meta property="og:type" content="Consultancy" />
    <meta property="og:url" content="https://biratoverseas.com/" />
    <meta property="og:site_name" content=" BIRAT OVERSEAS PVT. LTD - leading manpower company" />
    <meta property="og:description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else  BIRAT OVERSEAS PVT. LTD - leading manpower company @endif " />

    <link rel="shortcut icon" type="image/x-icon" href="{{ (@$setting_data->favicon) ? asset('/images/settings/'.@$setting_data->favicon):asset('assets/backend/images/canosoft-favicon.png') }}">



    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/custom-animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jarallax/jarallax.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.pips.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/odometer/odometer.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/swiper/swiper.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/insur-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/insur-two-icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/reey-font/stylesheet.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bxslider/jquery.bxslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap-select/css/bootstrap-select.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/vegas/vegas.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/timepicker/timePicker.css') }}"/>

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="{{ asset('assets/frontend/css/birat.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/birat-responsive.css') }}"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>
    @yield('css')
    @stack('styles')

</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

{{--<div class="preloader">--}}
{{--    <div class="preloader__image"></div>--}}
{{--</div>--}}
<!-- /.preloader -->

<div class="page-wrapper">
    <header class="main-header-three clearfix">
        <div class="main-header__top">
            <div class="container">
                <div class="main-header__top-inner">
                    <div class="main-header__top-address">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="icon-pin"></span>
                                </i>
                                <div class="text">
                                    <p>{{@$setting_data->address ?? ''}}</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="icon-email"></span>
                                </i>
                                <div class="text">
                                    <p><a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-menu-box">
                            <ul class="list-unstyled main-header__top-menu">
                                <li><a href="{{ route('client.frontend') }}">Our clients</a></li>
                                <li><a href="{{ route('album') }}">Album</a></li>
                                <li><a href="{{ route('testimonial') }}">Testimonial</a></li>

                            </ul>
                        </div>
                        <div class="main-header__top-social-box">
                            <div class="main-header__top-social">
                                @if(@$setting_data->facebook)
                                    <a href="{{$setting_data->facebook}}"><i class="fab fa-facebook"></i></a>
                                @endif
                                @if(@$setting_data->instagram)
                                    <a href="{{$setting_data->instagram}}"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if(@$setting_data->youtube)
                                    <a href="{{$setting_data->youtube}}"><i class="fab fa-youtube"></i></a>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <a href="{{$setting_data->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                @endif
                                @if(!empty(@$setting_data->ticktock))
                                    <a href="{{$setting_data->ticktock}}"><i class="fab fa-tiktok"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three clearfix">
            <div class="main-menu-three__wrapper clearfix">
                <div class="container">
                    <div class="main-menu-three__wrapper-inner clearfix">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="/"><img class="home-logo" src="{{asset('/images/settings/'.@$setting_data->logo)}}" alt=""></a>
                            </div>
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li
                                        class="current">
                                        <a href="/">Home</a>
                                    </li>
                                    @if(!empty($top_nav_data))
                                        @foreach($top_nav_data as $nav)
                                            @if(!empty($nav->children[0]))
                                                <li class="dropdown">
                                                    <a href="#">{{ @$nav->name ?? @$nav->title }}</a>
                                                    <ul>
                                                        @foreach($nav->children[0] as $childNav)
                                                        <li class="{{ !empty($childNav->children[0]) ? 'sub-dropdown':''}}">
                                                            <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                                {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                            @if(!empty($childNav->children[0]))
                                                                <ul style="top: 0%; left: 110%">
                                                                    @foreach($childNav->children[0] as $key => $lastchild)
                                                                        <li><a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                                {{ @$lastchild->name ?? @$lastchild->title ?? ''}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{get_menu_url($nav->type, $nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                        {{ @$nav->name ?? @$nav->title ??''}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-three__right">
                            <div class="main-menu-three__search-get-quote-btn">
                                <div class="main-menu-three__search-box">
                                    <a href="#"
                                       class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu-three__get-quote-btn-box">
                                    <a href="{{route('contact')}}" class="thm-btn main-menu-three__get-quote-btn">Get in
                                        Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div>
