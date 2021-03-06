@extends('layouts.backend.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Information
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.backend.contact_info.update',$contact_info->id ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="title" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{$contact_info->address}}">

                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$contact_info->phone}}">

                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$contact_info->email}}">

                        </div>
                        <button type="submit" class="btn btn-primary">Update Information</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
