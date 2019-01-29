@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') My Profile @endsection

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
                        <div class="panel-heading"><h3><b>My Profile</b></h3></div>
                        <div class="panel-body">

                           @foreach($users as $user)
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ $user->name }}" disabled name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Surname</label>
                                    <input type="text" name="surname" value="{{ $user->surname }}" disabled class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Branch</label>
                                    <input type="text" name="branch" value="{{ $user->branch }}" disabled class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Employee ID</label>
                                    <input type="text" name="employeeid" value="{{ $user->employeeid }}" disabled class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" disabled class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="phonenumber">Phonenumber</label>
                                    <input type="text" id="phonenumber" name="phonenumber" value="{{ $user->phonenumber }}" disabled class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" placeholder="{{ $user->address }}" disabled name="address"></textarea>
                                </div>

                                <div class="form-group">
                                        <label for="phonenumber">Gender</label>
                                        <input type="text" id="phonenumber" name="phonenumber" value="{{ $user->gender }}" disabled class="form-control">
                                    </div>

                               

                               @endforeach


                               

                                <div class="form-group">
                                    <a href="{{ url('editprofile') }}" class="btn btn-default">Edit My Profile</a>
                                    
                                </div>
                           

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