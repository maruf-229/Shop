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
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($contact_infos as $contact_info)
                            <tr>
                                <td>#</td>
                                <td>{{ $contact_info->address }}</td>
                                <td>{{ $contact_info->phone }}</td>
                                <td>{{ $contact_info->email }}</td>
                                <td>
                                    <a href="{{ route('admin.backend.contact_info.edit', $contact_info->id ) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
