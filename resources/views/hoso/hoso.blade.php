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
    <img width="100%" height="341px" src="https://entrepreneurcaribbean.com/wp-content/uploads/2020/09/Find_Jobs.jpg"
        alt="">
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-form">
                        <form action="{{ route('timviecfiter') }}" method="get">
                            <h5>
                                <button type="submit" class="btn btn-primary btn-sm float-right">Lọc <i
                                        class="fa fa-filter" aria-hidden="true"></i></button>
                            </h5>
                            <h6 style="margin-bottom: 16px;color: red;">Giới Tính</h6>
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
                            <h6 style="margin-bottom: 16px;color: red;">Ngành Nghề</h6>

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
                                    <input type="radio" name="nganhnghe" value="Mẫu ảnh">
                                    <small>Mẫu ảnh</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="nganhnghe" value="Dịch thuật">
                                    <small>Dịch thuật</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="nganhnghe" value="Cộng tác viên(CTV)">
                                    <small>Cộng tác viên</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="nganhnghe" value="Phát tờ rơi">
                                    <small>Phát tờ rơi</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="nganhnghe" value="Pha chế">
                                    <small>Pha chế</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="nganhnghe" value="Nhân viên telesale">
                                    <small>Nhân viên telesale</small>
                                </label>
                            </div>

                            <br>
                    </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <h4 style="padding: 10px 10px;background-color:#0091ce;color: white; margin-bottom:10px"
                        class="text-center">Tin Tìm Việc</h4>
                    <div class="col-12 text-center">
                        @if (session('tbluu'))
                            <div class="alert alert-success">
                                {{ session('tbluu') }}
                            </div>
                        @endif
                        @if (session('tbloi'))
                            <div class="alert alert-danger">
                                {{ session('tbloi') }}
                            </div>
                        @endif
                    </div>
                    <div class="row" id="results" class="ajax-loading">
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
