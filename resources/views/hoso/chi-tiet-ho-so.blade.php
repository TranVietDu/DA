@extends('master')

@section('content')
<!-- Page Content -->
  <style>
    .chitietcv h6{
      padding-bottom: 10px;
    }
    .anhcanhan{
      height: 300px;
      width: 100%;
    }
  </style>
  <div class="container">
    <h2 style="padding: 40px;color:red" class="text-center">Thông tin hồ sơ</h2>
   <div class="row">
    <div class="col-md-8 chitietcv">
      <table width='100%'>
        <tr>
          <td><h6>Họ và tên:</h6></td>
          <td><h6><b>{{$hoso->ten}}</b></h6></td>
        </tr>
        <tr>
          <td><h6>Giới tính:</h6></td>
          <td><h6>{{$hoso->gioitinh}}</h6></td>
        </tr>
        <tr>
          <td><h6>Ngày sinh:</h6></td>
          <td><h6>{{ \Carbon\Carbon::parse($hoso->ngaysinh)->format('d/m/Y')}}</h6></td>
        </tr>
        <tr>
          <td><h6>Ngày nghề mong muốn:</h6></td>
          <td><h6>{{$hoso->nganhnghe}}</h6></td>
        </tr>
        <tr>
          <td><h6>Địa chỉ liên lạc:</h6></td>
          <td><h6>{{$hoso->diachi}}</h6></td>
        </tr>
        <tr>
          <td><h6>Email:</h6></td>
          <td><h6><a href="mailto: {{$hoso->email}}">{{$hoso->email}}</a></h6></td>
        </tr>
        <tr>
          <td><h6>Số điện thoại:</h6></td>
          <td><h6>{{$hoso->sdt}}</h6></td>
        </tr>
        <tr>
          <td><h6>Ngày đăng:</h6></td>
          <td><h6>{{ \Carbon\Carbon::parse($hoso->created_at)->format('d/m/Y')}}</h6></td>
        </tr>
        <tr>
            <td><h6>Mô tả bản thân:</h6></td>
            <td><h6>{!!html_entity_decode($hoso->mota)!!}</h6></td>
          </tr>
      </table>
    </div>
    <div class="col-md-4">
      <img class="anhcanhan" src="{{asset('anh_tintimviec/'.$hoso->anh)}}" alt="">
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
