@extends('admin.masterlayout.masteradmin')

@section('title', 'Update User')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding-top: 20px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Người Dùng</hq>
            <h4 class="text-center" style="background-color: blue; color: white; padding: 20px ;border-radius: 20px;">Sửa Người Dùng</h4>
            <!--important link source from "https://bootstrapious.com/p/bootstrap-registration-page"-->
            <!-- Navbar-->
            <header class="header">
                <nav class="navbar navbar-expand-lg navbar-light py-3">
                    <div class="container">
                        <!-- Navbar Brand -->
                        <a href="#" class="navbar-brand">
                        </a>
                    </div>
                </nav>
            </header>

            <div class="container">
                <div class="row py-5 mt-4 align-items-center">
                    <!-- For Demo Purpose -->
                    <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                        <img src="https://blackrockbusiness.com/wp-content/uploads/2017/05/quickbooks-enterprise-add-user.png" width="300px" alt="" class="img-fluid mb-3 d-none d-md-block">
                        <h1>Create an Account</h1>
                    </div>

                    <!-- Registeration Form -->
                    <div class="col-md-7 col-lg-6 ml-auto"> 
                        <form action="{{route('user.update',[$user->id])}}" method="post">
                            @csrf
                            {{method_field('put')}}
                            <div class="row">
                                <!-- First Name -->
                                <div class="input-group col-lg-6 mb-4">
                                    <input style="border-radius: 10px;" value="{{$user->name}}" required="" type="text" name="name" placeholder="Họ Và Tên" class="form-control bg-white border-left-0 border-md">
                                </div>
                                <div class="input-group col-lg-12 mb-4">
                                    <input style="border-radius: 10px;" value="{{$user->email}}" required="" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                                </div>

                                <div class="input-group col-lg-12 mb-4">
                                    <select name="role"  required="" class="form-control browser-default custom-select">
                                        <option class="hidden" selected disabled>Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Nhà Tuyển Dụng</option>
                                        <option value="3">Người Tìm Việc</option>
                                    </select>
                                </div>

                                <!-- Password -->
                                <ul class="alert text-danger">
                                @foreach ($errors->all() as $error)
                                <li style="color: red;font-family:monospace">{{ $error }}</li>
                                @endforeach
                                </ul>
                                <!-- Submit Button -->
                                <div class="form-group col-lg-12 mx-auto mb-0 text-center">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>

                                <!-- Divider Text -->
                                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                    <div class="border-bottom w-100 ml-5"></div>
                                    <div class="border-bottom w-100 mr-5"></div>
                                </div>

                                <!-- Social Login -->

                                <!-- Already Registered -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</div>
@endsection