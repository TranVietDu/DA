@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tuyển dụng đã xóa</h3>
          <div class="row">
                @if ($tintuyendungs_trash->isEmpty())
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
                    <a href="{{ route('tintuyendung1.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục các tin tuyển dụng đã xóa</a>
                    <a href="{{route('tintuyendung1.list')}}">&#60;&#60;trở lại</a>
                    <table class="table table-bordered border border-info table-striped" id="datatablesSiple">
                        <thead class="text-center" style="color: #007bff;">
                            <tr>
                               <th width="50px" style="color:black">#</th>
                               <th style="color:black">@sortablelink('tieude', 'Tiêu đề')</th>
                               <th width="120px" style="color:black">@sortablelink('tenquan', 'Tên quán')</th>
                               <th width="130px" style="color:black">@sortablelink('diachi', 'Địa chỉ')</th>
                               <th width="70px" style="color:black">@sortablelink('soluong', 'SL')</th>
                               <th width="140px" style="color:black">@sortablelink('nganhnghe', 'Ngành nghề')</th>
                               <th width="90px" style="color:black">@sortablelink('luong', 'Lương')</th>
                               <th width="130px" style="color:black">@sortablelink('thoigian', 'Thời gian')</th>
                               <th width="150px" style="color:black">@sortablelink('ngayhethan', 'Ngày hết hạn')</th>
                               <th width="100px">Ảnh</th>
                               <th width="200px">Mô tả</th>
                               <th colspan="2" width="120px">Hành động</th>
                            </tr>
                        </thead>
                         <tbody>
                             @php
                                 $i=1;
                             @endphp
                             @foreach($tintuyendungs_trash as $al)
                             <tr>
                                <td class="text-center">
                                   {{$i++}}
                                </td>
                                 <td>{{$al->tieude}}</td>
                                 <td>{{$al->tenquan}}</td>
                                 <td>{{$al->diachi}}</td>
                                 <td>{{$al->soluong}}</td>
                                 <td>{{$al->nganhnghe}}</td>
                                 <td>{{$al->luong}}</td>
                                 <td>{{$al->thoigian}}</td>
                                 <td>{{$al->ngayhethan}}</td>
                                 <td>
                                    @if (isset($al->anh))
                                        <img src="{{ asset('anh_tintuyendung/'.$al->anh) }}"  style="width:90px; height:80px" alt="">
                                    @else
                                    {{'...'}}
                                    @endif
                                 </td>
                                 <td class="text-justify">
                                    @if (isset($al->mota))
                                    {!!html_entity_decode($al->mota)!!}
                                    @else
                                    {{'...'}}
                                    @endif
                                 </td>
                                 <td>
                                    <button type="button" class="btn btn-xs btn-warning" >
                                        <a href="{{ route('tintuyendung1.untrash', $al->id) }}"><i class="fas fa-eraser"></i></a>
                                    </button>

                                </td>
                                 <td>
                                    <form method="POST" action="{{ route('tintuyendung1.forceDelete', $al->id)}}">
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
