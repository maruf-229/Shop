@extends('layouts.backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Manage Banner
                </div>
                <div class="card-body">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Banner Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($banners as $banner)
                            <tr>
                                <td>#</td>
                                <td>{{ $banner->title }}</td>
                                <td><img src="{{ asset('img/'.$banner->image) }}" alt="Image" width="50px"></td>
                                <td>
                                    <a href="{{route('admin.banner.edit' ,$banner->id)}}" class="btn btn-success">Edit</a>
                                    <a href="#deleteModal{{$banner->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure You want to delete?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">

                                                    <form action="{{  route('admin.banner.destroy',$banner->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Parmanently Delete</button>

                                                    </form>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
