@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Add Blog @endsection

@section('bodyCssClass')

@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')
    <div class="main-content" style="width:1200px; padding-left: 100px">
        <div class="container-fluid">
            @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3><b>Add To Blog</b></h3></div>
                        <div class="panel-body">
        <form method="POST" action="{{url('addblog')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title" name="title"  />
                <small id="emailHelp" class="form-text text-muted">We'll never share your name with every sport member.</small>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" placeholder="Body" name="body" rows="5"></textarea>
            </div>
            @include('errors')
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection