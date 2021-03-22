@extends('layouts.frontend.app')
@section('content')
    <div class="container">
        @foreach($privacy_policies as $privacy_policy)
           <p>{{ $privacy_policy->description }}</p>
        @endforeach
    </div>
@endsection
