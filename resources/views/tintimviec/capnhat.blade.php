@extends('master')

@section('content')
<div class="page-heading contact-heading header-text">
    <div class="container">
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>CẬP NHẬT TIN TÌM VIỆC</h3>
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
                        <h3 class="register-heading">Cập nhật</h3>

                        <form action="{{ route('tintimviec1.update', $tintimviec->id) }}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
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
                                        <b style="float: left;">Tên</b>
                                        <input type="text" class="form-control" value="{{ $tintimviec->ten }}" name="ten"/>
                                    </div>
                                    <div class="form-group">
                                        <b style="float: left;">Ngày sinh</b>
                                        <input type="text" class="form-control" value="{{ $tintimviec->ngaysinh }}" name="ngaysinh"/>
                                    </div>
                                    <div class="form-group">
                                        <b style="float: left;">Giới tính</b>
                                        <input type="text" class="form-control" value="{{ $tintimviec->gioitinh }}" name="gioitinh"/>
                                    </div>
                                    <div class="form-group">
                                        <b style="float: left;">Số ĐT</b>
                                        <input type="text" class="form-control" value="{{ $tintimviec->sdt }}" name="sdt"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="" value="{{ Auth::user()->id}}" name="user_id"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b style="float: left;">Email</b>
                                        <input type="email" class="form-control" value="{{ $tintimviec->email }}" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <b style="float: left;">Ngành nghề</b>
                                        <input type="text" class="form-control" value="{{ $tintimviec->nganhnghe }}" name="nganhnghe"/>
                                    </div>
                                    <div class="form-group">
                                        <b style="float: left;">Địa chỉ</b>
                                        <input type="text" class="form-control" value="{{ $tintimviec->diachi }}" name="diachi"/>
                                    </div>
                                    <div class="form-group">
                                        <b style="float: left;">Ảnh bản thân</b>
                                        <input type="file" class="form-control" value="{{ $tintimviec->anh }}" name="anh"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                            <label for="" style="text-align: left">Mô tả thêm(nếu có):</label>
                                            <textarea name="mota" id="editor">
                                                {!!html_entity_decode($tintimviec->mota)!!}
                                            </textarea>
                                        <input type="submit" class="btnRegister"  value="Xong"/>
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
