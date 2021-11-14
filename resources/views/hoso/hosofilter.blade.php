@extends('master')

@section('content')
<img width="100%" height="300px" src="https://blogcdn.muaban.net/wp-content/uploads/2018/01/h%E1%BB%93-s%C6%A1-%E1%BB%A9ng-vi%C3%AAn-t%C3%ACm-vi%E1%BB%87c-2.jpg" alt="">
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-form">
                    <form action="{{route('timviecfiter')}}" method="get">
                        <h5>
                            <button type="submit" class="btn btn-primary btn-sm float-right">Lọc</button>
                        </h5>
                        <h5 style="margin-bottom: 15px">Giới Tính</h5>
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
                        <h5 style="margin-bottom: 15px">Ngành Nghề Mong Muốn</h5>

                        <div>
                            <label>
                                <input type="radio" value="Phục Vụ" name="nganhnghe">
                                <small>Phục Vụ</small>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" value="Bán Hàng" name="nganhnghe">

                                <small>Bán Hàng</small>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" value="Gia sư" name="nganhnghe">

                                <small>Gia sư</small>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" value="Pha Chế" name="nganhnghe">
                                <small>Pha Chế</small>
                            </label>
                        </div>

                        <br>
                </div>
                </form>
            </div>
            <div class="col-md-9">
                <h4 style="padding: 20px 20px;background-color: red;color: white;" class="text-center">Tin Tìm Việc</h4>
                <div class="row">
                    @if($timviec->isEmpty())
                        <div style="margin-top: 10px;" class="col-md-12 text-center"> Không tìm thấy kết quả</div>
                    @else
                    @foreach($timviec as $al)
                    <div class="col-md-6">
                        <div class="product-item">
                            <a href="/hoso/chi-tiet-ho-so/{{$al->id}}">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img style="padding: 8px;" width="auto" height="100%" src="{{ asset('anh_tintimviec/'.$al->anh) }}" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="down-content">
                                            <h4>{{$al->ten}}</h4>

                                            <p><i class="fas fa-briefcase"></i> {{$al->nganhnghe}}</p>
                                            <small>
                                                <strong title="Posted on"><i class="fa fa-calendar"></i> {{$al->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                                <strong title="Location"><i class="fa fa-map-marker"></i> {{$al->diachi}}</strong>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
    $(document).ready(function() {

        $('#sort').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });
    });
</script> -->
@endsection
