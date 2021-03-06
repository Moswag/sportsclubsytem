@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') View Sports @endsection

@section('bodyCssClass')
<style>
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
</style>

@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')

    <div class="main-content" style="width:1400px; padding-left: 200px">
        @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
    <div class="row">
        @foreach($sports as $sport)
        <br>
        <div class="col-sm-6">
    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="public/images/sports-pictures/{{$sport->image_url}}" width="340" height="260" alt="Card image cap">
        <h2 class="card-title">{{$sport->name}}</h2>
        <div class="card-body">
            <p class="card-text">{{$sport->description}}.</p>
            <a href="{{route('joinsport',['name'=>$sport->name])}}" class="btn btn-primary">Join {{$sport->name}}</a>
        </div>
    </div>
        </div>
        @endforeach
    </div>
    </div>



    @endsection