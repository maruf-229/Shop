@extends('layouts.frontend.app')

@section('content')

    @include('frontend.includes.banner')
    <!-- Start Categories  -->
    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Featured Product</h1>
            </div>
            <div class="row align-items-center product-slider special-list">
                @foreach($products as $product)
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{ $product->title }}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('img/'.$product->image)}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>৳</span>{{ $product->price }}</h3>
                                <a class="btn" href="{{ route('show',$product->id) }}"><i class="fa fa-shopping-cart"></i>Show</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection




