@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>

    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
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
                    <li>Service List</li>
                </ul>
                <h2>Services</h2>
            </div>
        </div>
    </section>

    <section class="insurance-page-one">
        <div class="services-one__container">
            <div class="row">
                @foreach(@$allservices as $index=>$service)
                      <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index+1)*100}}ms">
                    <div class="services-one__single">
                        <div class="service-one__img">
                            <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                        </div>
                        <div class="service-one__content">
                            <div class="services-one__icon">
                                <span class="icon-fire"></span>
                            </div>
                            <h2 class="service-one__title"><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $allservices->links('vendor.pagination.default') }}
            </div>
        </div>
    </section>
@endsection
