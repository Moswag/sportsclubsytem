@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Change Password @endsection

@section('bodyCssClass')

@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')
    <div class="main-content" style="width:1200px; padding-left: 100px">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3><b>Change My Password</b></h3></div>
                        <div class="panel-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif

                            <form method="POST" action="{{ route('updatepassword') }}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Current Password</label>
                                    <input type="password" name="currentpassword" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">New Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Confirm New Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                                @include('errors')
                            </form>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
    </div>

@endsection