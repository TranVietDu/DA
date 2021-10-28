@extends('master')

@section('content')

<div class="page-heading contact-heading header-text">
    <div class="container">
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Đăng hồ sơ xin việc mới</h3>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <a href="/tintimviec/quan-li-tin" style="color:rgb(8, 8, 8); border-radius: 20px; padding:15px; background-color: rgb(222, 226, 164)">Quản Lí Tin</a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Vui lòng nhập thông tin</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Họ và tên *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Địa chỉ Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Số năm kinh nghiệm *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Mức lương mong muốn *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Ngành nghề mong muốn</option>
                                        <option>Phục vụ</option>
                                        <option>Bán hàng</option>
                                        <option>Gia sư</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Thời gian mong muốn</option>
                                        <option>Ca sáng: 7h30-11h30</option>
                                        <option>Ca chiều: 14h-18h</option>
                                        <option>Ca tối: 19h-23h</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-control">Giới tính:
                                        <label class="radio inline">
                                            <input type="radio" name="gioitinh" value="Nam" checked>
                                            <span> Nam </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gioitinh" value="Nữ">
                                            <span> Nữ </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="" style="text-align: left">Mô tả thêm(nếu có):</label>
                                    <textarea id="w3review" name="w3review" rows="4" cols="75">
                                    </textarea>
                                    <input type="submit" class="btnRegister"  value="Đăng"/>
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

</div>
@endsection
