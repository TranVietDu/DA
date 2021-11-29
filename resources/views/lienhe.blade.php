@extends('master')

@section('content')
<!-- Page Content -->
<img width="100%" height="550px" src="https://m.economictimes.com/thumb/msid-66780622,width-1200,height-900,resizemode-4,imgsize-178035/part-timejobs-getty.jpg" alt="">
@foreach ($lienhes as $lh)
<div class="find-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h1>GIỚI THIỆU <span style="color:red;">VỀ CHÚNG TÔI</span> !</h1>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="map">
              <h4>Địa chỉ</h4>
            <iframe src="{{ $lh->diachi }}" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="left-content">
            <h4>{{ $lh->tieude }}</h4>
            <p style="text-align:justify">{{ $lh->gioithieu }}</p>
          </div>
            <ul class="social-icons" style="">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>
      </div>
      <div class="row mt-5" style="background-color: rgba(151, 229, 233, 0.363); border: 2px dashed black; padding:20px 5px">
        <div class="col-12">
          <h5><i class="fas fa-eye"></i> <b style="color: darkturquoise;">TẦM NHÌN</b></h5>
          <p>Trở thành 1 trang Web cung cấp các việc làm online hàng đầu và đồng hành cùng tất cả sinh viên ở Việt Nam.
          </p>
          <h5><i class="fas fa-bullseye"></i> <b style="color: rgb(204, 26, 26);">SỨ MỆNH</b></h5>
          <p>Nghiên cứu và phát triển nhiều chức năng trang web để tạo sự thuận tiện và tăng khả năng tương tác của
            người dùng truy cập website.</p>
        </div>
      </div>
    </div>
  </div>
@endforeach

@if (Auth::check())
<div class="send-message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Hãy nói gì đó về trang web của chúng tôi</h2>
          @if (session('thongbao'))
          <div class="alert alert-info" role="alert">
              <p style="color: rgb(7, 7, 7); font-size: 15px">{{session('thongbao')}}</p>
          </div>
         @endif
        </div>
      </div>
      <div class="col-md-9">
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="noidung" rows="6" class="form-control" id="message" placeholder="Nội dung..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Gửi</button>
                </fieldset>
              </div>
            </div>
            {{csrf_field()}}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@endsection
