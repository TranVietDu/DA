@extends('master')

@section('content')
<!-- Page Content -->
<!-- <div class="page-heading about-heading header-text" style="background-image: url(https://blogcdn.muaban.net/wp-content/uploads/2018/01/h%E1%BB%93-s%C6%A1-%E1%BB%A9ng-vi%C3%AAn-t%C3%ACm-vi%E1%BB%87c-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4></h4>
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>
</div> -->
<img width="100%" height="250px" src="https://entrepreneurcaribbean.com/wp-content/uploads/2020/09/Find_Jobs.jpg" alt="">
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="contact-form">
                    <form action="{{route('timviecfiter')}}" method="get">
                        <h5>
                            <button type="submit" class="btn btn-primary btn-sm float-right">Lọc <i class="fa fa-filter" aria-hidden="true"></i></button>
                        </h5>
                        <h6 style="margin-bottom: 16px">Giới Tính</h6>
                        <div>
                            <label>
                                <input type="radio" name="gioitinh" value="Nam">
                                <small>Nam</small>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="gioitinh" value="Nữ">
                                <small>Nữ</small>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="gioitinh" value="Khác">
                                <small>Khác</small>
                            </label>
                        </div>
                        <br>
                        <h6 style="margin-bottom: 16px">Ngành Nghề</h6>

                        <div>
                            <label>
                                <input type="radio" name="nganhnghe" value="Phục Vụ">
                                <small>Phục Vụ</small>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="nganhnghe" value="Bàn Hàng">

                                <small>Bán Hàng</small>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="nganhnghe" value="Gia Sư">

                                <small>Gia sư</small>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="nganhnghe" value="Pha Chế">
                                <small>Pha Chế</small>
                            </label>
                        </div>

                        <br>
                </div>
                </form>
            </div>
            <div class="col-md-10">
                <h5 style="padding: 10px 10px;background-color:#0091ce;color: white; margin-bottom:10px" class="text-center">Tin Tìm Việc</h5>
                <div class="row" id="results" class="ajax-loading">
                    <!-- @foreach($timviecs as $al)
                    <div class="col-md-6">
                        <div class="product-item">
                            <a href="/hoso/chi-tiet-ho-so/{{$al->id}}">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="anhcanhan">
                                            <img height="200px" src="{{asset('anh_tintimviec/'.$al->anh)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="thongtin">
                                            <h4 style="padding-bottom: 60px; padding-top: 10px;">{{$al->ten}}</h4>
                                            <p><i class="fas fa-venus-mars"></i> Giới tính: {{$al->gioitinh}}</p>
                                            <p><i class="fas fa-briefcase"></i> Ngành nghề: {{$al->nganhnghe}}</p>
                                            <p><i class="fas fa-calendar-alt"></i> Ngày đăng:  {{ \Carbon\Carbon::parse($al->created_at)->format('d/m/Y')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    @endforeach -->
                </div>
                <script>
          var site_url = "{{ url('/') }}";
          var page = 1;

          load_more(page);

          $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
              page++;
              load_more(page);
            }
          });

          function load_more(page) {
            $.ajax({
                url: site_url + "/hoso?page=" + page,
                type: "get",
                datatype: "html",
                beforeSend: function() {
                  $('.ajax-loading').show();
                }
              })
              .done(function(data) {
                if (data.length == 0) {
                  $('.ajax-loading').html("No more records!");
                  return;
                }
                $('.ajax-loading').hide();
                $("#results").append(data);
              })
              .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
              });
          }
        </script>
            </div>
        </div>
    </div>
    <!-- Load more -->
    @endsection
