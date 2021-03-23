@extends('layouts.backend.app')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Manage Right-Banner
                </div>
                <div class="card-body">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($banner_tos as $banner_to)
                            <tr>
                                <td>#</td>
                                <td><img src="{{ asset('img/'.$banner_to->image) }}" alt="Image" width="50px"> </td>

                                <td>
                                    <a href="{{route('admin.backend.banner_to.edit' , $banner_to->id)}}" class="btn btn-success">Edit</a>


                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
