@extends('admin.masterlayout.masteradmin')

@section('title', 'Manager User')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Slider</h1>
            <h4 class="text-center" style="background-color: blue; color: white; padding: 20px ;border-radius: 20px;">Thêm Slider</h4>
            <ul class="alert text-danger">
                                @foreach ($errors->all() as $error)
                                <li style="color: red;font-family:monospace">{{ $error }}</li>
                                @endforeach
                            </ul>
            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Tên Slider</label>
                    <input type="text" required="" name="ten" id="form4Example1" class="form-control" />
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Ảnh</label>
                    <input type="file" required="" name="anh" id="form4Example2" class="form-control" />
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Mô Tả</label>
                    <textarea name="mota" required="" class="form-control" id="form4Example3" rows="4"></textarea>
                </div>
                <!-- Checkbox -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Tình Trạng:</label>
                    <select name="status" class="browser-default custom-select">
                        <option value="0">Ẩn</option>
                        <option selected value="1">Hiển Thị</option>
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Thêm</button>
            </form>
        </div>
    </main>
</div>
@endsection