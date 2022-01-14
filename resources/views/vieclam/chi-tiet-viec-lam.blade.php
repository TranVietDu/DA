@extends('master')

@section('content')
<!-- Page Content -->
<style>
  .products {
    font-family: Arial, Helvetica, sans-serif;
  }

  .ima {
    width: 350px;
    height: 234px;
  }
  .image{
      border-bottom: 5px solid black;
      width: 100%;
  }
  .tieu {
    margin: 10px;
  }

  .chitiet h6 {
    padding-bottom: 16px;
  }
</style>
<div class="tieu">
  <img src="https://congtytanhungphat.com/wp-content/uploads/2020/06/Banner-tuyen-dung.png" class="img-fluid image" alt="">
</div>
<h2 style="margin-top: 20px;color: red;" class="text-center">{{$vieclam->tieude}} - {{$vieclam->tenquan}}</h2>
<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-12">
            <h4 style="text-decoration-line: underline;margin-bottom: 15px;">Thông tin tuyển dụng:</h4>
          </div>
          <div class="col-6 chitiet">
            <h6><i style="color: red;" class="fas fa-briefcase"></i> Ngành Nghề: {{$vieclam->nganhnghe}}</h6>
            <h6><i style="color: red;" class="far fa-clock"></i> Thời gian làm việc: {{$vieclam->thoigian}}</h6>
            @if (isset($vieclam->luong))
            <h6><i style="color: red;" class="fas fa-dollar-sign"></i> Mức lương: {{$vieclam->luong}}</h6>
            @else
            <h6><i style="color: red;" class="fas fa-dollar-sign"></i> Mức lương: Thương lượng</h6>
            @endif
            <h6><i style="color: red;" class="fas fa-align-justify"></i> Số Lượng: {{$vieclam->soluong}}</h6>
          </div>
          <div class="col-6 chitiet">
            <h6><i style="color: red;" class="fas fa-map-marker-alt"></i> Địa Điểm Làm Việc: {{$vieclam->diachi}}</h6>
            <h6><i style="color: red;" class="far fa-calendar-alt"></i> Ngày Đăng: {{ \Carbon\Carbon::parse($vieclam->created_at)->format('d/m/Y')}}</h6>
            <h6><i style="color: red;" class="fas fa-clock"></i> Ngày Hết Hạn: {{ \Carbon\Carbon::parse($vieclam->ngayhethan)->format('d/m/Y')}}</h6>
          </div>
          <div class="col-12">
          @if (isset($vieclam->mota))
            <h6><i style="color: red;" class="fas fa-list"></i> Mô Tả Công Việc: </h6>
            <h6>{!!html_entity_decode($vieclam->mota)!!}</h6>
            @endif
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-3">
        <div>
          <img class="img-fluid wc-image ima" src="{{ asset('anh_tintuyendung/'.$vieclam->anh) }}" alt="" style="display: block; margin-left: auto; margin-right: auto">
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
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
      <h4 style="padding-bottom: 20px;">Tin Tuyển Dụng Gần Đây</h4>
      </div>

    @foreach($tintuyendungmoinhat as $tin)
      <div class="col-md-4">
        <div style="height: 428px" class="product-item">
          <a href="/vieclam/chi-tiet-viec-lam/{{$tin->id}}"><img height="232px" style="border-radius: 15px;" src="{{ asset('anh_tintuyendung/'.$tin->anh) }}" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="/vieclam/chi-tiet-viec-lam/{{$tin->id}}">
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
@endsection
