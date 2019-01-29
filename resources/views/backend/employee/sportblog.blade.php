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
                        <div class="panel-heading"><h3><b>Sport Blogs</b></h3></div>
                        <div class="panel-body">
                            @foreach($blogs as $blog)
                            <div class="blog-post">
                                <h2 class="blog-post-title">
                                    <a href="{{route('viewthisblog',['id'=>$blog->id])}}">
                                        {{$blog->title}}
                                    </a>
                                </h2>

                                <h4> {{$blog->body}}</h4>

                                <h6 class="blog-post-meta">
                                    {{$blog->name}} on
                                    {{$blog->created_at->toFormattedDateString()}}</h6>


                            </div><!-- /.blog-post -->
                                <p>-------------------------------------------------------------------------------------------------------------------------------------</p>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection