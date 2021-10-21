@extends('master')

@section('content')
      <!-- content -->
  <div class="container-fluid">
    <div class="container">
      <div class="row" style="margin-top: 160px;">
        <div class="col-md-12 top">
          <h4>Tất cả các công việc phục vụ tại Đà Nẵng(20)</h4>
          <hr>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aIe8-RfkYgYXQhXsXAKEMzGhuYtk5QEH" width="100%"
        height="600px"></iframe>
    </div>
    <hr>
    <div class="row mb-2" style="background-color: rgb(212, 214, 105); padding: 20px 5px;">
      <div class="col-md-2">

      </div>
      <div class="col-md-8 text-center">
        <h4>Đăng ký nhận email việc làm mới nhất</h4>
        <p>Hàng trăm người đã có việc làm sau khi để lại email tại đây</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="nhthuong@gmail.com">
          <div class="input-group-append">
            <button class="btn btn-outline-success" type="button">Đăng ký ngay</button>
          </div>
        </div>
        <p>Bằng cách đăng ký qua gmail, bạn đồng ý với <span style="color: blue;">Điều khoản sử dụng</span> và <span
            style="color: blue;">Chính sách Bảo Mật</span> của chúng TN123. Bạn có thể hủy thông báo qua email bất cứ
          lúc nào.</p>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
@endsection
