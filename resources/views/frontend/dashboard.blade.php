@extends('layouts.frontend.app')
@section('content')
    @include('frontend.includes.banner')
    <!-- Brand Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="/img/x/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="/img/x/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="/img/x/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="/img/x/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="/img/x/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="/img/x/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->
    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fab fa-cc-mastercard"></i>
                        <h2>Secure Payment</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-truck"></i>
                        <h2>Worldwide Delivery</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-sync-alt"></i>
                        <h2>90 Days Return</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-comments"></i>
                        <h2>24/7 Support</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->



    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>call us for any queries</h1>
                </div>
                @foreach($contact_infos as $contact_info)
                <div class="col-md-6">
                    <a href="tel:0123456789">{{ $contact_info->phone }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Call to Action End -->


@endsection
