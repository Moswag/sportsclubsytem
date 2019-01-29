@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Edit Profile @endsection

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
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
                                 <form method="POST" action="{{url('/updateprofile')}}">
                                 {{csrf_field()}}
                                   @foreach($users as $user)

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ $user->name }}"  name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Surname</label>
                                    <input type="text" name="surname" value="{{ $user->surname }}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Branch</label>
                                    <input type="text" name="branch" value="{{ $user->branch }}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Employee ID</label>
                                    <input type="text" name="employeeid" value="{{ $user->employeeid }}"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="phonenumber">Phonenumber</label>
                                    <input type="number" id="phonenumber" name="phonenumber" value="{{ $user->phonenumber }}"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" placeholder="{{ $user->address }}"  name="address"></textarea>
                                </div>

                                <div class="form-group">
                                        <label for="phonenumber">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option>{{ $user->gender }}</option>
                                            <option>{{ $user->gender=="Male" ? "Female" : "Male"  }}</option>

                                        </select>
                                        
                                    </div>

                               

                               @endforeach


                               

                                <div class="form-group">
                                    <button class="btn btn-success">Update Profile</button>                           
                                    
                                </div>
                           
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