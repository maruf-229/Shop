@extends('layouts.frontend.app')
@section('content')
    <div class="container">
        @foreach($terms as $term)
            <p>{!! $term->description !!}</p>
        @endforeach
    </div>
@endsection
