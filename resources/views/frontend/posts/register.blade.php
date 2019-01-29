@extends('frontend.layouts.master')

        @section('header')
            <div class="contact">
                <div class="container">
                    <div class="menu-top">
                        <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <h3>Register For The Sport Club</h3>
                            <label><i class="glyphicon glyphicon-menu-up"></i></label>
                            <img src="images/zbb.jpg" width="70" height="70">
                            <span>We Offer Many Sports</span>
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
        <!---728x90--->
        @include('frontend.posts.incjs')
        @section('content')
                        <div class="contact-top">

                            <div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <h5>Register Form</h5>
                                @if(Session::has('message'))
                                    <div class="alert alert-success">{{Session::get('message')}}</div>
                                @endif
                                @include('errors')
                                <form method="post" action="{{url('/register')}}">
                                    {{csrf_field()}}
                                    <div class="grid-contact">
                                        <div class="col-md-6 contact-grid">
                                            <p class="your-para">Name </p>
                                            <input type="text" name="name" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                        </div>
                                        <div class="col-md-6 contact-grid">
                                            <p class="your-para">Surname</p>
                                            <input type="text" name="surname" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="grid-contact">
                                        <div class="col-md-6 contact-grid">
                                            <p class="your-para">Employee ID </p>
                                            <input type="number" name="employeeid" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                        </div>
                                        <div class="col-md-6 contact-grid">
                                            <p class="your-para">Branch</p>
                                            <input type="number" name="branch" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="grid-contact">
                                        <div class="col-md-6 contact-grid">
                                            <p class="your-para">Email</p>
                                            <input type="email" name="email" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                        </div>
                                        <div class="col-md-6 contact-grid">
                                            <p class="your-para">Phonenumber</p>
                                            <input type="number" name="phonenumber"  pattern="[0-9]{10}" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="grid-contact">
                                        <div class="col-md-6 contact-grid">

                                            <label class="radio-inline">
                                                <input type="radio" value="Male" required name="gender">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Female" required name="gender">Female
                                            </label>
                                        </div>


                                        <div class="clearfix"> </div>
                                    </div>
                                    <p class="your-para msg-para">Address</p>
                                    <textarea cols="77" rows="4" name="address" onfocus="this.value='';" required onblur="if (this.value == '') {this.value = '';}"></textarea>
                                    <div class="send">
                                        <div class="grid-contact">
                                            <div class="col-md-6 contact-grid">
                                            <p class="your-para">Password</p>
                                                <input type="password" name="password" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                            </div>
                                            <div class="col-md-6 contact-grid">
                                                <p class="your-para">Confirm Password</p>
                                                <input type="password" name="password_confirmation" onfocus="this.value='';" required onblur="if (this.value == '') {this.value ='';}">
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <input type="submit" value="Send" >
                                    </div>
                                </form>

                            </div>

                            <div class="clearfix"> </div>
                        </div>
                </div>
            </div>

@endsection