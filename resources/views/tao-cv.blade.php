@extends('master')

@section('content')
<div class="services">
  <!-- content -->
  <div class="container" style="text-align: justify;">
    <div class="alert alert-success text-center" style="margin-top:-50px; margin-bottom:0px">
        <h3 style="color:black;">Hãy tự mình thiết kế một CV riêng</h3>
    </div>
    <div id="content" class="container">
      <div class="cvmau">
      <div class="row mt-4">
        <div class="col-md-10 text-center" id="tren">
          <div id="image-grid">
          </div><br>
          <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;">
          <img id="output" />
          <label for="file" class="lable">
          </label>
          <h2 contenteditable="true" onclick="myFunction()" class="sua" style="margin: 10px 0;"><b>Nguyễn Hữu Thường</b></h2>
          <h5 contenteditable="true">Nhân Viên Phục Vụ</h5>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-1"></div>
        <div class="col-md-5" id="trai">
          <div id="lienhe" style="margin-bottom: 10px">
            <h5 class="tieude1"><b>
                <i class="fas fa-info-circle"></i>
                THÔNG TIN LIÊN HỆ</b></h5>
            <ul class="ul">
              <li>Giới tính: <span contenteditable="true"> Nam</span></li>
              <li>Ngày sinh: <span contenteditable="true">27/02/2002</span></li>
              <li>Điện thoại: <span contenteditable="true">0338742355</span></li>
              <li>Facebook:<span contenteditable="true">facebook.com</span></li>
              <li>Địa chỉ: <span contenteditable="true">Đà nẵng</span></li>
            </ul>
          </div>
          <div id="tomtatbanthan" style="margin-bottom: 10px">
            <h5 class="tieude1"><b>
                <i class="fa fa-user" aria-hidden="true"></i>
                TÓM TẮT BẢN THÂN</b></h5>
            <ul>
              <li contenteditable="true">
                <p style="color: white">Đam mê muốn làm phục vụ ngay từ khi đang là học sinh.</p>
              </li>
              <li contenteditable="true">
                <p style="color: white">Là một người điềm tĩnh, thích ứng nhanh với môi trường mới, không ngại khó khăn, hứng thú trong việc
                  tìm ra hướng giải quyết vấn đề.</p>
              </li>
            </ul>
          </div>
          <div id="kynang" style="margin-bottom: 10px">
            <h5 class="tieude1"><b>
                <i class="fa fa-cogs" aria-hidden="true"></i>
                CÁC KỸ NĂNG</b></h5>
            <ul class="ul list-unstyled">
              <li contenteditable="true">Giao tiếp</li>
              <input type="range" name="" id="" class="range" value="90">
              <li contenteditable="true">Chăm sóc khách hàng</li>
              <input type="range" name="" id="" class="range" value="70">
              <li contenteditable="true">Làm việc dưới áp lực</li>
              <input type="range" name="" id="" class="range" value="80">
              <li contenteditable="true">Giải quyết vấn đề</li>
              <input type="range" name="" id="" class="range" value="60">
            </ul>
          </div>
          <div id="sothich" style="margin-bottom: 10px">
            <h5 class="tieude1"><b>
                <i class="fa fa-pinterest"></i>
                SỞ THÍCH</b></h5>
            <p contenteditable="true" style="color: white">Thích đọc sách, chơi thể thao đặc biệt là đá bóng.</p>
          </div>
        </div>
        <div class="col-md-5 phai">
          <div id="trinhdo">
            <h5 class="tieude"><b>
                <i class="fa fa-level-up" aria-hidden="true"></i>
                TRÌNH ĐỘ HỌC VẤN</b></h5>
            <div class="row">
              <div class="col-md-3">
                <p contenteditable="true"><b>Hiện nay</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable="true">Đang là sinh viên tại trường Đại Học Việt Hàn</p>
              </div>
            </div>
          </div>
          <div id="muctieu">
            <h5 class="tieude"><b>
                <i class="fa fa-bullseye" aria-hidden="true"></i>
                MỤC TIÊU NGHỀ NGHIỆP</b></h5>
            <p contenteditable="true">Thích nghi nhanh với môi trường làm việc, cung cấp các dịch vụ chất lượng theo quy
              trình, quy định của nhà hàng/ cửa hàng, thu hút thêm nhiều khác hàng.</p>
          </div>
          <div id="kinhnghiem">
            <h5 class="tieude"><b>
                <i class="fas fa-briefcase"></i>
                KINH NGHIỆM LÀM VIỆC</b></h5>
            <div class="row">
              <div class="col-md-4">
                <p contenteditable="true"><b>05/2019</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable="true"><b> Coffee Garden</b></p>
                <p contenteditable="true">Nhân viên phục vụ tại quán</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p contenteditable="true"><b>11/2019</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable="true"><b>Quán nhậu Hải Sản RUBI</b></p>
                <p contenteditable="true">Nhân viên tiếp thị, phục vụ bàn tại quán</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p contenteditable="true"><b>01/2020</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable="true"><b>Nhà Hàng Thăng Long</b></p>
                <p contenteditable="true">Dọn dẹp, setup bàn ăn, thay chén đĩa, dụng cụ cho khách</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      </div>
    </div>

    <div class="div">
      <div class="container text-right mt-5 mb-5">
        <button class="btn btn-primary" id="download"> Tải xuống</button>
      </div>
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Làm thế nào để viết được 1 CV hoàn thiện ?</h4>
                    <p>Cách viết CV ấn tượng, tạo CV xin việc cho người mới bắt đầu.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 text-right">
                    <a href="cv-mau" class="filled-button">Tham khảo cách viết CV chuẩn nhất.</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
