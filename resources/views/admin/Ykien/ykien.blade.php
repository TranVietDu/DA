@extends('admin.masterlayout.masteradmin')

@section('title', 'Quản lí ý kiến đóng góp')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Ý Kiến</h1>
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
                    Đóng Góp Ý Kiến Của Người Dùng
                    <form class="form-inline" action="{{route('user.search')}}" method="get">
                        <input type="search" name="search" id="search">
                        <button class="btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="card-header">
                    @if (session('thongbao'))
                    <div class="alert alert-success hide">
                        {{session('thongbao')}}
                    </div>
                    @endif
                    <div class="add">
                        <a style="float: right;" href="{{route('user.create')}}"><button class="btn btn-primary"><i class="fas fa-user-plus"></i>Add User</button></a>
                    </div>
                </div>
                <div style="overflow-x:auto;" class="card-body">
                    <table class="table table-bordered border border-info" id="datatablesSiple">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">STT</th>
                                <th scope="col">Tên người đóng góp</th>
                                <th scope="col">Nội dung</th>
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
                                <td>{{$al->ten}}</td>
                                <td>{{$al->noidung}}</td>
                                <td>
                                    <form action="{{route('ykien.destroy',[$al->id])}}" method="post">
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
                 title: `Bạn có muốn ý kiến này không?`,
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
    </main>
</div>
@endsection