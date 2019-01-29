@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Add Quote @endsection

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
                        <div class="panel-heading"><h3><b>Add Home Page Quote</b></h3></div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif

                            <form method="POST" action="{{route('quoteadd')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>



                                <div class="form-group">
                                    <label for="address">Body</label>
                                    <textarea class="form-control" id="description" name="body" required></textarea>
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