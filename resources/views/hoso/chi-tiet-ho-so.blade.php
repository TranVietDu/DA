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
        <img width="100%" src="https://br-art.vn/wp-content/uploads/2018/05/31166726_1633894463367332_884926566222528512_o.jpg" alt="">
      </div>
      <div class="col-md-8 text-justify hososs">
        <h5>Họ Và Tên: {{$hoso->ten}}</h5>
        <h5>Ngày Sinh: {{$hoso->ngaysinh}}</h5>
        <h5>Họ Và Tên: {{$hoso->gioitinh}}</h5>
        <h5>Ngành Nghề Mong Muốn: {{$hoso->nganhnghe}}</h5>
        <h5>Nhu Cầu Việc Làm: {{$hoso->mota}}</h5>
        <h5>Địa Chỉ: {{$hoso->diachi}}</h5>
        <h5>Liên Hệ: <br>
          Email:{{$hoso->email}} <br>
          Số Điện Thoại:{{$hoso->sdt}}
        </h5>
      </div>
    </div>
  </div>
  <div style="padding-top: 40px;" class="col-md-12">
    <h5 class="text-center">Tin Tìm Việc Gần Đây</h5>
    <div class="row">
      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img src="https://www.paratime.vn/wp-content/uploads/2019/09/timestudio.vn-headshot-eye-glasses-02.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Tên Người Viết</h4>
            </a>
            <h6>Ngành Nghề</h6>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Viết</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa Chỉ</strong>
            </small>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="product-item">
          <a href="vieclam/chi-tiet-viec-lam"><img src="https://www.paratime.vn/wp-content/uploads/2019/09/timestudio.vn-headshot-eye-glasses-02.jpg" alt=""></a>
          <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
          <div class="down-content">
            <a href="vieclam/chi-tiet-viec-lam">
              <h4>Tên Người Viết</h4>
            </a>
            <h6>Ngành Nghề</h6>
            <small>
              <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Viết</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Location"><i class="fa fa-map-marker"></i> Địa Chỉ</strong>
            </small>
          </div>
        </div>
      </div>

    <div class="col-md-4">
      <div class="product-item">
        <a href="vieclam/chi-tiet-viec-lam"><img src="https://www.paratime.vn/wp-content/uploads/2019/09/timestudio.vn-headshot-eye-glasses-02.jpg" alt=""></a>
        <i style="color: red;padding-right: 5px;" class="float-right"><b class="test">New</b></i>
        <div class="down-content">
          <a href="vieclam/chi-tiet-viec-lam">
            <h4>Tên Người Viết</h4>
          </a>
          <h6>Ngành Nghề</h6>
          <small>
            <strong title="Posted on"><i class="fa fa-calendar"></i> Ngày Viết</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Location"><i class="fa fa-map-marker"></i> Địa Chỉ</strong>
          </small>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>



@endsection