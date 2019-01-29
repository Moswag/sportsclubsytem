@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Sport Blog @endsection

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
                        <div class="panel-heading"><h3><b>Blog</b></h3></div>
                        <div class="panel-body">
    <div class="col-sm-8 blog-main">
        <h1>
            {{$blogs->title}}
        </h1>

        {{$blogs->body}}
        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($blogs->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                          {{$comment->by}} &nbsp; {{$comment->created_at->diffForHumans()}} : &nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>
        {{--add comments section--}}
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="post" action="{{route('comment',['id'=>$blogs->id])}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @include('errors')
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