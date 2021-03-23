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
                        @foreach($privacy_policies as $privacy_policy)
                            <tr>
                                <td>#</td>
                                <td>{!! $privacy_policy->description !!}</td>
                                <td>
                                    <a href="{{ route('admin.backend.privacy_policy.edit', $privacy_policy->id ) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
