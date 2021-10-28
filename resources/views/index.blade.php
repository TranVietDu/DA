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
                    <a href="tintimviec/tao-tin-tim-viec" class="filled-button">Tạo Tin Tìm Kiếm Việc Làm</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Công việc mới nhất --}}
      <div class="latest-products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Công Việc Mới Nhất</h2>
                <a href="/vieclam">xem thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            @foreach ($vieclams as $vl)
                <div class="col-md-4">
                    <div class="product-item">
                    <a href="vieclam/chi-tiet-viec-lam"><img src="{{ $vl->anh }}" alt=""></a>
                    <div class="down-content">
                        <a href="vieclam/chi-tiet-viec-lam"><h4>{{ $vl->tieude }}</h4></a>

                        <h6>${{$vl->luong }}</h6>

                        <h4><small><i class="fa fa-briefcase"></i> {{ $vl->nganhnghe}} <br> <strong><i class="fa fa-building"></i>{{ $vl->tenquan}}</strong></small></h4>

                        <small>
                            <strong title="Posted on"><i class="fa fa-calendar"></i> {{ $vl->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Type"><i class="fa fa-file"></i> {{$vl->gioitinh}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Location"><i class="fa fa-map-marker"></i> {{$vl->diachi }}</strong>
                        </small>
                    </div>
                    </div>
                </div>
            @endforeach

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
