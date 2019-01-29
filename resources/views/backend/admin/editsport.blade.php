@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Edit Sport @endsection

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
                        <div class="panel-heading"><h3><b>Edit Sport</b></h3></div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
@foreach($sports as $sport)
                            <form method="POST" action="{{route('updatesport',['id'=>$sport->id])}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Sport Name</label>
                                    <input type="name" name="name" value="{{$sport->name}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="form-control" required>
                                </div>


                                <div class="form-group">
                                    <label for="address">Description</label>
                                    <textarea class="form-control" id="description" value="{{$sport->description}}" name="description" required></textarea>
                                </div>
@endforeach


                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update</button>
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