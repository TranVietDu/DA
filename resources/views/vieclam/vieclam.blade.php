@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor sit amet</h4>
          <h2>Jobs</h2>
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
                <li><a href="?sort_by=nam" style="color: black">Nam</a></li>
                <li><a href="?sort_by=nu" style="color: black">Nữ</a></li>
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
      <div class="row">
        @foreach ($vieclams as $val)
        <div class="col-md-4">
          <div class="product-item">
            <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><img src="{{ $val->anh }}" alt=""></a>
            <div class="down-content">
              <a href="vieclam/chi-tiet-viec-lam/{{ $val->id}}">
                <h4>{{ $val->tieude }}</h4>
              </a>

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