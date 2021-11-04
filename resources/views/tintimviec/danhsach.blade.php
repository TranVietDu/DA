@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tìm việc</h3>
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
                            <th>Tên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Email</th>
                            <th>Ảnh bản thân</th>
                            <th>Số ĐT</th>
                            <th>Ngành nghề mong muốn</th>
                            <th>Kinh nghiệm</th>
                            <th>Thời gian mong muốn</th>
                            <th>Mức lương mong muốn</th>
                            <th>Mô tả</th>
                            <th colspan="2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($tintimviecs as $al)
                         <tr id="sid{{$al->id}}">
                            <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
                            <td>
                               {{$al->id}}
                            </td>
                             <td>{{$al->ten}}</td>
                             <td>{{$al->gioitinh}}</td>
                             <td>
                                 {{$al->ngaysinh}}
                             </td>
                             <td>{{$al->email}}</td>
                             <td><img src="{{$al->anh}}" width="100px" class="img-flush" alt=""></td>
                             <td>{{$al->dienthoai}}</td>
                             <td>
                                {{$al->nganhnghe}}
                             </td>
                             <td>{{$al->kinhnghiem}}</td>
                             <td>{{$al->thoigian}}</td>
                             <td>
                                {{$al->mucluong}}
                             </td>
                             <td>
                                @if (isset($al->mota))
                                {{$al->mota}}
                                @else
                                {{'...'}}
                                @endif
                             </td>
                             <td><a href="{{ route('tintimviec.destroy', $al->id)}}">Xóa</a></td>
                             <td><a href="{{ route('tintimviec.edit', $al->id) }}">Cập nhật</a></td>
                         </tr>

                         @endforeach
                         <a href="{{ route('tintimviec.restore')}}">Khôi phục các tin đã xóa</a>
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
                    url:"{{route('tintimviec.destroyall')}}",
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
