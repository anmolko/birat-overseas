<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer-bg"
         style="background-image: url({{asset('assets/frontend/images/backgrounds/site-footer-bg.png')}});">
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="/"><img class="footer-logo"
                                             src="{{ (@$setting_data->logo_white) ? asset('/images/settings/'.@$setting_data->logo_white): asset('/images/settings/'.@$setting_data->logo) }}"
                                             alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <div class="footer-widget__about-text text-justify">
                                {!! ucfirst(@$setting_data->website_description ?? '') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="footer-widget__contact-list list-unstyled clearfix">
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:{{@$setting_data->email}}">{{@$setting_data->email}}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>{{@$setting_data->address}}</p>
                                </div>
                            </li>
                        </ul>
                        <div class="footer-widget__open-hour">
                            <h3 class="footer-widget__open-hour-title">Follow us</h3>
                            <div class="site-footer__social">
                                @if(@$setting_data->facebook)
                                    <a href="{{@$setting_data->facebook}}"><i class="fab fa-facebook"></i></a>
                                @endif
                                @if(@$setting_data->instagram)
                                    <a href="{{@$setting_data->instagram}}"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if(@$setting_data->youtube)
                                    <a href="{{@$setting_data->youtube}}"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <a href="{{@$setting_data->linkedin}}"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if(!empty(@$setting_data->ticktock))
                                    <a href="{{@$setting_data->ticktock}}"><i class="fab fa-pinterest-p"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    @if($footer_nav_data2!==null)
                        <div class="footer-widget__column footer-widget-three__links clearfix">
                            <h3 class="footer-widget-three__title">{{ $footer_nav_title1 ?? '' }}</h3>
                            <ul class="footer-widget-three__links-list list-unstyled clearfix">
                                @foreach(@$footer_nav_data2 as $nav)
                                    @if(empty(@$nav->children[0]))
                                        <li>
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    @if(@$footer_nav_data1)
                        <div class="footer-widget__column footer-widget-three__contact clearfix">
                            <h3 class="footer-widget-three-contact__title">{{$footer_nav_title1 ?? 'Quick Links'}}</h3>
                            <ul class="footer-widget-three__contact-list list-unstyled clearfix">
                                @foreach(@$footer_nav_data1 as $nav)
                                    @if(empty($nav->children[0]))
                                        <li><a href="{{get_menu_url($nav->type, $nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright {{date("Y")}} by
                            <a href="#">{{@$setting_data->website_name ?? 'BIRAT OVERSEAS PVT. LTD'}}</a>
                            developed by <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image"><img src="{{asset('/images/settings/'.@$setting_data->logo)}}" width="143"
                                                     alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{@$setting_data->phone ?? @$setting_data->mobile ?? ''}}">{{@$setting_data->phone ?? @$setting_data->mobile ?? ''}}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
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
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form method="get" id="searchform" action="{{route('searchJob')}}">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input  type="text"
                    id="s"
                    name="s" placeholder="Search jobs..." oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required/>
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('assets/frontend/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/circleType/jquery.lettering.min.js') }}"></script>
<script src="{{asset('assets/frontend/js/birat.js')}}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
