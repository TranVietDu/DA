@extends('master')

@section('content')
<!-- Page Content -->
<style>
  .products{
    font-family: Arial, Helvetica, sans-serif;
  }
  .ima{
    width: 350px;
    height: 234px;
  }
</style>
<div class="page-heading about-heading header-text" style="background-color: rgb(197, 235, 254);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Chi Tiết Tin Tuyển Dụng</h4>

          <h2 style="color: black;">{{$vieclam->tenquan}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-7">
        <h1>{{$vieclam->tieude}}</h1>
        <h5>Ngành Nghề: {{$vieclam->nganhnghe}}</h5>
        <br>
        <br>
        <h6 style="padding: 10px;">- Thời gian làm việc: {{$vieclam->thoigian}}</h6>
        @if (isset($vieclam->luong))
        <h6 style="padding: 10px;">- Mức lương: {{$vieclam->luong}}</h6>
        @else
        <h6 style="padding: 10px;">- Mức lương: Thương lượng</h6>
        @endif
        <h6 style="padding: 10px;">- Số Lượng: {{$vieclam->soluong}}</h6>
        <h6 style="padding: 10px;">- Địa Điểm Làm Việc: {{$vieclam->diachi}}</h6>
        <h6 style="padding: 10px;">- Ngày Đăng: {{$vieclam->created_at}}</h6>
        <h6 style="padding: 10px;">- Ngày Hết Hạn: {{$vieclam->ngayhethan}}</h6>
        @if (isset($vieclam->mota))
        <h6 style="padding: 10px;">- Mô Tả Công Việc: {!!html_entity_decode($vieclam->mota)!!}</h6>
        @endif
      </div>

      <div class="col-md-4 col-sm-5">
        <div>
          <br>
          <h6 style="text-align:center">Ảnh về chúng tôi</h6>
          <br>
          <img class="img-fluid wc-image ima" src="{{ asset('anh_tintuyendung/'.$vieclam->anh) }}" alt="" >
        </div>
        <br>
        <div class="contact-form">
          <div class="form-group">
            @if($now < $vieclam->ngayhethan)
              <a href="/mail/{{$vieclam->id}}"><button type="submit" class="filled-button btn-block">Ứng Tuyển Ngay</button></a>
              @else
              <a href=""><button type="submit" style="background-color: rgb(210, 210, 210);" class="filled-button btn-block">Hết Hạn Ứng Tuyển</button></a>
              @endif
          </div>
          <hr>
          <h5>Một số việc làm khác</h5>
          @foreach ($vieclams as $val)
            <div class="col-12">
                <a href="{{$val->id}}">- {{$val->tieude}}</a>
            </div>
          @endforeach
        </div>
        <div>
          <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid wc-image">
        </div>

        <br>
        <br>
        <br>
        <div class="section-heading">
          <h2>Liên Hệ:</h2>
          <b>Tên Nhà Tuyển Dụng:</b><span> {{ $user->name }}</span><br>
          <b>Email:</b><span> {{$user->email}}</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection