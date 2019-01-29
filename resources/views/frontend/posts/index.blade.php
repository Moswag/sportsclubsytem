@extends('frontend.layouts.master')

@section('header')
    <div class="contact">
        <div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>ZB Sports Club</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <img src="images/zbb.jpg" width="120" height="120">
                    <span></span>
                </div>
                <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                    @foreach($quotes as $quote)
                        <p>{{$quote->title}} </p>
                        <p>{{$quote->body}}</p>
                    @endforeach
                </div>
                <div class="clearfix"> </div>
            </div>
            <!---728x90--->

            @endsection
@include('frontend.posts.incjs')
@section('content')
    @foreach($sports as $sport)
    <div class="events-bottom">
        <div class="col-md-5 events-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
            <a href=""><img src="public/images/sports-pictures/{{$sport->image_url}}" width="500" height="300" alt="" class="img-responsive"></a>
        </div>
        <div class="col-md-7 events-bottom2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h3>{{$sport->name}}</h3>
            <label><i class="glyphicon glyphicon-menu-up"></i></label>
            <p>{{$sport->description}}
            </p>
            <div class="read-more">
                <a class="link link-yaku" href="{{url('/register')}}">
                    <span>J</span><span>o</span><span>i</span><span>n</span> <span>U</span><span>s</span>
                </a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    @endforeach
        </div>
    </div>
    @endsection
