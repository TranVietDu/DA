@extends('master')

@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">

  <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    window.jssor_1_slider_init = function() {

      var jssor_1_SlideoTransitions = [
        [{
          b: -1,
          d: 1,
          ls: 0.5
        }, {
          b: 0,
          d: 1000,
          y: 5,
          e: {
            y: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          ls: 0.5
        }, {
          b: 200,
          d: 1000,
          y: 25,
          e: {
            y: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          ls: 0.5
        }, {
          b: 400,
          d: 1000,
          y: 45,
          e: {
            y: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          ls: 0.5
        }, {
          b: 600,
          d: 1000,
          y: 65,
          e: {
            y: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          ls: 0.5
        }, {
          b: 800,
          d: 1000,
          y: 85,
          e: {
            y: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          ls: 0.5
        }, {
          b: 500,
          d: 1000,
          y: 195,
          e: {
            y: 6
          }
        }],
        [{
          b: 0,
          d: 2000,
          y: 30,
          e: {
            y: 3
          }
        }],
        [{
          b: -1,
          d: 1,
          rY: -15,
          tZ: 100
        }, {
          b: 0,
          d: 1500,
          y: 30,
          o: 1,
          e: {
            y: 3
          }
        }],
        [{
          b: -1,
          d: 1,
          rY: -15,
          tZ: -100
        }, {
          b: 0,
          d: 1500,
          y: 100,
          o: 0.8,
          e: {
            y: 3
          }
        }],
        [{
          b: 500,
          d: 1500,
          o: 1
        }],
        [{
          b: 0,
          d: 1000,
          y: 380,
          e: {
            y: 6
          }
        }],
        [{
          b: 300,
          d: 1000,
          x: 80,
          e: {
            x: 6
          }
        }],
        [{
          b: 300,
          d: 1000,
          x: 330,
          e: {
            x: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          r: -110,
          sX: 5,
          sY: 5
        }, {
          b: 0,
          d: 2000,
          o: 1,
          r: -20,
          sX: 1,
          sY: 1,
          e: {
            o: 6,
            r: 6,
            sX: 6,
            sY: 6
          }
        }],
        [{
          b: 0,
          d: 600,
          x: 150,
          o: 0.5,
          e: {
            x: 6
          }
        }],
        [{
          b: 0,
          d: 600,
          x: 1140,
          o: 0.6,
          e: {
            x: 6
          }
        }],
        [{
          b: -1,
          d: 1,
          sX: 5,
          sY: 5
        }, {
          b: 600,
          d: 600,
          o: 1,
          sX: 1,
          sY: 1,
          e: {
            sX: 3,
            sY: 3
          }
        }]
      ];

      var jssor_1_options = {
        $AutoPlay: 1,
        $LazyLoading: 1,
        $CaptionSliderOptions: {
          $Class: $JssorCaptionSlideo$,
          $Transitions: jssor_1_SlideoTransitions
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
          $Class: $JssorBulletNavigator$,
          $SpacingX: 20,
          $SpacingY: 20
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/

      var MAX_WIDTH = 1600;

      function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

          var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

          jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
          window.setTimeout(ScaleSlider, 30);
        }
      }

      ScaleSlider();

      $Jssor$.$AddEvent(window, "load", ScaleSlider);
      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      /*#endregion responsive code end*/
    };
  </script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
  <style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
      animation-name: jssorl-009-spin;
      animation-duration: 1.6s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }


    /*jssor slider bullet skin 132 css*/
    .jssorb132 {
      position: absolute;
    }

    .jssorb132 .i {
      position: absolute;
      cursor: pointer;
    }

    .jssorb132 .i .b {
      fill: #fff;
      fill-opacity: 0.8;
      stroke: #000;
      stroke-width: 1600;
      stroke-miterlimit: 10;
      stroke-opacity: 0.7;
    }

    .jssorb132 .i:hover .b {
      fill: #000;
      fill-opacity: .7;
      stroke: #fff;
      stroke-width: 2000;
      stroke-opacity: 0.8;
    }

    .jssorb132 .iav .b {
      fill: #000;
      stroke: #fff;
      stroke-width: 2400;
      fill-opacity: 0.8;
      stroke-opacity: 1;
    }

    .jssorb132 .i.idn {
      opacity: 0.3;
    }

    .jssora051 {
      display: block;
      position: absolute;
      cursor: pointer;
    }

    .jssora051 .a {
      fill: none;
      stroke: #fff;
      stroke-width: 360;
      stroke-miterlimit: 10;
    }

    .jssora051:hover {
      opacity: .8;
    }

    .jssora051.jssora051dn {
      opacity: .5;
    }

    .jssora051.jssora051ds {
      opacity: .3;
      pointer-events: none;
    }
  </style>
  <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>
      <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
        <feGaussianBlur stddeviation="4"></feGaussianBlur>
      </filter>
      <radialGradient id="jssor_1_grd_2">
        <stop offset="0" stop-color="#fff"></stop>
        <stop offset="1" stop-color="#000"></stop>
      </radialGradient>
      <mask id="jssor_1_msk_3">
        <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
      </mask>
    </defs>
  </svg>
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
      <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
      @foreach($sliders as $slider)
      <div>
        <img data-u="image" style="opacity:0.8;" data-src="{{ asset('slider/'.$slider->image) }}" />
        <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">

        </div>
      </div>
      @endforeach
    </div>
    <script type="text/javascript">
      jssor_1_slider_init();
    </script>
  </div>
</div>

{{-- Đăng tin  --}}

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
                        <img src="https://benhvienvanhanh.com/wp-content/uploads/2020/01/2020_01_16/0805fbd5c3b499c19b7599613666a106.jpg" />
                      </a>
                      <div class="card-content">
                        <h4 class="card-title text-center">
                          <a href="tintuyendung/tao-tin-tuyen-dung"> Đăng tin tuyển dụng
                          </a>
                        </h4>
                        <p class="">

                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="card">
                      <a class="img-card" href="/hoso">
                        <img src="https://quantrinhansu.vn/wp-content/uploads/2020/03/chon-trang-phuc-phu-hop-khi-di-phong-van-xin-viec.png" />
                      </a>
                      <div class="card-content">
                        <h4 class="card-title text-center">
                          <a href="/hoso">Tìm hồ sơ xin việc
                          </a>
                        </h4>
                        <p class="">
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
                        <img src="https://cv.com.vn/blog/wp-content/uploads/2019/08/ho-so-xin-viec-la-gi-1.png" />
                      </a>
                      <div class="card-content">
                        <h4 class="card-title text-center">
                          <a href="tintimviec/tao-tin-tim-viec"> Đăng tin tìm việc
                          </a>
                        </h4>
                        <p class="">

                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="card">
                      <a class="img-card" href="vieclam">
                        <img src="https://hr.jobnow.com.vn/wp-content/uploads/2019/04/cach-tim-viec-lam-nhanh-hieu-qua.jpg" />
                      </a>
                      <div class="card-content">
                        <h4 class="card-title text-center">
                          <a href="/vieclam">Tìm kiếm việc làm
                          </a>
                        </h4>
                        <p class="">

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
{{-- Blog --}}
@if ($blognoibat->isEmpty())
@else
<div style="margin-top: 100px;">
  <div style="" class="container">
    <div class="row">


      <div class="col-md-12">
        <div class="section-heading">
          <h2>Đọc Gì Hôm Nay?</h2>
          <a href="/blog">Xem thêm <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      @foreach($blognoibat as $blog)
      <div class="col-md-6"><a href="/blog/chi-tiet-blog/{{$blog->id}}"><img width="100%" src="{{asset('anh_blog/'.$blog->anh)}}" alt=""></a></div>
      <div class="col-md-6">
        <h4 class="text-center">{{$blog->tieude}}</h4>
        <p class="float-left contentblog">{!!html_entity_decode(Str::limit($blog->noidung, 800))!!} <a href="/blog/chi-tiet-blog/{{$blog->id}}">xem thêm</a></p>
        <p class="float-right">Tác Giả: {{$blog->tennguoiviet}}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endif

{{-- Công việc mới nhất --}}
@if ($tintuyendungmoinhat->isEmpty())
@else
<div class="latest-products">
  <div style="" class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Công Việc Mới Nhất</h2>
          <a href="/vieclam">Xem thêm <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      @foreach($tintuyendungmoinhat as $tin)
      <div class="col-md-4">
        <div style="height: 428px" class="product-item">
          <a href="vieclam/chi-tiet-viec-lam/{{$tin->id}}"><img height="232px" src="{{ asset('anh_tintuyendung/'.$tin->anh) }}" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam/{{$tin->id}}">
              <h6 style="color: blue;" class="tieudevieclam">{{$tin->tieude}}</h6>
            </a>
            <h6>{{$tin->tenquan}}</h6>
            <p><i class="fas fa-dollar-sign"></i>  Lương: {{$tin->luong}}</p>
            <p><i class="fas fa-hourglass-half"></i>  Hạn nộp: {{ \Carbon\Carbon::parse($tin->ngayhethan)->format('d/m/Y')}}</p>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endif
<!-- Tin tim viec -->
@if ($tintimviecmoinhat->isEmpty())
@else
<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Tin Tìm Việc Mới Nhất</h2>
          <a href="/hoso">Xem thêm <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      @foreach($tintimviecmoinhat as $tin)
      <div class="col-md-4">
        <div class="product-item">
          <a href="/hoso/chi-tiet-ho-so/{{$tin->id}}"><img height="220px" src="{{ asset('anh_tintimviec/'.$tin->anh) }}" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="/hoso/chi-tiet-ho-so/{{$tin->id}}">
              <h6 style="color: blue;">{{$tin->ten}}</h6>
            </a>
            <p>Ngành nghề: {{$tin->nganhnghe}}</p>
              <p title="Posted on"><i class="fa fa-calendar"></i> Ngày đăng: {{ \Carbon\Carbon::parse($tin->created_at)->format('d/m/Y')}}</p> &nbsp;&nbsp;&nbsp;&nbsp;<br>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endif
<div class="happy-clients">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Đánh Giá Về PT<span style="color:red">JOB</span></h2>
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
</div>
</div>
</div>
<script src="{{asset('assets/js/extention/choices.js')}}"></script>
<script>
  const customSelects = document.querySelectorAll("select");
  const deleteBtn = document.getElementById('delete')
  const choices = new Choices('select', {
    searchEnabled: false,
    itemSelectText: '',
    removeItemButton: true,
  });
  deleteBtn.addEventListener("click", function(e) {
    e.preventDefault()
    const deleteAll = document.querySelectorAll('.choices__button')
    for (let i = 0; i < deleteAll.length; i++) {
      deleteAll[i].click();
    }
  });
</script>
@endsection
