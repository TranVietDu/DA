@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí Blog</h3>
          <div class="row">
              <div class="col-md-12">
                <a href="{{ route('blog1.trash')}}" style="text-align: center; display: block; margin-bottom: 10px">Thùng rác</a>
                    <div class="card-header">
                        <div style="margin: 20px 0; float: left;">
                            <button type="button" class="btn btn-primary"><a href="{{route('blog1.create')}}" style="color:aliceblue;">Thêm</a> </button>
                            <button type="button" class="btn btn-danger" id="deleteall">Xóa các hàng đã chọn </button>
                        </div>
                        <div style="margin: 20px 0; float: right">
                            <form class="form-inline" action="{{route('blog1.search_ajax')}}" method="get">
                                <input type="search" name="search" id="search">
                                <button class="btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                <div class="col-12 text-center">
                    @if (session('ms'))
                    <div class="alert alert-success">
                        {{session('ms')}}
                    </div>
                @endif
                </div>
                @if ($blogs->isEmpty())
                <div class="col-12 text-center">
                    {{'Bạn chưa viết blog nào hoặc đã xóa. Vui lòng kiểm tra trong thùng rác!'}}
                </div>
                @else
                <table class="table">
                    <thead>
                        <tr>
                           <th><input type="checkbox" id="chkCheckAll"/></th>
                           <th>STT</th>
                           <th>Tiêu đề Blog</th>
                           <th>Tên người viết</th>
                           <th>Nội dung</th>
                           <th>Ảnh liên quan</th>
                           <th colspan="2">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i =1;
                        @endphp
                        @foreach($blogs as $al)
                        <tr id="sid{{$al->id}}">
                           <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
                           <td>
                              {{$i++}}
                           </td>
                            <td>{{$al->tieude}}</td>
                            <td>{{$al->tennguoiviet}}</td>
                            <td>
                               {!!html_entity_decode($al->noidung)!!}
                            </td>
                            <td><img src="{{ asset('anh_blog/'.$al->anh) }}" style="width:90px; height: 80px;" alt=""></td>
                            <td>
                                <form method="POST" action="{{ route('blog1.destroy', $al->id)}}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                            <td><a href="{{ route('blog1.edit', $al->id) }}"><i class="fas fa-edit"></i></a></td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
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
                    url:"{{route('blog1.destroyall')}}",
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
    {{-- tim kiem ajax --}}
    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '/blog/search_ajax',
                data: {
                    'search': $value
                },
                success: function(data) {
                    $('tbody').html(data);
                }
            });
        })
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>
@endsection
