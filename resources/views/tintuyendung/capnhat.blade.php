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

                        <form action="{{ route('tintuyendung.update', $tintuyendung->id)}}" method="post">
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
                                        <input type="text" class="form-control" value="{{ $tintuyendung->tieude }}" name="tieude"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->diachi }}" name="diachi"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->kinhnghiem }}" name="kinhnghiem"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->soluong }}" name="soluong"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->soluong }}" name="soluong"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->tenquan }}" name="tenquan"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->luong }}" name="luong"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->nganhnghe }}" name="nganhnghe"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $tintuyendung->thoigian }}" name="thoigian"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" value="{{ $tintuyendung->anh }}" name="anh"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                            <label for="" style="text-align: left">Mô tả thêm(nếu có):</label>
                                            <textarea id="" name="mota" rows="4" cols="75" value="{{ $tintuyendung->mota}}">
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
