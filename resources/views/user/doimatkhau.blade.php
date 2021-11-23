@extends('master')

@section('content')
<div class="page-heading contact-heading header-text" style="background-color: rgb(52, 78, 134)">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-md-6 blog4">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3>Đổi mật khẩu</h3>
                                    @if (session('tb'))
                                        <div class="alert alert-success">
                                            {{session('tb')}}
                                        </div>
                                    @endif
                                    @if (session('loi'))
                                        <div class="alert alert-danger">
                                            {{session('loi')}}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <form action="{{ route('doimatkhau', $user->id)}}" method="post">
                                {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Mật khẩu hiện tại" value="" name="password"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Mật khẩu mới" value="" name="newpassword"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới" value="" name="confirm_newpassword"/>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left: auto; margin-right:auto">
                                        <button type="submit" class="btn btn-primary">Xong</button>
                                        </div>
                                </div>
                            </form>
                            <a href="/cap-nhat-thong-tin/{{$user->id}}">Trở lại</a>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</div>
@endsection
