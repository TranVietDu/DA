@extends('admin.masterlayout.masteradmin')

@section('title', 'Manager User')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Tin Tuyển Dụng</h1>
            <div class="page-heading contact-heading header-text">
                <div class="container">
                    <h3 class="register-heading text-center">Vui lòng nhập thông tin</h3>
                    <form action="" method="post">
                        @csrf
                        <div class="row register-form">
                            <div class="col-12">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Tiêu đề *" value="{{$tintuyendung->tieude}}" name="tieude" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Địa chỉ *" value="{{$tintuyendung->diachi}}" name="diachi" />
                                </div>
                                <div style="margin: 10px;" style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Kinh nghiệm" value="{{$tintuyendung->kinhnghiem}}" name="kinhnghiem" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Số lượng *" value="{{$tintuyendung->soluong}}" name="soluong" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <div class="form-control" name="gioitinh">Giới tính:
                                        <label class="radio inline">
                                            <input type="radio" name="gioitinh" value="Nam">
                                            <span> Nam </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gioitinh" value="Nữ">
                                            <span> Nữ </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gioitinh" value="Không">
                                            <span> Không </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Tên quán/cty *" value="{{$tintuyendung->tenquan}}" name="tenquan" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Lương" value="{{$tintuyendung->luong}}" name="luong" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <select class="form-control" name="nganhnghe">
                                        <option class="hidden" selected disabled>Ngành nghề *</option>
                                        <option selected>{{$tintuyendung->nganhnghe}}</option>
                                        <option >Phục vụ</option>
                                        <option>Bán hàng</option>
                                        <option>Gia sư</option>
                                    </select>
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <select class="form-control" name="thoigian">
                                        <option class="hidden" selected disabled>Thời gian</option>
                                        <option>Ca sáng: 7h30-11h30</option>
                                        <option>Ca chiều: 14h-18h</option>
                                        <option>Ca tối: 19h-23h</option>
                                    </select>
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="file" class="form-control" placeholder="" value="{{$tintuyendung->anh}}" name="anh" />
                                </div>
                            </div>
                            <div style="margin: 10px;" class="col-6">
                                <div class="form-group">
                                    <label for="" style="text-align: left">Mô tả thêm(nếu có):</label>
                                    <textarea name="mota" value="" rows="4" cols="75">{{$tintuyendung->mota}}</textarea>
                                </div>
                            </div>
                            
                            <div style="margin: 10px;" class="col-12 text-center">
                                <input type="submit" class="btnRegister btn-primary btn" value="Update" />
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
</main>
</div>
@endsection