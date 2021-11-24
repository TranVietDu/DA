@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tìm việc đã xóa</h3>
          <div class="row">
                @if ($tintimviecs_trash->isEmpty())
                <div class="col-12 text-center">
                    {{'Không có gì trong thùng rác!'}}<br><br><br>
                    <a href="/danhsach">Trở lại</a>
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
                    <a href="{{ route('tintimviec1.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục các tin tìm việc đã xóa</a>
                    <a href="{{route('tintimviec1.list')}}">&#60;&#60;trở lại</a>
                    <table class="table table-bordered border border-info" id="datatablesSiple">
                        <thead class="bg-info">
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Tuổi</th>
                                <th>Giới tính</th>
                                <th>Số ĐT</th>
                                <th>Email</th>
                                <th>Ngành nghề</th>
                                <th>Địa chỉ</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th colspan="2">Hành động</th>
                             </tr>
                         </thead>
                         <tbody>
                            @php
                                $i =1 ;
                            @endphp
                             @foreach($tintimviecs_trash as $al)
                             @php
                             date_default_timezone_set('Asia/Ho_Chi_Minh');

                                $birthday = $al->ngaysinh;
                                $diff = date_diff(date_create(), date_create($birthday));
                                $age = $diff->format('%Y');
                            @endphp
                             <tr>
                                <td>
                                    {{$i++}}
                                </td>
                                 <td>{{$al->ten}}</td>
                                 <td>{{ $age }}</td>
                                 <td>
                                     {{$al->gioitinh}}
                                 </td>
                                 <td>{{$al->sdt}}</td>
                                 <td>{{$al->email}}</td>
                                 <td>{{$al->nganhnghe}}</td>
                                 <td>{{$al->diachi}}</td>
                                 <td><img src="{{ asset('anh_tintimviec/'.$al->anh) }}" style="width:90px; height: 80px;" alt=""></td>
                                 <td>
                                    @if (isset($al->mota))
                                    {!!html_entity_decode($al->mota)!!}
                                    @else
                                    {{'...'}}
                                    @endif
                                 </td>
                                 <td>
                                    <button type="button" class="btn btn-xs btn-warning" >
                                        <a href="{{ route('tintimviec1.untrash', $al->id) }}"><i class="fas fa-eraser"></i></a>
                                    </button>

                                </td>
                                 <td>
                                    <form method="POST" action="{{ route('tintimviec1.forceDelete', $al->id)}}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                     <div style="float: right;" class="phantrang">
                        {!! $tintimviecs_trash->links() !!}
                        </div>
                  </div>
                @endif
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
