@extends('master')

@section('content')
     <!-- content -->
  <div class="container-fluid content" style="text-align: justify;">
    <h3 style="text-align: center;">Hãy tự mình thiết kế một CV riêng</h3>
    <div class="container" id="content">
      <div class="row mt-4">
        <div class="col-md-10 text-center" id="tren">
          <div id="image-grid">
          </div><br>
          <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;">
          <img id="output" />
          <label for="file" class="lable">
          </label>
          <h2 contenteditable="" role="textbox" aria-multiline="true" spellcheck="false" onclick="myFunction()"
            class="sua" style="margin-top: 10px;"><b>Nguyễn Hữu Thường</b></h2>
          <h5 contenteditable="">Nhân Viên Phục Vụ</h5>
        </div>
      </div>
      <div class="row mt-4" style="background-color: white;">
        <div class="col-md-1"></div>
        <div class="col-md-5" id="trai">
          <div id="lienhe">
            <h5 class="tieude1"><b>
                <img src="https://cdn3.iconfinder.com/data/icons/communication-1/100/phone_contact_book-256.png" alt=""
                  style="height: 25px;">
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
                <img src="https://cdn1.iconfinder.com/data/icons/neutro-essential/32/user-256.png" alt=""
                  style="height: 25px;">
                TÓM TẮT BẢN THÂN</b></h5>
            <ul>
              <li contenteditable="">
                <p>Đam mê muốn làm phục vụ ngay từ khi đang là học sinh.</p>
              </li>
              <li contenteditable="">
                <p>Là một người điềm tĩnh, thích ứng nhanh với môi trường mới, không ngại khó khăn, hứng thú trong việc
                  tìm ra hướng giải quyết vấn đề.</p>
              </li>
            </ul>
          </div>
          <div id="kynang">
            <h5 class="tieude1"><b>
                <img
                  src="https://cdn1.iconfinder.com/data/icons/worker-and-employee-glyph/64/16_skill_ability_gear_employee_worker_job_business-256.png"
                  alt="" style="height: 25px;">
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
                <img src="https://cdn4.iconfinder.com/data/icons/sports-basic/64/darts-256.png" alt=""
                  style="height: 25px;">
                SỞ THÍCH</b></h5>
            <p contenteditable="">Thích đọc sách, chơi thể thao đặc biệt là đá bóng.</p>
          </div>
        </div>
        <div class="col-md-5" id="phai">
          <div id="trinhdo">
            <h5 class="tieude"><b>
                <img
                  src="https://cdn0.iconfinder.com/data/icons/business-diagram-and-graph/512/N_T_572Artboard_1_copy_8-256.png"
                  alt="" style="height: 25px;">
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
                <img src="https://cdn2.iconfinder.com/data/icons/complete-common-version-6-7/1024/mission-256.png"
                  alt="" style="height: 25px;">
                MỤC TIÊU NGHỀ NGHIỆP</b></h5>
            <p contenteditable="">Thích nghi nhanh với môi trường làm việc, cung cấp các dịch vụ chất lượng theo quy
              trình, quy định của nhà hàng/ cửa hàng, thu hút thêm nhiều khác hàng.</p>
          </div>
          <div id="kinhnghiem">
            <h5 class="tieude"><b>
                <img
                  src="https://cdn3.iconfinder.com/data/icons/personality-traits-2-solid/128/practical_experience_role_play_implement_operation-256.png"
                  alt="" style="height: 25px;">
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
  <div class="container text-right mt-5 mb-5">
    <button class="btn btn-danger" id="download"> Tải xuống</button>
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
          style="color: blue;">Chính sách Bảo Mật</span> của chúng TN123. Bạn có thể hủy thông báo qua email bất cứ lúc
        nào.</p>
    </div>
    <div class="col-md-2">

    </div>
  </div>
@endsection
