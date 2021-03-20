@extends('layouts.frontend.app')

@section('content')

    @include('frontend.includes.banner')

    <!-- Start Categories  -->
    <div class="category">
        <div class="container-fluid">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="category-item ch-400">
                            <img src="{{asset('img/'.$category->image)}}"/>
                            <a class="btn hvr-hover" href="{{ route('frontend.category.product', $category->id)}}">}</a>
                            <a class="category-name" href="{{ route('frontend.category.product', $category->id)}}">
                                <p>{{$category->name}}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection



