@extends('layouts.backend.app')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12"><br><br><br>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Twitter</th>
                                    <th>Facebook</th>
                                    <th>LinkedIn</th>
                                    <th>Instagram</th>
                                    <th>Youtube</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($social_links as $social_link)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $social_link->twitter }}</td>
                                        <td>{{ $social_link->facebook }}</td>
                                        <td>{{ $social_link->linkedin }}</td>
                                        <td>{{ $social_link->instagram }}</td>
                                        <td>{{ $social_link->youtube }}</td>
                                        <td>
                                            <a href="{{ route('admin.backend.social_link.edit', $social_link->id ) }}" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                </div>

            </div>


        </div>
    </div>
@endsection
