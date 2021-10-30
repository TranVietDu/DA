@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tuyển dụng</h3>
          <div class="row">
              <div class="col-md-12">
                <div class="add" style="margin: 20px 0">
                    <button type="button" class="btn btn-danger" id="deleteall">Delete Selected </button>
                </div>
                  <table class="table">
                     <thead>
                         <tr>
                            <th><input type="checkbox" id="chkCheckAll" /></th>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Địa chỉ</th>
                            <th>Kinh nghiệm</th>
                            <th>Số lượng</th>
                            <th>Giới tính</th>
                            <th>Tên quán</th>
                            <th>Mức lương</th>
                            <th>Ngành nghề</th>
                            <th>Thời gian</th>
                            <th>Ảnh về quán</th>
                            <th>Mô tả</th>
                            <th colspan="2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($tintuyendungs as $al)
                         <tr id="sid{{$al->id}}">
                            <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
                            <td>
                               {{$al->id}}
                            </td>
                             <td>{{$al->tieude}}</td>
                             <td>{{$al->diachi}}</td>
                             <td>
                                 @if (isset($al->kinhnghiem))
                                 {{$al->kinhnghiem}}
                                 @else
                                 {{'Không cần thiết'}}
                                 @endif
                             </td>
                             <td>{{$al->soluong}}</td>
                             <td>{{$al->gioitinh}}</td>
                             <td>{{$al->tenquan}}</td>
                             <td>
                                @if (isset($al->luong))
                                {{$al->luong}}
                                @else
                                {{'Thương lượng'}}
                                @endif
                             </td>
                             <td>{{$al->nganhnghe}}</td>
                             <td>{{$al->thoigian}}</td>
                             <td>
                                @if (isset($al->anh))
                                {{$al->anh}}
                                @else
                                {{'...'}}
                                @endif
                             </td>
                             <td>
                                @if (isset($al->mota))
                                {{$al->mota}}
                                @else
                                {{'...'}}
                                @endif
                             </td>
                             <td><a href="{{ route('tintuyendung.destroy', $al->id)}}">Xóa</a></td>
                             <td><a href="{{ route('tintuyendung.edit', $al->id) }}">Cập nhật</a></td>
                         </tr>

                         @endforeach
                         <a href="{{ route('tintuyendung.restore')}}">Khôi phục các tin đã xóa</a>
                     </tbody>
                 </table>
              </div>
          </div>
      </div>
    </div>
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
                    url:"{{route('tintuyendung.destroyall')}}",
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
