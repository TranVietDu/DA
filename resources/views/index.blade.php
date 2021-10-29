@extends('master')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-02">
                <div class="text-content">
                    <div class="s009">
                        <form action="/tim-kiem" method="get" autocomplete="off">
                            <div class="inner-form">
                            <div class="basic-search">
                              <div class="input-field">
                                <input id="search" type="text" placeholder="Nhập từ khóa cần tìm..." id="keywords" name="keywords_submit"/>
                                <div class="icon-wrap">
                                  <button class="btn btn-outline-secondary bg-black border-start-0 border rounded-pill ms-n3" type="submit">
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                        </form>
                        <form>
                            <div class="advance-search">
                              <span class="desc">Tìm kiếm nâng cao</span>
                              <div class="row">
                                <div class="input-field">
                                  <div class="input-select">
                                    <select data-trigger="" name="thoigian">
                                      <option placeholder="" value="">Thời gian</option>
                                      <option>Ca sáng</option>
                                      <option>Ca chiều</option>
                                      <option>Ca tối</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="input-field">
                                  <div class="input-select">
                                    <select data-trigger="" name="diachi">
                                      <option placeholder="" value="">Địa chỉ</option>
                                      <option>Hải Châu</option>
                                      <option>Sơn Trà</option>
                                      <option>Ngũ Hành Sơn</option>
                                      <option>Cẩm Lệ</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="input-field">
                                  <div class="input-select">
                                    <select data-trigger="" name="luong">
                                      <option placeholder="" value="">Mức lương</option>
                                      <option>1tr - 2tr</option>
                                      <option>2tr - 3tr</option>
                                      <option>3tr - 4tr</option>
                                      <option>Trên 4tr</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row third">
                                <div class="input-field">
                                  <div class="result-count"></div>
                                  <div class="group-btn">
                                    <button class="btn-delete" id="delete">LÀM MỚI</button>
                                    <button class="btn-search" type="submit">TÌM</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
              {{-- Đăng tin  --}}
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="wrapper">
                            <div class="container-fostrap">
                                <div>
                                    <h3 class="heading">
                                        Dịch vụ tuyển dụng
                                    </h3>
                                </div>
                                <div class="content" style="margin-top:50px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card">
                                                    <a class="img-card" href="tintuyendung/tao-tin-tuyen-dung">
                                                    <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                                                  </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title text-center">
                                                            <a href="tintuyendung/tao-tin-tuyen-dung"> Đăng tin tuyển dụng
                                                          </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card">
                                                    <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                                    <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                                                  </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title text-center">
                                                            <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">Tìm hồ sơ xin việc
                                                          </a>
                                                        </h4>
                                                        <p class="">
                                                            tutorials button hover animation, although very much a hover button is very beauti...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
                <div class="inner-content">
                  <div class="row">
                      <div class="col-lg-12">
                          <section class="wrapper">
                              <div class="container-fostrap">
                                  <div>
                                      <h3 class="heading">
                                          Dịch vụ tìm việc
                                      </h3>
                                  </div>
                                  <div class="content" style="margin-top:50px">
                                      <div class="container">
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-6">
                                                  <div class="card">
                                                      <a class="img-card" href="tintimviec/tao-tin-tim-viec">
                                                      <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                                                    </a>
                                                      <div class="card-content">
                                                          <h4 class="card-title text-center">
                                                              <a href="tintimviec/tao-tin-tim-viec"> Đăng tin tìm việc
                                                            </a>
                                                          </h4>
                                                          <p class="">
                                                              Material Design is a visual programming language made by Google. Language programming...
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xs-12 col-sm-6">
                                                  <div class="card">
                                                      <a class="img-card" href="vieclam">
                                                      <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                                                    </a>
                                                      <div class="card-content">
                                                          <h4 class="card-title text-center">
                                                              <a href="vieclam">Tìm kiếm việc làm
                                                            </a>
                                                          </h4>
                                                          <p class="">
                                                              tutorials button hover animation, although very much a hover button is very beauti...
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </section>

                  </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
      <!-- Banner Ends Here -->
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
            @foreach ($vieclams as $val)
                <div class="col-md-4">
                    <div class="product-item">
                    <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><img src="{{ $val->anh }}" alt=""></a>
                    <div class="down-content">
                        <a href="vieclam/chi-tiet-viec-lam/{{ $val->id}}"><h4>{{ $val->tieude }}</h4></a>

                        <h6>
                            @if (isset($val->luong))
                            ${{$val->luong }}
                            @else
                            $ {{ 'Thương lượng'}}
                            @endif
                        </h6>

                        <h4><small><i class="fa fa-briefcase"></i> {{ $val->nganhnghe}} <br> <strong><i class="fa fa-building"></i> {{ $val->tenquan }}</strong></small></h4>

                        <small>
                            <strong title="Posted on"><i class="fa fa-calendar"></i> {{ $val->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Type"><i class="fa fa-file"></i> {{$val->gioitinh}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Location"><i class="fa fa-map-marker"></i> {{$val->diachi }}</strong>
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

            @foreach ($blogs as $val)
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                  <a href="#" class="services-item-image"><img src="{{$val->anh}}" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="#">{{$val->tieude}}</a></h4>

                    <p style="margin: 0;"> {{$val->tennguoiviet}} &nbsp;&nbsp;|&nbsp;&nbsp; {{$val->created_at}} &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
            @endforeach
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
      <script src="{{asset('assets/js/extention/choices.js')}}"></script>
      <script>
        const customSelects = document.querySelectorAll("select");
        const deleteBtn = document.getElementById('delete')
        const choices = new Choices('select',
        {
          searchEnabled: false,
          itemSelectText: '',
          removeItemButton: true,
        });
        deleteBtn.addEventListener("click", function(e)
        {
          e.preventDefault()
          const deleteAll = document.querySelectorAll('.choices__button')
          for (let i = 0; i < deleteAll.length; i++)
          {
            deleteAll[i].click();
          }
        });

      </script>
@endsection
