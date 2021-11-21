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
                <div class="col-md-12">
                    <a href="{{ route('tintuyendung1.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục các tin tuyển dụng đã xóa</a>
                      <table class="table table-bordered border border-info" id="datatablesSiple">
                         <thead class="bg-info">
                             <tr>
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
                                <th>Hành động</th>
                             </tr>
                         </thead>
                         <tbody>
                             @php
                                 $i=1;
                             @endphp
                             @foreach($tintuyendungs_trash as $al)
                             <tr>
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
                                 <td><a href="{{ route('tintuyendung1.untrash', $al->id) }}">Khôi phục</a></td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                  </div>
                @endif
          </div>
      </div>
    </div>

{{-- xoa nhieu --}}
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
            url: "{{ route('tintuyendung1.destroyall') }}",
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

@endsection
