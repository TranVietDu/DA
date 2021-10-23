@extends('master')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-02">
                <div class="text-content">
                  <h4>Fugiat Aspernatur</h4>
                  <h2>Try to take advantage of every opportunity that comes you way.</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                  <h4>Saepe Omnis</h4>
                  <h2>Try to take advantage of every opportunity that comes you way.</h2>
                </div>
              </div>
           <div class="banner-item-01">
                <div class="text-content">
                <h4>Find your car today!</h4>
                <h2>Try to take advantage of every opportunity that comes you way.</h2>
                </div>
            </div>
        </div>
      </div>
      <!-- Banner Ends Here -->
      {{-- Đăng tin  --}}

      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 text-right">
                    <a href="tintuyendung/tao-tin-tuyen-dung" class="filled-button">Tạo Tin Tuyển Dụng</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="latest-products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Công Việc Mới Nhất</h2>
                <a href="/vieclam">xem thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <a href="/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                <div class="down-content">
                  <a href="/chi-tiet-viec-lam"><h4>Lorem ipsum dolor sit amet</h4></a>

                  <h6>$60 000</h6>

                  <h4><small><i class="fa fa-briefcase"></i> Medical / Health Jobs <br> <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong></small></h4>

                  <small>
                       <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                       <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                       <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                  </small>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="best-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Về Chúng Tôi</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
                <ul class="featured-list">
                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  <li><a href="#">Consectetur an adipisicing elit</a></li>
                  <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                  <li><a href="#">Corporis, omnis doloremque</a></li>
                </ul>
                <a href="about-us.html" class="filled-button">Xem thêm</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="assets/images/about-1-570x350.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="services" style="background-image: url(asset('assets/images/other-image-fullscren-1-1920x900.jpg'));" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 style="color:black">Blogs Mới Nhất</h2>

                <a href="testimonials.html">xem thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

                <div class="down-content">
                  <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                  <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

                <div class="down-content">
                  <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                  <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

                <div class="down-content">
                  <h4><a href="#">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                  <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="happy-clients">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Đánh Giá</h2>

                <a href="testimonials.html">xem thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="owl-clients owl-carousel text-center">
                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="down-content">
                    <h4>John Doe</h4>
                    <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                  </div>
                </div>

                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="down-content">
                    <h4>Jane Smith</h4>
                    <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                  </div>
                </div>

                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="down-content">
                    <h4>Antony Davis</h4>
                    <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                  </div>
                </div>

                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="down-content">
                    <h4>John Doe</h4>
                    <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                  </div>
                </div>

                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="down-content">
                    <h4>Jane Smith</h4>
                    <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                  </div>
                </div>

                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="down-content">
                    <h4>Antony Davis</h4>
                    <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
