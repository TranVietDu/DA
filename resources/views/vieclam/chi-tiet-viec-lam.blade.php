@extends('master')

@section('content')
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>Security / Protective Services Jobs</h4>

                <h2>Security Officer - Luxury Retail</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="products">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-7">
                <p class="lead">
                     <i class="fa fa-map-marker"></i> {{$vieclam->diachi}} &nbsp;&nbsp;
                     <i class="fa fa-calendar"></i> {{$vieclam->created_at}} &nbsp;&nbsp;
                     <i class="fa fa-user"></i> Số Lượng: {{$vieclam->soluong}}
                </p>

                <br>
                <br>

                <div class="form-group">
                  <h5>{{$vieclam->tieude}}</h5>
                </div>
                    @if (isset($vieclam->mota))
                        <p><b>- Mô Tả:</b>
                            {{$vieclam->mota}}
                        </p>
                    @endif
                    @if (isset($vieclam->gioitinh))
                        <p><b>- Giới Tính:</b> <span> {{$vieclam->gioitinh}}</span></p>
                    @endif
                    @if (isset($vieclam->yeucau))
                        <p><b>- Yêu Cầu:</b> <span></span></p>
                    @endif

                        <p><b>- Thời gian làm việc:</b><span>
                        {{$vieclam->thoigian}}</span></p>

                    @if (isset($vieclam->kinhnghiem))
                        <p><b>- Yêu cầu kinh nghiệm:</b><span>
                        {{$vieclam->kinhnghiem}}</span></p>
                    @endif
                    @if (isset($vieclam->luong))
                        <p><b>- Lương cơ bản:</b><span>
                        {{$vieclam->luong}}</span></p>
                    @endif

                    <p><b>- Thuộc ngành nghề:</b><span>
                        {{$vieclam->nganhnghe}}</span></p>


                <br>
                <br>
            </div>

            <div class="col-md-4 col-sm-5">
              <div>
                  <br>
                  <h6 style="text-align:center">Ảnh về chúng tôi</h6>
                  <br>
                <img src="https://i.ytimg.com/vi/kGz9cHL9LFc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCmiRNWDNbhb4ZbyO2JXVYYlua2HQ" alt="" class="img-fluid wc-image">
              </div>
              <br>
              <div class="contact-form">
                <div class="form-group">
                  <button type="submit" class="filled-button btn-block">Ứng Tuyển Ngay</button>
                </div>
              </div>

              <div>
                <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid wc-image">
              </div>

              <br>
              <ul class="social-icons text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>

              <br>
              <br>
            </div>
          </div>
        </div>
      </div>

      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="section-heading">
                <h2>Giới thiệu về chúng tôi</h2>
              </div>

              <p class="lead">
                     <i class="fas fa-store"></i>
                     @if (isset($vieclam->tenquan))
                         {{$vieclam->tenquan}}
                         <p>
                             {{$vieclam->mota}}
                         </p>
                     @endif
                </p>
            </div>

            <div class="col-md-3">
              <div class="section-heading">
                <h2>Liên Hệ</h2>
              </div>

              <div class="left-content">
                <p>
                  <span>Tên Nhà Tuyển Dụng</span>

                  <br>

                  <strong>John Smith</strong>
                </p>

                <p>
                  <span>Số Điện Thoại</span>

                  <br>

                  <strong>
                    <a href="tel:123-456-789">0338742355</a>
                  </strong>
                </p>

                <p>
                  <span>Email</span>

                  <br>

                  <strong>
                    <a href="mailto:john@carsales.com">john@carsales.com</a>
                  </strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
