@extends('layouts.frontend.app')

@section('content')



    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <h1><b>Products</b></h1>
            <div class="row">
                <div class="col-6">
                    @php $i =1; @endphp
                    @foreach($product->images as $image)
                        @if($i>0)
                            <img class="img-fluid" src="{{asset('img/'.$image->image)}}" alt="Image" >
                        @endif
                        @php $i--; @endphp
                    @endforeach
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

