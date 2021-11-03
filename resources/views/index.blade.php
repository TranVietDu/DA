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
              {{-- Đăng tin  --}}
    @if(Auth::check())
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            @if  (Auth::user()->role == 2)
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
            @elseif (Auth::user()->role == 3)
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
            @endif
            </div>
         </div>
       </div>
    @else
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

    @endif


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
      {{-- tin tim viec --}}
      <div class="latest-products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Tin Tìm Việc Mới Nhất</h2>
                <a href="/vieclam">xem thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            @foreach ($timviecs as $val)
                <div class="col-md-4">
                    <div class="product-item">
                    <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><img src="{{ $val->anh }}" alt=""></a>
                    <div class="down-content">
                        <a href="vieclam/chi-tiet-viec-lam/{{ $val->id}}"><h4>{{$val->ten }}</h4></a>
                        <small>
                            <strong title="Type"><i class="fa fa-male"></i> {{$val->gioitinh}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Location"><i class="fa fa-birthday-cake"></i> {{ $val->ngaysinh }}</strong>
                        </small>
                    </div>
                    </div>
                </div>
            @endforeach

          </div>
        </div>
      </div>

      {{-- blog --}}
      <div class="services" style="background-image: url(asset('assets/images/other-image-fullscren-1-1920x900.jpg'));" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 style="color:black">Blogs Mới Nhất</h2>

                <a href="/blog">xem thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>

            @foreach ($blogs as $val)
                <div class="col-md-4">
                    <div class="service-item">
                      <a href="/blog/chi-tiet-blog/{{$val->id}}" class="services-item-image"><img src="{{$val->anh}}" class="img-fluid" alt=""></a>

                      <div class="down-content">
                        <h4><a href="/blog/chi-tiet-blog/{{$val->id}}">{{$val->tieude}}</a></h4>

                        <p style="margin: 0;"> {{$val->tennguoiviet}} &nbsp;&nbsp;|&nbsp;&nbsp; {{$val->created_at}} &nbsp;&nbsp;</p>
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
              </div>
            </div>
            <div class="col-md-12">
              <div class="owl-clients owl-carousel text-center">
                @foreach ($ykiens as $ykien)
                <div class="service-item">
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="down-content">
                      <h4>{{$ykien->ten}}</h4>
                      <p><i>"{{$ykien->noidung}}"</i></p>
                    </div>
                  </div>
                @endforeach
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
