@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tuyển dụng</h3>
          <div class="row">
              <div class="col-md-12">
                <a href="{{ route('tintuyendung1.trash')}}" style="text-align: center; display: block; margin-bottom: 10px">Thùng Rác</a>
                <div class="center" style="margin: 20px 0">
                    <button class="btn btn-primary"><a style="color:aliceblue;" href="{{ route("tintuyendung1.create") }}">Thêm</a></button>
                    <button type="input" class="btn btn-danger" id="deleteall" value="">Xóa các hàng đã chọn</button>
                </div>
                <div class="col-12 text-center">
                    @if (session('ms'))
                    <div class="alert alert-success">
                        {{session('ms')}}
                    </div>
                @endif
                </div>
                    @if ($tintuyendungs->isEmpty())
                    <div class="col-12 text-center">
                        {{'Bạn chưa đăng tin tuyển dụng nào hoặc đã xóa. Vui lòng kiểm tra trong thùng rác!'}}
                    </div>
                    @else
                    <table class="table table-bordered border border-info" id="datatablesSiple">
                        <thead class="bg-info">
                            <tr>
                               <th><input type="checkbox" id="chkCheckAll"/></th>
                               <th>STT</th>
                               <th>Tiêu đề</th>
                               <th>Tên quán</th>
                               <th>Địa chỉ</th>
                               <th>Số lượng</th>
                               <th>Ngành nghề</th>
                               <th>Mức lương</th>
                               <th>Thời gian</th>
                               <th>Ngày hết hạn</th>
                               <th>Ảnh</th>
                               <th>Mô tả</th>
                               <th colspan="2">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($tintuyendungs as $al)
                            <tr id="sid{{$al->id}}">
                               <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
                               <td>
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
                                <td>
                                   @if (isset($al->mota))
                                   {!!html_entity_decode($al->mota)!!}
                                   @else
                                   {{'...'}}
                                   @endif
                                </td>
                                <td>
                                   <form method="POST" action="{{ route('tintuyendung1.destroy', $al->id)}}">
                                       @csrf
                                       <input name="_method" type="hidden" value="DELETE">
                                       <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                   </form>
                                </td>
                                <td><a href="{{ route('tintuyendung1.edit', $al->id) }}"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="float: right;" class="phantrang">
                       {!! $tintuyendungs->links() !!}
                   </div>
                    @endif
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
                url:"{{route('tintuyendung1.destroyall')}}",
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
