@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-color: rgb(29, 196, 176)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Thông Tin Hồ Sơ</h4>
          <h2>{{$hoso->ten}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div style="box-shadow: 5px 10px 18px;" class="col-m">
      <div style="padding-top: 50px;" class="row">
        <div class="col-md-4">
          <img width="100%" src="{{ asset('anh_tintimviec/'.$hoso->anh) }}" alt="">
        </div>
        <div class="col-md-8 text-justify hososs">
          <h5>Họ Và Tên: {{$hoso->ten}}</h5>
          <h5>Ngày Sinh: {{$hoso->ngaysinh}}</h5>
          <h5>Họ Và Tên: {{$hoso->gioitinh}}</h5>
          <h5>Ngành Nghề Mong Muốn: {{$hoso->nganhnghe}}</h5>
          <h5>Nhu Cầu Việc Làm: {!!html_entity_decode($hoso->mota)!!}</h5>
          <h5>Địa Chỉ: {{$hoso->diachi}}</h5>
          <h5>Liên Hệ: <br>
            Email:{{$hoso->email}} <br>
            Số Điện Thoại:{{$hoso->sdt}}
          </h5>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <h3 style="padding: 60px 0;" class="text-center">Tin Tìm Việc Gần Đây</h3>
      <div class="row">
        @foreach($tintimviecmoinhat as $tin)
        <div class="col-md-4">
          <div class="product-item">
            <a href="/hoso/chi-tiet-ho-so/{{$tin->id}}"><img height="200px" src="{{ asset('anh_tintimviec/'.$tin->anh) }}" alt=""></a>
            <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
            <div class="down-content">
              <a href="/hoso/chi-tiet-ho-so/{{$tin->id}}">
                <h4>{{$tin->ten}}</h4>
              </a>
              <h6>{{$tin->nganhnghe}}</h6>
              <small>
                <strong title="Posted on"><i class="fa fa-calendar"></i> {{$tin->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                <strong title="Location"><i class="fa fa-map-marker"></i> {{$tin->diachi}}</strong>
              </small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


@endsection