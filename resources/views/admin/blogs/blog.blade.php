@extends('admin.masterlayout.masteradmin')

@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Blogs</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <a style="float: right;" href="/admin/user/add"><button class="btn btn-primary"><i class="fas fa-plus"></i>Thêm</button></a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Tên tác giả</th>
                                <th>Ảnh</th>
                                <th>Xem</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tran Viet Du</td>
                                <td>tranvietdu054@gmail.com</td>
                                <td>Hue</td>
                                <td><a href=""><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                                <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</main>
</div>
@endsection
