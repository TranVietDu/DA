@extends('admin.masterlayout.masteradmin')

@section('title', 'Manager User')


@section('content')
<div id="layoutSidenav_content">
    <h3 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Tin Của {{$username->name}}</h3>
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h5 style="padding: 20px 0px;" class="text-center">Tin Tuyển Dụng</h5>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tin Tuyển Dụng
                </div>
                <div class="card-header">
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success hide">
                    {{session('thongbao')}}
                </div>
                @endif
                <div style="overflow-x:auto;" class="card-bod">
                    <table id="datatablesSimpl" class="table table-bordered border border-info">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">STT</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tiêu Đề</th>
                                <th scope="col">Ngành Nghề</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Xem Chi Tiết</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @if($userposttuyen->isEmpty())
                            <h6 style="margin-top: 10px;color:red" class="col-md-12 text-center"> Chưa đăng tin tuyển dụng nào</h6>
                            @else
                            @foreach($userposttuyen as $al)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{ asset('anh_tintuyendung/'.$al->anh) }}" width="100px" class="img-flush" alt=""></td>
                                <td>{{$al->tieude}}</td>
                                <td>{{$al->nganhnghe}}</td>
                                <td>{{$al->soluong}}</td>
                                <td><a href="/vieclam/chi-tiet-viec-lam/{{$al->id}}"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                                <td><a href="{{route('tintuyendung1.edit',[$al->id])}}"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                <td>
                                    <form action="{{route('tintuyendung.destroy',[$al->id])}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <h5 style="padding: 20px 0px;" class="text-center">Blog</h5>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Blog
                </div>
                <div class="card-header">
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success hide">
                    {{session('thongbao')}}
                </div>
                @endif
                <div style="overflow-x:auto;" class="card-body">
                    <table class="table table-bordered border border-info" id="datatablesSiple">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">STT</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tác Giả</th>
                                <th scope="col">Tiêu Đề</th>
                                <th scope="col">Nội Dung</th>
                                <th scope="col">Xem Chi Tiết</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @if($blog->isEmpty())
                            <h6 style="margin-top: 10px;color:red" class="col-md-12 text-center"> Chưa đăng blog nào</h6>
                            @else
                            @foreach($blog as $al)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset('anh_blog/'.$al->anh)}}" width="100px" class="img-flush" alt=""></td>
                                <td>{{$al->tennguoiviet}}</td>
                                <td>{{$al->tieude}}</td>
                                <td>{{$al->noidung}}</td>
                                <td><a href="/blog/chi-tiet-blog/{{$al->id}}"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                                <td><a href="/blog/cap-nhat-blog/{{$al->id}}"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                <td>
                                    <form action="{{route('blog.destroy',[$al->id])}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <h5 style="padding: 20px 0px;" class="text-center">Tin Tìm Việc</h5>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tin Tìm Việc
                </div>
                <div class="card-header">
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success hide">
                    {{session('thongbao')}}
                </div>
                @endif
                <div style="overflow-x:auto;" class="card-body">
                    <table class="table table-bordered border border-info" id="datatablesSiple">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">STT</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Giới Tính</th>
                                <th scope="col">Ngành nghề</th>
                                <th scope="col">Xem Chi Tiết</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php
                            $i=1;
                            @endphp
                            @if($userposttim->isEmpty())
                            <h6 style="margin-top: 10px;color:red" class="col-md-12 text-center"> Chưa đăng tin tìm việc nào</h6>
                            @else
                            @foreach($userposttim as $al)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{ asset('anh_tintimviec/'.$al->anh) }}" width="100px" class="img-flush" alt=""></td>
                                <td>{{$al->ten}}</td>
                                <td>{{$al->gioitinh}}</td>
                                <td>{{$al->nganhnghe}}</td>
                                <td><a href="/hoso/chi-tiet-ho-so/{{$al->id}}"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                                <td><a href="{{route('tintimviec1.edit',[$al->id])}}"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                <td>
                                    <form action="{{route('tintimviec.destroy',[$al->id])}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</main>
</div>
@endsection