@extends('master')

@section('content')
<div class="services">
    <div class="container">
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Đăng công việc mới</h3>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <a href="/tintuyendung/danhsach" style="color:rgb(8, 8, 8); border-radius: 20px; padding:15px; background-color: rgb(222, 226, 164)">QUẢN LÍ TIN</a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Vui lòng nhập thông tin</h3>

                        <form action="{{ route('tintuyendung1.store')}}" method="post" enctype="multipart/form-data">
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
                                    <b style="float: left;">Tiêu đề :</b>
                                        <input type="text" class="form-control" placeholder="Tiêu đề *" value="{{old('tieude')}}" name="tieude"/>
                                    </div>
                                    <div class="form-group">
                                    <b style="float: left;">Tên quán :</b>
                                        <input type="text" class="form-control" placeholder="Tên quán *" value="{{old('tenquan')}}" name="tenquan"/>
                                    </div>
                                    <div class="form-group">
                                    <b style="float: left;">Địa điểm làm việc :</b>
                                        <input type="text" class="form-control" placeholder="Địa chỉ" value="{{old('diachi')}}" name="diachi"/>
                                    </div>
                                    <div class="form-group">
                                    <b style="float: left;">Ngành nghề :</b>
                                    <input type="text" class="form-control" placeholder="Ngành nghề" value="{{old('nganhnghe')}}" name="nganhnghe"/>
                                        <!-- <select class="form-control" name="nganhnghe">
                                            <option class="hidden"  selected disabled>Ngành nghề *</option>
                                            <option>Phục vụ</option>
                                            <option>Bán hàng</option>
                                            <option>Gia sư</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b style="float: left;">Số lượng :</b>
                                        <input type="number" class="form-control"  placeholder="Số lượng *" value="{{old('soluong')}}" name="soluong"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="" value="{{ Auth::user()->id}}" name="user_id"/>
                                    </div>
                                    <div class="form-group">
                                    <b style="float: left;">Thời gian làm việc :</b>
                                    <input type="text" class="form-control"  placeholder="Thời gian *" value="{{old('thoigian')}}" name="thoigian"/>
                                        <!-- <select class="form-control" name="thoigian">
                                            <option class="hidden"  selected disabled>Thời gian</option>
                                            <option>Ca sáng: 7h30-11h30</option>
                                            <option>Ca chiều: 14h-18h</option>
                                            <option>Ca tối: 19h-23h</option>
                                        </select> -->
                                    </div>

                                    <div class="form-group">
                                    <b style="float: left;">Ảnh về quán :</b>
                                        <input type="file" class="form-control" placeholder="" value="{{old('anh')}}" name="anh"/>
                                    </div>
                                    <div class="form-group">
                                    <b style="float: left;">Lương :</b>
                                        <input type="text" class="form-control"  placeholder="Mức lương *" value="{{old('luong')}}" name="luong"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group">
                                <b style="float: left;">Ngày hết hạn ứng tuyển :</b>
                                        <input type="datetime-local" name="ngayhethan" class="form-control" placeholder="Ngày hết hạn *" value="{{old('ngayhethan')}}" />
                                    </div>
                                    <div class="form-group">
                                    <b style="">Mô tả công việc :</b>
                                            <textarea name="mota" id="editor">
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
