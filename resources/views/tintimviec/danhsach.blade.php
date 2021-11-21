@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tìm việc</h3>
          <div class="row">
              <div class="col-md-12">
                <a href="{{ route('tintimviec1.trash')}}" style="text-align: center; display: block; margin-bottom: 10px">Thùng rác</a>
                <div class="add" style="margin: 20px 0">
                    <button class="btn btn-primary"><a style="color:aliceblue;" href="{{ route("tintimviec1.create") }}">Thêm</a></button>
                    <button type="input" class="btn btn-danger" id="deleteall" value="">Xóa các hàng đã chọn</button>
                </div>
                <div class="col-12 text-center">
                    @if (session('ms'))
                <div class="alert alert-success">
                    {{session('ms')}}
                </div>
                @endif
                </div>
                @if ($tintimviecs->isEmpty())
                <div class="col-12 text-center">
                    {{'Bạn chưa đăng hồ sơ xin việc nào hoặc đã xóa. Vui lòng kiểm tra trong thùng rác!'}}
                </div>
                @else
                <table class="table table-bordered border border-info" id="datatablesSiple">
                    <thead class="bg-info">
                         <tr>
                            <th><input type="checkbox" id="chkCheckAll"/></th>
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
                         @foreach($tintimviecs as $al)
                         @php
                         date_default_timezone_set('Asia/Ho_Chi_Minh');

                            $birthday = $al->ngaysinh;
                            $diff = date_diff(date_create(), date_create($birthday));
                            $age = $diff->format('%Y');
                        @endphp
                         <tr id="sid{{$al->id}}">
                            <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
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
                             <form method="POST" action="{{ route('tintimviec1.destroy', $al->id)}}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                            </td>
                             <td><a href="{{ route('tintimviec1.edit', $al->id) }}"><i class="fas fa-edit"></i></a></td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                @endif
                 <div style="float: right;" class="phantrang">
                    {!! $tintimviecs->links() !!}
                    </div>
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
                 title: `Bạn có muốn xóa hàng này không?`,
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
   {{-- xoa nhieu --}}
 <script>
    $(function(e) {
        $("#chkCheckAll").click(function() {
            $(".checkBoxClass").prop('checked', $(this).prop('checked'));
        });

        $("#deleteall").click(function(e){
            e.preventDefault();
            var allids= [];
            $("input:checkbox[name=ids]:checked").each(function(){
                allids.push($(this).val());
            });
            $.ajax({
                url:"{{route('tintimviec1.destroyall')}}",
                type:'GET',
                data:{
                    ids:allids,
                    _token:$("input[name=_token]").val()
                },
                success:function(response)
                {
                    $.each(allids,function(key,val){
                        $('#sid'+val).remove();
                    });
                }
            });
        });
    });
</script>
@endsection
