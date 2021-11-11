@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí tin tìm việc</h3>
          <div class="row">
              <div class="col-md-12">
                <div class="add" style="margin: 20px 0">
                    <button class="btn btn-primary"><a style="color:aliceblue;" href="{{ route("tintimviec1.create") }}">Thêm</a></button>
                    <button type="input" class="btn btn-danger" id="deleteall" value="">Xóa các hàng đã chọn</button>
                </div>
                <table class="table table-bordered border border-info" id="datatablesSiple">
                    <thead class="bg-info">
                         <tr>
                            <th><input type="checkbox" id="check_all"/></th>
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
                            <th colspan="2">Action</th>
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
                            <td><input type="checkbox" name="ids" class="checkbox" value="{{$al->id}}"></td>
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
                         <a href="{{ route('tintimviec1.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục các tin đã xóa</a>
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
        url: "{{ route('tintimviec1.destroyall') }}",
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
