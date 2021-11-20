@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(https://cdn.shopify.com/s/files/1/1404/4249/files/2020-02-06_BANNER_TUY_N_D_NG.jpg?v=1581044229);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="contact-form">
          <form action="{{route('filter')}}" method="get">
            <button type="submit" class="btn btn-primary btn-sm float-right">Lọc <i class="fa fa-filter" aria-hidden="true"></i></button>

            <br>

            <h5 style="margin-bottom: 15px">Địa Điểm</h5>

            <div>
              <label>
                <input type="radio" value="Hải Châu" name="diadiem">
                <small>Hải Châu</small>
              </label>
            </div>
            <div>
              <label>
                <input type="radio" value="Thanh Khê" name="diadiem">
                <small>Thanh Khê</small>
              </label>
            </div>
            <div>
              <label>
                <input type="radio" value="Ngũ Hành Sơn" name="diadiem">
                <small>Ngũ Hành Sơn</small>
              </label>
            </div>

            <div>
              <label>
                <input type="radio" value="Sơn Trà" name="diadiem">

                <small>Sơn Trà</small>
              </label>
            </div>

            <div>
              <label>
                <input type="radio" value="Cẩm Lệ" name="diadiem">

                <small>Cẩm Lệ</small>
              </label>
            </div>

            <div>
              <label>
                <input type="radio" value="Hòa Vang" name="diadiem">

                <small>Hòa Vang</small>
              </label>
            </div>
            <h5 style="margin-bottom: 15px">Ngành Nghề</h5>

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
                <input type="radio" value="Gia Sư" name="nganhnghe">

                <small>Gia Sư</small>
              </label>
            </div>

            <div>
              <label>
                <input type="radio" value="Pha Chế" name="nganhnghe">

                <small>Pha Chế</small>
              </label>
            </div>
            <h5 style="margin-bottom: 15px">Thời gian</h5>

            <div>
              <label>
                <input type="radio" value="Ca sáng" name="thoigian">

                <small>Ca sáng</small>
              </label>
            </div>

            <div>
              <label>
                <input type="radio" value="Ca chiều" name="thoigian">

                <small>Ca chiều</small>
              </label>
            </div>

            <div>
              <label>
                <input type="radio" value="Ca tối" name="thoigian">

                <small>Ca tối</small>
              </label>
            </div>
            <br>
        </div>
        </form>
      </div>
      <div class="col-md-9">
        <h4 style="padding: 20px 20px;background-color: red;color: white;" class="text-center">Tin Tuyển Dụng</h4>
        <div class="row">
          @if($vieclam->isEmpty())
          <div style="margin-top: 10px;" class="col-md-12 text-center"> Không tìm thấy kết quả</div>
          @else
          @foreach ($vieclam as $val)
          <div class="col-md-4 mt-3">
            <div class="product-item">
              <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}">
                <img src="{{ asset('anh_tintuyendung/'.$val->anh) }}" style="width:100%; height:200px; padding: 8px;" alt="">
                <div style="height: 200px;" class="down-content">
                  <h4 style="color: red;">{{ $val->tieude }}</h4>
                  <p>
                    @if (isset($val->luong))
                    {{$val->luong }}
                    @else
                    {{ 'Thương lượng'}}
                    @endif
                  </p>
                  <h5><small><i class="fa fa-briefcase"></i> {{ $val->nganhnghe}} <br> <strong><i class="fa fa-building"></i> {{ $val->tenquan }}</strong></small></h5>
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
