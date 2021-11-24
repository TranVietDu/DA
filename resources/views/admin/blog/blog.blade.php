@extends('admin.masterlayout.masteradmin')

@section('title', 'Quản lí blog')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 style="padding: 20px 0px;" class="text-center"><i class="fas fa-tasks"></i> Quản Lí Blog</h1>
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
                        <a style="float: right;" href="/blog/viet-blog"><button class="btn btn-primary"><i class="fas fa-user-plus"></i>Thêm Blog</button></a>
                    </div>
                <div style="overflow-x:auto;">
                    <table class="table table-bordered border border-info">
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
                            @foreach($blogs as $al)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{ asset('anh_blog/'.$al->anh) }}" width="100px" class="img-flush" alt=""></td>
                                <td>{{$al->tennguoiviet}}</td>
                                <td>{{$al->tieude}}</td>
                                <td>{!!html_entity_decode(Str::limit($al->noidung, 400))!!}</td>
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
                    <div style="float: right;" class="phantrang">
                    {!! $blogs->links() !!} 
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
                 title: `Bạn có muốn xóa blog này không?`,
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