@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí việc làm đã ứng tuyển</h3>
          <div class="row">
              <div class="col-md-12">
                    <table class="table table-bordered border border-info table-striped" id="datatablesSiple">
                        <thead class="text-center" style="color: #007bff;">
                            <tr>
                               <th >Tiêu Đề</th>
                               <th >Tên Quán</th>
                               <th >Địa Chỉ</th>
                               <th >Ngành nghề</th>
                               <th >Ảnh</th>
                               <th >Xem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vieclamuts as $al)
                            <tr>
                                <td>{{$al->tieude}}</td>
                                <td>{{$al->tenquan}}</td>
                                <td>{{$al->diachi}}</td>
                                <td>{{$al->nganhnghe}}</td>
                                <td> <img src="{{ asset('anh_tintuyendung/'.$al->anh) }}"  style="width:90px; height:80px" alt=""></td>
                                <td><a href="/vieclam/chi-tiet-viec-lam/{{$al->id}}">Xem chi tiết</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              </div>
          </div>
      </div>
    </div>

@endsection