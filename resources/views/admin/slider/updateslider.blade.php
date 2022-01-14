@extends('admin.masterlayout.masteradmin')

@section('title', 'Cập nhật slide')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Slider</h1>
            <h4 class="text-center" style="background-color: blue; color: white; padding: 20px ;border-radius: 20px;">Update Slider</h4>
            <form action="{{route('slider.update',[$slider->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <!-- Name input -->
                <img width="100%" src="{{ asset('slider/'.$slider->image)}}" alt="">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Ảnh Slider</label>
                    <input type="file" name="anh" id="form4Example1" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Tên Slider</label>
                    <input type="text" value="{{$slider->name}}" required="" name="ten" id="form4Example1" class="form-control" />
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Mô Tả</label>
                    <textarea name="mota" required="" class="form-control" id="form4Example3" rows="4">{{$slider->mota}}</textarea>
                </div>
                <!-- Checkbox -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Tình Trạng:</label>
                    <select name="status" class="browser-default custom-select">
                        <option value="0" {{($slider->trangthai === 0) ? 'Selected' : ''}}>Ẩn</option>
                        <option value="1" {{($slider->trangthai === 1) ? 'Selected' : ''}}>Hiển Thị</option>
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sửa</button>
            </form>
        </div>
    </main>
</div>
@endsection