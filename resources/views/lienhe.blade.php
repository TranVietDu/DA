@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Try to take advantage of every opportunity that comes you way.</h4>
            <h2>Về Chúng Tôi</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

@foreach ($lienhes as $lh)
<div class="find-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Địa chỉ của chúng tôi trên Maps</h2>
          </div>
        </div>
        <div class="col-md-8">
<!-- How to change your own map point
  1. Go to Google Maps
  2. Click on your location point
  3. Click "Share" and choose "Embed map" tab
  4. Copy only URL and paste it within the src="" field below
-->
          <div id="map">
            <iframe src="{{ $lh->diachi }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <div class="left-content">
            <h4>{{ $lh->tieude }}</h4>
            <p>{{ $lh->gioithieu }}</p>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach

@endsection
