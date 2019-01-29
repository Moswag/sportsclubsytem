@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Add role @endsection

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
                        <div class="panel-heading"><h3><b>Add New Role</b></h3></div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif

                            <form method="POST" action="{{ url('/addrole') }}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Role Name</label>
                                    <input type="name" name="name" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="address">Description</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
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