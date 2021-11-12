@extends('master')

@section('content')
<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="container blog">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-md-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3>Cập nhật</h3>
                                @if (session('tb'))
                                        <div class="alert alert-success">
                                            {{session('tb')}}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                     @endif
                                    </div>
                            <form action="{{ route('capnhat', $user->id)}}" method="post">
                                {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{$user->name}}" name="name"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{$user->email}}" name="email"/>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left: auto; margin-right:auto">
                                    <button type="submit" class="btn btn-primary">Xong</button>
                                    </div>
                                </div>
                            </form>
                            <a href="/doi-mat-khau/{{$user->id}}">Đổi mật khẩu</a>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
