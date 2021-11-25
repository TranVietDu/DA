@extends('admin.masterlayout.masteradmin')

@section('title', 'Cập nhật liên hệ')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Tin Tuyển Dụng</h1>
            <div class="page-heading contact-heading header-text">
                <div class="container">
                    <h3 class="register-heading text-center">Vui lòng nhập thông tin</h3>
                    <form action="{{route('lienhe.update',[$lienhe->id])}}" method="post">
                        @csrf
                        {{method_field('put')}}
                        <div class="row register-form">
                            <div class="col-12">
                            </div>
                            <div class="col-md-12">
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" required="" class="form-control" placeholder="Tiêu Đề*" value="{{$lienhe->tieude}}" name="tieude" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" required="" class="form-control" placeholder="Địa chỉ*" value="{{$lienhe->diachi}}" name="diachi" />
                                </div>
                                <div style="margin: 10px;" style="margin: 10px;" class="form-group">
                                    <input type="text" required="" class="form-control" placeholder="Giới Thiệu*" value="{{$lienhe->gioithieu}}" name="gioithieu" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" required="" class="form-control" placeholder="Facebook*" value="{{$lienhe->facebook}}" name="facebook" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="Twitter" value="{{$lienhe->twitter}}" name="twitter" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="in" value="{{$lienhe->in}}" name="in" />
                                </div>
                                <div style="margin: 10px;" class="form-group">
                                    <input type="text" class="form-control" placeholder="be" value="{{$lienhe->be}}" name="be" />
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