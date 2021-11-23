@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí Blog Đã Xóa</h3>
          <div class="row">
              @if ($blogs_trash->isEmpty())
              <div class="col-12 text-center">
                {{'Không có gì trong thùng rác!'}}<br><br><br>
                <a href="danhsach">Trở lại</a>
            </div>
                @else
                <div class="col-12 text-center">
                    @if (session('tb_xoa'))
                    <div class="alert alert-success">
                        {{session('tb_xoa')}}
                    </div>
                @endif
                </div>
                <div class="col-md-12">
                    <a href="{{ route('blog1.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục tất cả</a>
                    <a href="{{route('blog1.list')}}">&#60;&#60;trở lại</a>
                    <table class="table">
                         <thead>
                             <tr>
                                <th>STT</th>
                                <th>Tiêu đề Blog</th>
                                <th>Tên người viết</th>
                                <th>Nội dung</th>
                                <th>Ảnh liên quan</th>
                                <th colspan="2">Hành động</th>
                             </tr>
                         </thead>
                         <tbody>
                             @php
                                 $i =1;
                             @endphp
                             @foreach($blogs_trash as $al)
                             <tr>
                                <td>
                                   {{$i++}}
                                </td>
                                 <td>{{$al->tieude}}</td>
                                 <td>{{$al->tennguoiviet}}</td>
                                 <td>
                                    {!!html_entity_decode($al->noidung)!!}
                                 </td>
                                 <td><img src="{{ asset('anh_blog/'.$al->anh) }}" style="width:90px; height: 80px;" alt=""></td>
                                 <td>
                                    <button type="button" class="btn btn-xs btn-warning" >
                                        <a href="{{ route('blog1.untrash', $al->id) }}"><i class="fas fa-eraser"></i></a>
                                    </button>

                                </td>
                                 <td>
                                    <form method="POST" action="{{ route('blog1.forceDelete', $al->id)}}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                                </tr>
                             @endforeach

                         </tbody>
                     </table>
                  </div>
              @endif
          </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

         $('.show_confirm').click(function(event) {
              var form =  $(this).closest("form");
              var name = $(this).data("name");
              event.preventDefault();
              swal({
                  title: `Bạn có muốn xóa vĩnh viễn hàng này không?`,
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
@endsection
