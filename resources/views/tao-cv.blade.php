@extends('master')

@section('content')
<!-- content -->
<div class="services">
  <!-- content -->
  <div class="container-fluid" style="text-align: justify;">
    <h3 style="text-align: center;">Hãy tự mình thiết kế một CV riêng</h3>
    <div class="container" id="content">
      <div class="cvmau">
      <div class="row mt-4">
        <div class="col-md-10 text-center" id="tren">
          <div id="image-grid">
          </div><br>
          <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;">
          <img id="output" />
          <label for="file" class="lable">
          </label>
          <h2 contenteditable="" role="textbox" aria-multiline="true" spellcheck="false" onclick="myFunction()" class="sua" style="margin-top: 10px;"><b>Nguyễn Hữu Thường</b></h2>
          <h5 contenteditable="">Nhân Viên Phục Vụ</h5>
        </div>
      </div>
      <div class="row mt-4" style="background-color: white;">
        <div class="col-md-1"></div>
        <div class="col-md-5" id="trai">
          <div id="lienhe">
            <h5 class="tieude1"><b>
                <i class="fas fa-info-circle"></i>
                THÔNG TIN LIÊN HỆ</b></h5>
            <ul class="ul">
              <li><b>Giới tính: </b> <span contenteditable="" id="thongtin"> Nam</span></li>
              <li><b>Ngày sinh: </b> <span contenteditable="" id="thongtin">27/02/2002</span></li>
              <li><b>Điện thoại: </b> <span contenteditable="" id="thongtin">0338742355</span></li>
              <li><b>Facebook:</b> <span contenteditable="" id="thongtin">facebook.com</span></li>
              <li><b>Địa chỉ: </b> <span contenteditable="" id="thongtin">Đà nẵng</span></li>
            </ul>
          </div>
          <div id="tomtatbanthan">
            <h5 class="tieude1"><b>
                <i class="fa fa-user" aria-hidden="true"></i>
                TÓM TẮT BẢN THÂN</b></h5>
            <ul>
              <li contenteditable="">
                <p style="color: black">Đam mê muốn làm phục vụ ngay từ khi đang là học sinh.</p>
              </li>
              <li contenteditable="">
                <p style="color: black">Là một người điềm tĩnh, thích ứng nhanh với môi trường mới, không ngại khó khăn, hứng thú trong việc
                  tìm ra hướng giải quyết vấn đề.</p>
              </li>
            </ul>
          </div>
          <div id="kynang">
            <h5 class="tieude1"><b>
                <i class="fa fa-cogs" aria-hidden="true"></i>
                CÁC KỸ NĂNG</b></h5>
            <ul class="ul list-unstyled">
              <li contenteditable="">Giao tiếp</li>
              <input type="range" name="" id="" class="range" value="90">
              <li contenteditable="">Chăm sóc khách hàng</li>
              <input type="range" name="" id="" class="range" value="70">
              <li contenteditable="">Làm việc dưới áp lực</li>
              <input type="range" name="" id="" class="range" value="80">
              <li contenteditable="">Giải quyết vấn đề</li>
              <input type="range" name="" id="" class="range" value="60">
            </ul>
          </div>
          <div id="sothich">
            <h5 class="tieude1"><b>
                <i class="fa fa-pinterest"></i>
                SỞ THÍCH</b></h5>
            <p contenteditable="" style="color: black">Thích đọc sách, chơi thể thao đặc biệt là đá bóng.</p>
          </div>
        </div>
        <div class="col-md-5 phai">
          <div id="trinhdo">
            <h5 class="tieude"><b>
                <i class="fa fa-level-up" aria-hidden="true"></i>
                TRÌNH ĐỘ HỌC VẤN</b></h5>
            <div class="row">
              <div class="col-md-3">
                <p contenteditable=""><b>Hiện nay</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable="">Đang là sinh viên tại trường Đại Học Việt Hàn</p>
              </div>
            </div>
          </div>
          <div id="muctieu">
            <h5 class="tieude"><b>
                <i class="fa fa-bullseye" aria-hidden="true"></i>
                MỤC TIÊU NGHỀ NGHIỆP</b></h5>
            <p contenteditable="">Thích nghi nhanh với môi trường làm việc, cung cấp các dịch vụ chất lượng theo quy
              trình, quy định của nhà hàng/ cửa hàng, thu hút thêm nhiều khác hàng.</p>
          </div>
          <div id="kinhnghiem">
            <h5 class="tieude"><b>
                <i class="fas fa-briefcase"></i>
                KINH NGHIỆM LÀM VIỆC</b></h5>
            <div class="row">
              <div class="col-md-4">
                <p contenteditable=""><b>05/2019</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable=""><b> Coffee Garden</b></p>
                <p contenteditable="">Nhân viên phục vụ tại quán</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p contenteditable=""><b>11/2019</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable=""><b>Quán nhậu Hải Sản RUBI</b></p>
                <p contenteditable="">Nhân viên tiếp thị, phục vụ bàn tại quán</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p contenteditable=""><b>01/2020</b></p>
              </div>
              <div class="col-md-8">
                <p contenteditable=""><b>Nhà Hàng Thăng Long</b></p>
                <p contenteditable="">Dọn dẹp, setup bàn ăn, thay chén đĩa, dụng cụ cho khách</p>
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
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
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