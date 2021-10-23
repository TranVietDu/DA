@extends('admin.masterlayout.masteradmin')

@section('title', 'Manager User')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Người Dùng</h1>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Người Dùng
                </div>
                <div class="card-header">
                    <a style="float: right;" href="/admin/user/add"><button class="btn btn-primary"><i class="fas fa-user-plus"></i>Thêm</button></a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Ngày Sinh</th>
                                <th>Role</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tran Viet Du</td>
                                <td>tranvietdu054@gmail.com</td>
                                <td>Hue</td>
                                <td>07/03/2002</td>
                                <td>1</td>
                                <td><a href=""><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
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
