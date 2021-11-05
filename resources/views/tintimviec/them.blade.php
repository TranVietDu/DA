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
                <a href="/tintimviec/danhsach" style="color:rgb(8, 8, 8); border-radius: 20px; padding:15px; background-color: rgb(222, 226, 164)">Quản Lí Tin</a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Vui lòng nhập thông tin</h3>
                            <form action="{{route('tintimviec1.store')}}" method="post" enctype="multipart/form-data">
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
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Họ và tên *" value="{{old('ten')}}" name="ten"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="ngaysinh" class="form-control" placeholder="Ngày sinh *" value="{{old('ngaysinh')}}" />
                                        </div>
                                        <div class="form-group" style="float: left;">
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
                                                    <input type="radio" name="gioitinh" value="Khác">
                                                    <span> Khác </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại *" value="{{old('sdt')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="{{old('email')}}" name="email"/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="nganhnghe">
                                                <option class="hidden"  selected disabled>Ngành nghề mong muốn</option>
                                                <option>Phục vụ</option>
                                                <option>Bán hàng</option>
                                                <option>Gia sư</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="" value="{{ Auth::user()->id}}" name="user_id"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Địa chỉ" value="{{old('diachi')}}" name="diachi"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" placeholder="Ảnh về bản thân" value="{{old('anh')}}" name="anh"/>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="" style="text-align: left">Mô tả thêm(nếu có):</label>
                                            <textarea name="mota" rows="4" cols="75">
                                                {{old('mota')}}
                                            </textarea>
                                            <input type="submit" class="btnRegister"  value="Đăng"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

</div>
@endsection
