@extends('admin.masterlayout.masteradmin')

@section('title', 'Quản lí tin tìm việc')

@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Tin Tìm Việc</h1>
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
                    Tin Tìm Việc
                    <form class="form-inline" action="{{route('user.search')}}" method="get">
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
                        <a style="float: right;" href="{{route('tintimviec1.create')}}"><button class="btn btn-primary"><i class="fas fa-user-plus"></i>Thêm Tin Tìm Việc</button></a>
                    </div>
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
                            @foreach($all as $al)
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
                        </tbody>
                    </table>
                    <div style="float: right;" class="phantrang">
                    {!! $all->links() !!} 
                    </div>  
                </div>
            </div>
        </div>
        {{-- xoa 1 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Bạn có muốn xóa tin này không?`,
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });

   </script>
</div>
</main>
</div>
@endsection
