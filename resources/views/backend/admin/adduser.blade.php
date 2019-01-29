@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Add User @endsection

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
                        <div class="panel-heading"><h3><b>Add New Student</b></h3></div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif

                            <form method="POST" action="{{url('student/create')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idnumber">ID Number</label>
                                    <input type="text" id="idnumber" name="idnumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber">Phonenumber</label>
                                    <input type="number" id="phonenumber" name="phonenumber" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" name="address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Class</label>
                                    <select class="form-control" name="class">
                                        <option>Grade 1</option>
                                        <option>Grade 2</option>
                                        <option>Grade 3</option>
                                        <option>Grade 4</option>
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