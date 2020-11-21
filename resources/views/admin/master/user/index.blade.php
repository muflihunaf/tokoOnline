@extends('template.app')

@section('pageTitle','Master User ')


@section('customCss')
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }} ">
@endsection


@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <div class="table">
                <table class="table table-stripped table-hover table-responsive" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($users as $index => $user)
                                <tr>
                                    <td> {{ $index + $users->firstItem() }} </td>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->username }} </td>
                                    <td> {{ $user->email }} </td>
                                    <td>
                                        @if ($user->is_admin == false)
                                        <span class="label label-primary">User</span>
                                        @else
                                        <span class="label label-success">Admin</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tr>
                    </tbody>
                </table>

                <div class="pull-right">

                    {!! $users->links() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
