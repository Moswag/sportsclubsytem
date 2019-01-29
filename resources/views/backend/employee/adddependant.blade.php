@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Add Dependant @endsection

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
                        <div class="panel-heading"><h3><b>Add Dependant</b></h3></div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
                            <form method="POST" action="{{url('dcreate')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" name="name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idnumber">Surname</label>
                                    <input type="text" id="surname" required name="surname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber">Date OF Birth</label>
                                    <input type="date" id="dateofbirth" required name="dateofbirth" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber">Phonenumber(Optional)</label>
                                    <input type="number" id="email" name="phonenumber"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="address">Gender</label>
                                    <label class="radio-inline">
                                        <input type="radio" value="Male" required name="gender">Male</label>
                                    <label class="radio-inline">
                                        <input type="radio" value="Female" required name="gender">Female</label>
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