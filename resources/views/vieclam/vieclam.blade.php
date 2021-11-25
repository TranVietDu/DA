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

            <br>

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

            <br>

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
          </form>
        </div>
      </div>
      <div class="col-md-9">
        <h4 style="padding: 10px 10px; background-color: red; color: white; margin-bottom:10px" class="text-center">Tin Tuyển Dụng</h4>
        <div class="row" id="results" class="ajax-loading">
          <!-- @foreach ($vieclams as $val)
          <div class="col-md-4">
            <div class="product-item">
              <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}">
                <img src="{{ asset('anh_tintuyendung/'.$val->anh) }}" style="width:100%; height:200px; padding: 8px;" alt="">
                <div style="height: 200px;" class="down-content">
                  <h4 style="color: blue;">{{ $val->tieude }}</h4>
                  <p>
                    @if (isset($val->luong))
                    <i class="fas fa-dollar-sign"></i> Lương: {{$val->luong }}
                    @else
                    {{ 'Thương lượng'}}
                    @endif
                  </p>
                  <h5 style="color: black;"><small><i class="fa fa-briefcase"></i> {{ $val->nganhnghe}} <br> <i class="fa fa-building"></i> {{ $val->tenquan }}</small></h5>
                </div>
              </a>
            </div>
          </div>
          @endforeach -->
        </div>

        <!-- <div class="phantrang text-center">
          {!! $vieclams->links() !!}
        </div> -->
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
                url: site_url + "/vieclam?page=" + page,
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
</div>
@endsection