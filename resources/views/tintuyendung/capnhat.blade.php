@extends('master')

@section('content')
<div class="page-heading contact-heading header-text">
    <div class="container">
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>CẬP NHẬT TIN TUYỂN DỤNG</h3>
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
                        <h3 class="register-heading">Cập nhật</h3>

                        <form action="{{ route('tintuyendung1.update', $tintuyendung->id)}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row register-form">
                                <div class="col-12">
                                    @if (session('tb'))
                                        <div class="alert alert-danger">
                                            {{session('tb')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b class="float-left" for="">Tiêu đề :</b>
                                        <input type="text" class="form-control" placeholder="Tiêu đề *" value="{{$tintuyendung->tieude}}" name="tieude"/>
                                    </div>
                                    <div class="form-group">
                                        <b class="float-left" for="">Tên nhà tuyển tụng :</b>
                                        <input type="text" class="form-control" placeholder="Tên quán *" value="{{$tintuyendung->tenquan}}" name="tenquan"/>
                                    </div>
                                    <div class="form-group">
                                        <b class="float-left" for="">Địa chỉ :</b>
                                        <input type="text" class="form-control" placeholder="Địa chỉ" value="{{$tintuyendung->diachi}}" name="diachi"/>
                                    </div>
                                    <div class="form-group">
                                    <b class="float-left" for="">Ngành nghề :</b>
                                    <input type="text" class="form-control" placeholder="Ngành nghề" value="{{$tintuyendung->nganhnghe}}" name="nganhnghe"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <b class="float-left" for="">Số lượng :</b>
                                        <input type="number" class="form-control"  placeholder="Số lượng *" value="{{$tintuyendung->soluong}}" name="soluong"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="" value="{{ Auth::user()->id}}" name="user_id"/>
                                    </div>
                                    <div class="form-group">
                                    <b class="float-left" for="">Thời gian :</b>
                                    <input type="text" class="form-control"  placeholder="Thời gian *" value="{{$tintuyendung->thoigian}}" name="thoigian"/>
                                    </div>
                                    <div class="form-group">
                                    <b class="float-left" for="">Ảnh :</b>
                                        <input type="file" class="form-control" placeholder="" value="" name="anh"/>
                                    </div>
                                    <div class="form-group">
                                        <b class="float-left" for="">Lương :</b>
                                        <input type="text" class="form-control"  placeholder="Mức lương *" value="{{$tintuyendung->luong}}" name="luong"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <b for="" style="text-align: left">Ngày hết hạn</b>
                                        <input type="datetime" name="ngayhethan" value="{{$tintuyendung->ngayhethan}}" class="form-control" placeholder="Ngày hết hạn *"  />
                                    </div>
                                    <div class="form-group">
                                            <b for="" style="text-align: left">Mô tả thêm(nếu có):</b>
                                            <textarea name="mota" id="editor">
                                                {!!html_entity_decode($tintuyendung->mota)!!}
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
