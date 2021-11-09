@extends('admin.masterlayout.masteradmin')

@section('title', 'Manager User')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h3 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Tin Tuyển Dụng Của {{$username->name}}</h3>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tin Tuyển Dụng
                    <form class="form-inline" action="" method="get">
                        <input type="search" name="search" id="">
                        <button class="btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="card-header">
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success hide">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="add">
                    <a style="float: right;" href="{{route('tintuyendung1.create')}}"><button class="btn btn-primary"><i class="fas fa-user-plus"></i>Thêm Tin Tuyển Dụng</button></a>
                </div>
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
                        </tbody>
                    </table>
                </div>
            </div>
            <h3 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Blog Của {{$username->name}}</h3>
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
                <div class="add">
                        <a style="float: right;" href="/blog/viet-blog"><button class="btn btn-primary"><i class="fas fa-user-plus"></i>Add Blog</button></a>
                    </div>
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
                            @foreach($blog as $al)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{$al->anh}}" width="100px" class="img-flush" alt=""></td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</main>
</div>
@endsection