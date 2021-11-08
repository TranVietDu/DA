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
                     <i class="fa fa-map-marker"></i> {{$hoso->diachi}} &nbsp;&nbsp;
                     <i class="fa fa-calendar"></i> {{$hoso->created_at}} &nbsp;&nbsp;
                     <i class="fa fa-user"></i> Số Lượng: {{$hoso->soluong}}
                </p>

                <br>
                <br>

                <div class="form-group">
                  <h5>{{$hoso->tieude}}</h5>
                </div>
                        <p><b>- Thời gian làm việc:</b><span>
                        {{$hoso->thoigian}}</span></p>


                    <p><b>- Thuộc ngành nghề:</b><span>
                        {{$hoso->nganhnghe}}</span></p>

                        @if (isset($hoso->mota))
                        <p><b>- Mô Tả:</b>
                            {{$hoso->mota}}
                        </p>
                    @endif

                    @if (isset($hoso->luong))
                        <p><b>- Mức lương:</b>
                            {{$hoso->luong}}
                        </p>
                        @else
                        <p><b>- Mức lương:</b>
                            {{'Thương lượng'}}
                        </p>
                    @endif
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
                     @if (isset($hoso->tenquan))
                         {{$hoso->tenquan}}
                         <p>
                             {{$hoso->mota}}
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

                  <strong>{{ $user->name }}</strong>
                </p>

                <p>
                  <span>Email</span>

                  <br>

                  <strong>
                    <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                  </strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
