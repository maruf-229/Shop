@extends('layouts.backend.app')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Product
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.product.update',$product->id ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$product->title}}">

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>

                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{$product->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" id="price" value="{{$product->price}}">

                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">

                        </div>



                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
