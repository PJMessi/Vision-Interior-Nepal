@extends('layouts.layout')
@section('content')

<!-- Start Banner -->
<div class="banner-outer inner-banner"> <span class="banner-shadow"></span>
    <div class="banner-image contact-banner-image">
      <div class="container">
        <div class="content animated fadeIn">
          <h1 class="animated fadeIn">Contact Us</h1>
          <p class="animated fadeIn">We are just a phone call or email away. Feel free to contact us anytime.</p>
        </div>
      </div>
    </div>
</div>
  <!-- End Banner -->

<!-- Start Breadcrumbs -->
<div class="breadcrumbs_outer">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="{{route('index')}}">Home</a> > </li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumbs -->

  <!-- Start Contact sec -->
  <div class="contact-outer">
    <div class="container">

      <div class="row">

        <div class="col-sm-8 col-xs-12">
          <div class="form-wrapper">
            <h3>Send Us a Message</h3>

            <form name="contactform" id="contactform" method="post" action="{{route('message')}}">
                @csrf

                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="firstName" type="text" placeholder="First Name*" required>
                    </div>

                    <div class="col-sm-6">
                        <input name="lastName" type="text" placeholder="Last Name*" required>
                    </div>
                </div>

                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="email" type="text" placeholder="Email*" required>
                    </div>
                    <div class="col-sm-6">
                        <input name="phone" type="text" placeholder="Phone*" required>
                    </div>
                </div>

                <div class="row input-row">
                    <div class="col-sm-12">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" name="submit" class="btn" value="Submit">
                        <div class="msg"></div><br>
                    </div>
                </div>

            </form>

          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="contact-info clearfix">
                <h3>Contact Information</h3>
                @if($contacts)

                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span> {{$contacts->address}} </span></p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:{{$contacts->phone1}}">{{$contacts->phone1}}</a>
                        @if($contacts->phone2)<a href="tel:{{$contacts->phone2}}">{{$contacts->phone2}}</a>@endif
                    </p>
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:{{$contacts->email1}}">{{$contacts->email1}}</a>
                        @if($contacts->phone2)<a href="mailto:{{$contacts->email2}}">{{$contacts->email2}}</a>@endif
                    </p>
                    <div class="follow-us-outer">
                    <h3>Follow Us</h3>
                    <ul class="follow-us clearfix">
                            @if($contacts->facebook)<li><a href="{{$contacts->facebook}}" target="_blank"><img src="images/fbB.png" alt="Facebook"></a></li>@endif
                            @if($contacts->twitter)<li><a href="{{$contacts->twitter}}" target="_blank"><img src="images/tweeterB.png" alt="Tweeter"></a></li>@endif
                            @if($contacts->pintrest)<li><a href="{{$contacts->pintrest}}" target="_blank"><img src="images/pintrestB.png" alt="pintrest"></a></li>@endif
                            @if($contacts->googlePlus)<li><a href="{{$contacts->googlePlus}}" target="_blank"><img src="images/g-plushB.png" alt="Google plus"></a></li>@endif
                            @if($contacts->linkedIn)<li><a href="{{$contacts->linkedIn}}" target="_blank"><img src="images/instagramB.png" alt="Instagram"></a></li>@endif
                    </ul>
                    </div>
                @else
                    <p>No contact information</p><br>
                @endif
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact sec -->
  <!-- Start Map sec -->

  <div class="map-outer">
        @if($contacts)
            {!!$contacts->map!!}
        @else
            <div class="col-md-4 offset-md-4" style="text-align:center;">
                <br>
                <p>No map information</p><br>
            </div>
        @endif
  </div>
  <!-- End Map sec -->


@endsection
