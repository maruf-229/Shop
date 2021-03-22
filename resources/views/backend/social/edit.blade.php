@extends('layouts.backend.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Information
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.backend.social_link.update',$social_link->id ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="title" class="form-label">Twiter</label>
                            <input type="text" class="form-control" name="twitter" id="twitter" value="{{$social_link->twitter}}">

                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook" value="{{$social_link->facebook}}">

                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Linked In</label>
                            <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$social_link->linkedin}}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="instagram" id="instagram" value="{{$social_link->instagram}}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">You Tube</label>
                            <input type="text" class="form-control" name="youtube" id="youtube" value="{{$social_link->youtube}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Information</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
