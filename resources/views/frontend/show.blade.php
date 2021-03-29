@extends('layouts.frontend.app')

@section('content')

    @include('frontend.includes.banner')
    <div class="categories-shop">
        <div class="container">
            <h1><b>Product</b></h1>
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="{{asset('img/'.$product->image)}}" alt="Image" >

                </div>
                <div class="col-6">
                    <h3><b>Product Title : {{ $product->title }}</b></h3>
                    <h5><b>Product Title : {{ $product->description }}</b></h5>
                    <h4><b>Product Title : {{ $product->price }}</b></h4>
                </div>
            </div>

        </div>
    </div>

@endsection

