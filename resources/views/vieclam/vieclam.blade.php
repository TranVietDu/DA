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
        <h5>Việc làm
          <button type="submit" class="btn btn-primary btn-sm float-right">Lọc</button>
        </h5>
        <div class="contact-form">
          <form action="#">
            <h5 style="margin-bottom: 15px">Giới Tính</h5>

            <div>
              <ul>
                <form method="GET">
                    <input type="text" name="nganhnghe">
                </form>
              </ul>
            </div>

            <br>

            <h5 style="margin-bottom: 15px">Địa Điểm</h5>

            <div>
              <label>
                <input type="checkbox">

                <small>Hải Châu (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Thanh Khê (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Ngũ Hành Sơn (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Sơn Trà (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Cẩm Lệ (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Hòa Vang (5)</small>
              </label>
            </div>

            <br>

            <h5 style="margin-bottom: 15px">Ngành Nghề</h5>

            <div>
              <label>
                <input type="checkbox">

                <small>Phục Vụ (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Bán Hàng (5)</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>Gia sư (5)</small>
              </label>
            </div>

            <br>


            <h5 style="margin-bottom: 15px">Mức Lương</h5>

            <div>
              <label>
                <input type="checkbox">

                <small>1tr - 2tr</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>2tr - 3tr</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>3tr - 4tr</small>
              </label>
            </div>

            <h5 style="margin-bottom: 15px">Ngày đăng</h5>

            <div>
              <label>
                <input type="checkbox">

                <small>1 ngày trước</small>
              </label>
            </div>

            <div>
              <label>
                <input type="checkbox">

                <small>1 tuần trước</small>
              </label>
            </div>

            <label>
              <input type="checkbox">

              <small>1 tháng trước</small>
            </label>
        </div>
        </form>
      </div>
      <div class="col-md-9">
        <h4 style="padding: 20px 20px;background-color: red;color: white;" class="text-center">Tin Tuyển Dụng</h4>
        <div class="row">
          @foreach ($vieclams as $val)
          <div class="col-md-4">
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
        </div>
        <div class="phantrang text-center">
          {!! $vieclams->links() !!}
        </div>

      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {

    $('#sort').on('change', function() {
      var url = $(this).val();
      if (url) {
        window.location = url;
      }
      return false;
    });
  });
</script>
@endsection
