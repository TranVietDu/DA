@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí Blog</h3>
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
                            <th>Tiêu đề Blog</th>
                            <th>Tên người viết</th>
                            <th>Nội dung</th>
                            <th>Ảnh liên quan</th>
                            <th colspan="2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($blogs as $al)
                         <tr id="sid{{$al->id}}">
                            <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
                            <td>
                               {{$al->id}}
                            </td>
                             <td>{{$al->tieude}}</td>
                             <td>{{$al->tennguoiviet}}</td>
                             <td>
                                 {{$al->noidung}}
                             </td>
                             <td>{{$al->anh}}</td>
                             <td><a href="{{ route('blog.destroy', $al->id)}}">Xóa</a></td>
                             <td><a href="{{ route('blog.edit', $al->id) }}">Cập nhật</a></td>
                         </tr>

                         @endforeach
                         <a href="{{ route('blog.restore')}}">Khôi phục các tin đã xóa</a>
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
                    url:"{{route('blog.destroyall')}}",
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
