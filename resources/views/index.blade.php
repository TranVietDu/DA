@extends('master')

@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">


  <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
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
                }
                else {
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
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
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
            <div >
                <img data-u="image"  style="opacity:0.8;" data-src="{{ asset('slider/'.$slider->image) }}" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
                    <div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:red;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">{{$slider->name}}</div>
                    <div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:red;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">{{$slider->name}}</div>
                    <div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:red;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">{{$slider->name}}</div>
                    <div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:red;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">{{$slider->name}}</div>
                    <div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:red;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">{{$slider->name}}</div>
                    <div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;"></div>
                </div>
            </div>
        @endforeach
        </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
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
                                                      <a class="img-card" href="/hoso">
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
<!-- Banner Ends Here -->
{{-- Blog --}}

<div style="margin-top: 100px;" class="blog">
  <div style="background-color: rgb(132, 205, 212);border-radius: 8px;" class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="section-heading">
          <h2>Đọc Gì Hôm Nay?</h2>
          <a href="">xem thêm <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
        <div class="col-md-6"><img width="100%" src="https://i.pinimg.com/originals/ce/12/25/ce1225f92e766b3a87113dc69560e88f.jpg" alt=""></div>
        <div class="col-md-6">
          <h4 class="text-center">Tên Blog</h4>
          <p class="float-left">Gia đình hạnh phúc vẫn "bận rộn" với trường học, công việc, sở thích và những hoạt động khác nhưng họ vẫn có thời gian dành cho nhau vì họ có quyền quyết định điều gì làm hay không. Họ xử lý vấn đề một cách nhanh chóng. Khi một vấn đề lớn phát sinh, họ chia sẻ với nhau và xử lý hiệu quả. Họ có thể chia sẻ mối quan tâm một cách hòa nhã, dễ chịu để người kia bình tĩnh xử lý vấn đề..
 </p>
          <p class="float-right">Tác Giả:VIết Dũ</p>
        </div>
    </div>
  </div>
</div>

{{-- Công việc mới nhất --}}
<div class="latest-products">
  <div style="background-color: rgb(132, 205, 212);border-radius: 8px;" class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Công Việc Mới Nhất</h2>
          <a href="/vieclam">xem thêm <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img class="img-fluid" src="https://jobsgo.vn/blog/wp-content/uploads/2020/02/5-k%E1%BB%B9-n%C4%83ng-ph%E1%BB%A5c-v%E1%BB%A5-b%C3%A0n-c%C6%A1-b%E1%BA%A3n-c%E1%BB%A7a-nh%C3%A2n-vi%C3%AAn-ph%E1%BB%A5c-v%E1%BB%A5-nh%C3%A0-h%C3%A0ng.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Ngành Nghề</h4>
            </a>
              <h5>Tên Công Ty</h5>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Đăng</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa chỉ</strong>
            </small>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img class="img-fluid" src="https://jobsgo.vn/blog/wp-content/uploads/2020/02/5-k%E1%BB%B9-n%C4%83ng-ph%E1%BB%A5c-v%E1%BB%A5-b%C3%A0n-c%C6%A1-b%E1%BA%A3n-c%E1%BB%A7a-nh%C3%A2n-vi%C3%AAn-ph%E1%BB%A5c-v%E1%BB%A5-nh%C3%A0-h%C3%A0ng.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Ngành Nghề</h4>
            </a>
              <h5>Tên Công Ty</h5>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Đăng</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa chỉ</strong>
            </small>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img class="img-fluid" src="https://jobsgo.vn/blog/wp-content/uploads/2020/02/5-k%E1%BB%B9-n%C4%83ng-ph%E1%BB%A5c-v%E1%BB%A5-b%C3%A0n-c%C6%A1-b%E1%BA%A3n-c%E1%BB%A7a-nh%C3%A2n-vi%C3%AAn-ph%E1%BB%A5c-v%E1%BB%A5-nh%C3%A0-h%C3%A0ng.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Ngành Nghề</h4>
            </a>
              <h5>Tên Công Ty</h5>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Đăng</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa chỉ</strong>
            </small>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Tin tim viec -->
<div class="latest-products">
  <div style="background-color: rgb(132, 205, 212);border-radius: 8px;" class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Tin Tìm Việc Mới Nhất</h2>
          <a href="/vieclam">xem thêm <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img src="https://www.paratime.vn/wp-content/uploads/2019/09/timestudio.vn-headshot-eye-glasses-02.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b>New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Tên Người Viết</h4>
            </a>
            <h6>Ngành Nghề</h6>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Viết</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa Chỉ</strong>
            </small>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img src="https://www.paratime.vn/wp-content/uploads/2019/09/timestudio.vn-headshot-eye-glasses-02.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Tên Người Viết</h4>
            </a>
            <h6>Ngành Nghề</h6>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Viết</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa Chỉ</strong>
            </small>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img src="https://www.paratime.vn/wp-content/uploads/2019/09/timestudio.vn-headshot-eye-glasses-02.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Tên Người Viết</h4>
            </a>
            <h6>Ngành Nghề</h6>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Viết</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa Chỉ</strong>
            </small>
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
