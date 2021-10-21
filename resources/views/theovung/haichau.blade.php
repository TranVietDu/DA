@extends('master')

@section('content')
     <!-- content -->
  <div class="container-fluid content mt-5">
    <div class="container">
      <div class="row" style="margin-top: 160px;">
        <div class="col-md-12 top">
          <h4>Tất cả các công việc khu vực Hải Châu</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=15t2JF7PMXvVUMI9gP8WjYpaHI8VFvh3L" width="100%"
            height="600px" class="bando"></iframe>
        </div>
        <div class="col-md-3">
          <form class="form">
            <img src="assets/icons/iconfinder_email-letter-inbox-send_2203552.png" alt=""
              style="height: 40px; margin-left: auto; margin-right: auto; display: block;">
            <h5 style="text-align: justify;"> Để lại Email để nhận các công việc mới nhất từ chúng tôi.</h5>
            <div class="emailBox">
              <label for="emailAddress">Hàng trăm người đã có việc làm khi để lại Email tại đây!</label><br>
              <input id="emailAddress" type="email" maxLength="100" required placeholder="username@gmail.com"
                pattern=".+@gmail.com" title="Vui lòng nhập địa chỉ Email của bạn vào đây!" class="input">
            </div>
            <input type="submit" value="Gửi" class="submit">
          </form>
          <form class="form">
            <h5><b>Tìm kiếm gần đây</b> </h5>
            <a href="#">Part Time - Đà Nẵng</a><br>
            <a href="#">Sinh viên làm thêm Đà Nẵng</a><br>
            <a href="#">Nhân viên phục vụ Đà Nẵng</a><br>
            <a href="#">Nhân viên bán hàng Đà Nẵng</a><br>
          </form>
        </div>
      </div>
      <h3 style="margin-top: 30px;">Việc làm vừa mới cập nhật</h3>
      <!-- Ảnh chạy -->
      <marquee align="center" direction="left" height="100%" scrollamount="7" width="100%" behavior="alternate">
        <img src="assets/images/a1.jpg" alt="" class="img-1" />
        <img src="assets/images/a2.jpg" alt="" class="img-1" />
        <img src="assets/images/a3.jpg" alt="" class="img-1" />
        <img src="assets/images/a4.jpg" alt="" class="img-1" />
        <img src="assets/images/a5.jpg" alt="" class="img-1" />
        <img src="assets/images/a6.jpg" alt="" class="img-1" />
        <img src="assets/images/a7.jpg" alt="" class="img-1" />
        <img src="assets/images/a8.jpg" alt="" class="img-1" />
        <img src="assets/images/a9.jpg" alt="" class="img-1" />
        <img src="assets/images/a10.png" alt="" class="img-1" />
        <img src="assets/images/a11.jpg" alt="" class="img-1" />
        <img src="assets/images/a12.jpg" alt="" class="img-1" />
      </marquee>
      <!-- Hết ảnh chạy -->
      <div class="row mt-5">
        <div class="col-md-8">
          <h3>Bài viết liên quan</h3>
          <div class="row">
            <div class="col-sm-6">
              <ul style="list-style: circle; color: black;">
                <li><a href="">Việc làm tại Sơn Trà (210 việc)</a></li>
                <li><a href="">Việc làm tại Ngũ Hành Sơn (250 việc)</a></li>
                <li><a href="">Việc làm tại Cẩm Lệ (300 việc)</a></li>
                <li><a href="">Việc làm tại Thanh Khê (200 việc)</a></li>
                <li><a href="">Việc làm tại Hòa Vang (100 việc)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">

        </div>
      </div>
    </div>
  </div>
  <!-- mesenger -->
  <div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
      <div class="hotline-phone-ring-circle"></div>
      <div class="hotline-phone-ring-circle-fill"></div>
      <div class="hotline-phone-ring-img-circle">
        <a href="#" class="pps-btn-img">
          <img src="{{ asset('assets/icons/meseenger.png')}}" alt="Nhắn tin" class="nhantin">
        </a>
      </div>
    </div>
  </div>
@endsection
