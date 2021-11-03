@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tuyển dụng</h3>
          <div class="row">
              <div class="col-md-12">
                <div class="center" style="margin: 20px 0">
                    <button class="btn btn-primary"><a style="color:aliceblue;" href="{{ route("tintuyendung.create") }}">Thêm</a></button>
                    <button type="input" class="btn btn-danger" id="deleteall" value="">Xóa các hàng đã chọn</button>
                </div>
                  <table class="table">
                     <thead>
                         <tr>
                            <th><input type="checkbox" id="check_all"/></th>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Tên quán</th>
                            <th>Địa chỉ</th>
                            <th>Số lượng</th>
                            <th>Ngành nghề</th>
                            <th>Thời gian</th>
                            <th>Ảnh về quán</th>
                            <th>Mô tả</th>
                            <th colspan="2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @php
                             $i=1;
                         @endphp
                         @foreach($tintuyendungs as $al)
                         <tr id="sid{{$al->id}}">
                            <td><input type="checkbox" name="ids" class="checkbox" value="{{$al->id}}"></td>
                            <td>
                               {{$i++}}
                            </td>
                             <td>{{$al->tieude}}</td>
                             <td>{{$al->tenquan}}</td>
                             <td>
                                 {{$al->diachi}}
                             </td>
                             <td>{{$al->soluong}}</td>
                             <td>{{$al->nganhnghe}}</td>
                             <td>{{$al->thoigian}}</td>
                             <td>
                                @if (isset($al->anh))
                                <img src="{{$al->anh}}" width="100px" class="img-flush" alt="">
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
                             <td>
                                <form method="POST" action="{{ route('tintuyendung.destroy', $al->id)}}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Xóa</button>
                                </form>
                             <td><a href="{{ route('tintuyendung.edit', $al->id) }}">Cập nhật</a></td>
                         </tr>

                         @endforeach
                         <a href="{{ route('tintuyendung.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục các tin đã xóa</a>
                     </tbody>
                 </table>
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

   {{-- xóa nhiều --}}
   <script type="text/javascript">
    $(document).ready(function () {
        $('#check_all').on('click', function(e) {
        if($(this).is(':checked',true))
    {
        $(".checkbox").prop('checked', true);
        } else {
        $(".checkbox").prop('checked',false);
    }
    });
        $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
        $('#check_all').prop('checked',true);
        }else{
        $('#check_all').prop('checked',false);
    }
    });
        $('.delete-all').on('click', function(e) {
            e.preventDefault();
            var idsArr = [];
            $(".checkbox:checked").each(function() {
            idsArr.push($(this).attr('data-id'));
    });
        if(idsArr.length <=0)
    {
        alert("Vui lòng chọn ít nhất 1 hàng để xóa.");
        }  else {
        if(confirm("Bạn có muốn xóa các hàng đã chọn không?")){
        var strIds = idsArr.join(",");
        $.ajax({
        url: "{{ route('tintuyendung.destroyall') }}",
        type: 'GET',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: 'ids='+strIds,
        success: function (data) {
        if (data['status']==true) {
        $(".checkbox:checked").each(function() {
        $(this).parents("tr_").remove();
    });
        alert(data['message']);
        } else {
        location.reload();
    }
    },
        error: function (data) {
        alert(data.responseText);
    }
    });
    }
    }
    });
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        onConfirm: function (event, element) {
        element.closest('form').submit();
    }
    });
    });
    </script>

@endsection
