@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Assign Role(s) @endsection

@section('bodyCssClass')


@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')

    <h2>Assign Roles</h2>
    <div class="table-responsive">
        @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Surname</th>
                <th>Employee ID</th>
                <th>User</th>
                <!--<th>Supervisor</th>-->
                <th>Admin</th>
                <th>HR</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>

                    <form method="post" action="{{url('/assign-roles')}}">
                        <td></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->employeeid}} <input type="hidden" name="employeeid" value="{{$user->employeeid}}"> </td>
                        <td> <input type="checkbox"  {{$user->hasRole('user')? 'checked' : '' }} name="role_user"></td>
                        <!--<td> <input type="checkbox"  {{$user->hasRole('supervisor')? 'checked' : '' }} name="role_supervisor"></td>-->
                        <td> <input type="checkbox"  {{$user->hasRole('admin')? 'checked' : '' }} name="role_admin"></td>
                        <td> <input type="checkbox"  {{$user->hasRole('hr')? 'checked' : '' }} name="role_hr"></td>

                        {{csrf_field()}}
                        <td><button type="submit" class="btn btn">AssignRoles</button> </td>
                    </form>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- Custom Theme Scripts -->


@endsection