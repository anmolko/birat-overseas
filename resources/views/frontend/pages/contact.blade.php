
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
@section('css')
    <style>

</style>
@endsection
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>Contact us</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </section>
    @if(@$setting_data->google_map)
        <div class="map-section">
            <div class="auto-container">
                <!--Map Outer-->
                <div class="map-outer">
                    <!--Map Canvas-->
                    <iframe
                        width="100%"
                        height="600px"
                        src="{{@$setting_data->google_map}}"
                    ></iframe>
                </div>
            </div>
        </div>
    @endif
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Info Column-->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content-box">
                            <h2>Do you want to reach at the next level of Business Success?</h2>
                            <div class="title">Book a Complimentary Consultation by visiting or calling us!</div>
                            <ul class="list-style-three">
                                <li><span class="icon fa fa-map-marker"></span>{{@$setting_data->address}}</li>
                                <li><span class="icon fa fa-phone"></span>{{@$setting_data->phone}}</li>
                                <li><span class="icon fa fa-envelope"></span>{{@$setting_data->email}}</li>
                            </ul>
                            <!--Social Boxed-->
                            <ul class="social-boxed">
                                <ul class="social-icon-one mt-3">
                                    @if(@$setting_data->facebook)
                                        <li><a href="{{@$setting_data->facebook}}"><span class="fa-brands fa-facebook"></span></a></li>
                                    @endif
                                    @if(@$setting_data->youtube)
                                        <li><a href="{{@$setting_data->youtube}}"><span class="fa-brands fa-youtube"></span></a></li>

                                    @endif
                                    @if(@$setting_data->instagram)
                                        <li><a href="{{@$setting_data->instagram}}"><span class="fa-brands fa-instagram"></span></a></li>

                                    @endif
                                    @if(@$setting_data->linkedin)
                                        <li><a href="{{@$setting_data->linkedin}}"><span class="fa-brands fa-linkedin"></span></a></li>
                                    @endif
                                    @if(!empty(@$setting_data->ticktock))
                                        <li><a href="{{@$setting_data->ticktock}}"><span class="fa-brands fa-tiktok"></span></a></li>
                                    @endif
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Form Column-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Send a Message</h2>
                        <div class="title">We are working with different companies around to deliver ideas for their business success.</div>
                        <!-- Contact Form -->
                        <div class="contact-form ">
                            <!--Comment Form-->
                            <form id="contact_form" name="contact" class="" action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="theme-btn message-btn" type="submit" name="submit-form">send message</button>
                                </div>

                            </form>

                        </div>
                        <!--End Comment Form -->
                    </div>
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
