@extends('layouts.backend.app')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Information
                </div>
                <div class="card-body">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Policies</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($terms as $term)
                            <tr>
                                <td>#</td>
                                <td>{{ $term->description }}</td>
                                <td>
                                    <a href="{{ route('admin.backend.term.edit', $term->id ) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
