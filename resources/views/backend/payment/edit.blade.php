@extends('layouts.backend.app')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header" >
                    <b>Add Category</b>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.backend.payment_method.update',$payment_method->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Logo Image</label>

                            <div class="row">
                                <div class="col-3">
                                    <input type="file" class="form-control" name="image" id="image"value="{{$payment_method->image}}">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update Logo</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
