@extends('layouts.backend.app')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Manage Logo
                </div>
                <div class="card-body">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($logos as $logo)
                            <tr>
                                <td>#</td>
                                <td><img src="{{ asset('img/'.$logo->image) }}" alt="Image" width="50px"> </td>

                                <td>
                                    <a href="{{route('admin.backend.logo.edit' , $logo->id)}}" class="btn btn-success">Edit</a>


                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
