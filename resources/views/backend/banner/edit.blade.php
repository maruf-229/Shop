@extends('layouts.backend.app')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header" >
                    <b>Add Category</b>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$banner->title}}">

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$banner->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="file" class="form-control" name="image" id="image" value="{{$banner->image}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add category</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
