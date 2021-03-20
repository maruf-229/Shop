@extends('layouts.backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header" >
                    <b>Add Category</b>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data" id="categoryForm">
                       @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
