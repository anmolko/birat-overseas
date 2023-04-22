@extends('frontend.layouts.master')
@section('title') Client Testimonials @endsection
@section('css')
    <style>
        .blog-meta li:not(:last-child) {
            margin-right: 15px;
        }
        .blog-meta li:not(:first-child) {
            padding-left: 15px;
            border-left: 2px solid #0066ff;
        }
        .justify-content{
            text-align: justify;
            font-size: 18px;
        }
    </style>
@endsection
@section('content')
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Testimonial</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Client Testimonials</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-testimonial-section-three sc-pb-90" style="margin-top: 0px; padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="sc-heading-area sc-mb-35 p-z-idex">
                        <span class="sub-title"><i class="icon-line"></i> Our Testimonials</span>
                        <h2 class="title">Happy Customer Feedback About Our Service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-4">
                        <div class="sc-test-item" style="background: #ffffff;">
                                <div class="sc-testimonial-text">
                                    <a><img src="{{asset('assets/frontend/images/icons/quote.png')}}" alt="Blog" /></a>
                                    <p class="des">
                                        {{@$testimonial->description }}
                                    </p>
                                </div>
                                <div class="sc-auother-text d-flex align-items-center">
                                    <div class="sc-auother-image sc-mr-15">
                                        <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="Icon" />
                                    </div>
                                    <div class="sc-auother-header">
                                        <h5>{{ucwords($testimonial->name)}}</h5>
                                        <span class="sub-title">{{ucwords($testimonial->position)}}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>

            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
