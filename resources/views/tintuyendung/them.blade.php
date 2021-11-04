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
                <a href="/tintuyendung/danhsach" style="color:rgb(8, 8, 8); border-radius: 20px; padding:15px; background-color: rgb(222, 226, 164)">Quản Lí Tin</a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Vui lòng nhập thông tin</h3>

                        <form action="{{ route('tintuyendung.store')}}" method="post">
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
                                        <input type="text" class="form-control" placeholder="Tiêu đề *" value="" name="tieude"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Tên quán *" value="" name="tenquan"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Địa chỉ" value="" name="diachi"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="nganhnghe">
                                            <option class="hidden"  selected disabled>Ngành nghề *</option>
                                            <option>Phục vụ</option>
                                            <option>Bán hàng</option>
                                            <option>Gia sư</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Số lượng *" value="" name="soluong"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="" value="{{ Auth::user()->id}}" name="user_id"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="thoigian">
                                            <option class="hidden"  selected disabled>Thời gian</option>
                                            <option>Ca sáng: 7h30-11h30</option>
                                            <option>Ca chiều: 14h-18h</option>
                                            <option>Ca tối: 19h-23h</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control" placeholder="" value="" name="anh" style="height:47px"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Mức lương *" value="" name="luong"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                            <label for="" style="text-align: left">Mô tả thêm(nếu có):</label>
                                            <textarea name="mota" rows="4" cols="75">
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
