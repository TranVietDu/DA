@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
            <h3 style="text-align: center; margin-top: -50px">Quản lí tin tuyển dụng</h3>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('tintuyendung1.trash') }}"
                        style="text-align: center; display: block; margin-bottom: 10px">Thùng Rác</a>
                    <div class="center" style="margin: 20px 0">
                        <button class="btn btn-primary"><a style="color:aliceblue;"
                                href="{{ route('tintuyendung1.create') }}">Thêm</a></button>
                        <button type="input" class="btn btn-danger" id="deleteall" value="">Xóa các hàng đã chọn</button>
                    </div>
                    <div class="col-12 text-center">
                        @if (session('tb_khoiphuc'))
                            <div class="alert alert-success">
                                {{ session('tb_khoiphuc') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-12 text-center">
                        @if (session('tb_xoa'))
                            <div class="alert alert-success">
                                {{ session('tb_xoa') }}
                            </div>
                        @endif
                    </div>
                    @if ($tintuyendungs->isEmpty())
                        <div class="col-12 text-center">
                            {{ 'Bạn chưa đăng tin tuyển dụng nào hoặc đã xóa. Vui lòng kiểm tra trong thùng rác!' }}
                        </div>
                    @else
                        <table class="table table-bordered border border-info table-striped" id="datatablesSiple">
                            <thead class="text-center" style="color: #007bff;">
                                <tr>
                                    <th><input type="checkbox" id="chkCheckAll" /></th>
                                    <th style="color:black">#</th>
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
                                    <th colspan="2" width="100px">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($tintuyendungs as $al)
                                    <tr id="sid{{ $al->id }}">
                                        <td><input type="checkbox" name="ids" class="checkBoxClass"
                                                value="{{ $al->id }}"></td>
                                        <td>
                                            {{ $i++ }}
                                        </td>
                                        <td style="width: 100px">{{ $al->tieude }}</td>
                                        <td>{{ $al->tenquan }}</td>
                                        <td>{{ $al->diachi }}</td>
                                        <td>{{ $al->soluong }}</td>
                                        <td>{{ $al->nganhnghe }}</td>
                                        <td>{{ $al->luong }}</td>
                                        <td>{{ $al->thoigian }}</td>
                                        <td>{{ $al->ngayhethan }}</td>
                                        <td>
                                            @if (isset($al->anh))
                                                <img src="{{ asset('anh_tintuyendung/' . $al->anh) }}"
                                                    style="width:90px; height:80px" alt="">
                                            @else
                                                {{ '...' }}
                                            @endif
                                        </td>
                                        <td style="text-align:justify">
                                            @if (isset($al->mota))
                                                {!! html_entity_decode($al->mota) !!}
                                            @else
                                                {{ '...' }}
                                            @endif
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('tintuyendung1.destroy', $al->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                                                    data-toggle="tooltip" title='Delete'><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-xs btn-warning">
                                                <a href="{{ route('tintuyendung1.edit', $al->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                            </button>

                                        </td>
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
            var form = $(this).closest("form");
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

            $("#deleteall").click(function(e) {
                e.preventDefault();
                var allids = [];
                $("input:checkbox[name=ids]:checked").each(function() {
                    allids.push($(this).val());
                });
                $.ajax({
                    url: "{{ route('tintuyendung1.destroyall') }}",
                    type: 'GET',
                    data: {
                        ids: allids,
                        _token: $("input[name=_token]").val()
                    },
                    success: function(response) {
                        $.each(allids, function(key, val) {
                            $('#sid' + val).remove();
                        });
                    }
                });
            });
        });
    </script>
@endsection
