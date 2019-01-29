@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Add Supervisor @endsection

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
                        <div class="panel-heading"><h3><b>Add Supervisor</b></h3></div>
                        <div class="panel-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif

                            <form method="POST" action="{{url('createsupervisor')}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Surname</label>
                                    <input type="text" name="surname" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Branch</label>
                                    <input type="text" name="branch" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Employee ID</label>
                                    <input type="text" name="employeeid" required class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" name="email" required class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="phonenumber">Phonenumber</label>
                                    <input type="number" id="phonenumber" required name="phonenumber" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" required name="address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="address">Gender</label>
                                    <label class="radio-inline">
                                        <input type="radio" aria-selected="true" value="Male" name="gender">Male</label>
                                    <label class="radio-inline">
                                        <input type="radio" value="Female" name="gender">Female</label>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" required class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="name">Sport</label>
                                    <select class="form-control" required name="sport">
                                        @foreach($sports as $sport )
                                        <option>{{$sport->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Create</button>
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