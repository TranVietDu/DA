@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
            <h3 style="text-align: center; margin-top: -50px">Quản lí Blog</h3>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('blog1.trash') }}"
                        style="text-align: center; display: block; margin-bottom: 10px">Thùng rác</a>
                    <div class="row">
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
                    </div>
                    <div class="row card-header">
                        <div class="col-md-8">
                            <div style="float: left;;">
                                <button type="button" class="btn btn-primary"><a href="{{ route('blog1.create') }}"
                                        style="color:aliceblue;">Thêm</a> </button>
                                <button type="button" class="btn btn-danger" id="deleteall">Xóa các hàng đã chọn </button>
                            </div>
                        </div>
                    </div>
                    @if ($blogs->isEmpty())
                        <div class="col-12 text-center">
                            {{ 'Bạn chưa viết blog nào hoặc đã xóa. Vui lòng kiểm tra trong thùng rác!' }}
                        </div>
                    @else
                        <div class="x_content">
                            <table class="table table-hover table-bordered table-striped">
                                <thead class="text-center" style="color: #007bff;">
                                    <tr>
                                        <th><input type="checkbox" id="chkCheckAll" /></th>
                                        <th style="color:black">#</th>
                                        <th style="color:black">
                                            @sortablelink('tieude','Tiêu đề')
                                        </th>
                                        <th style="color:black">
                                            @sortablelink('tennguoiviet', 'Tác giả')
                                        </th>
                                        <th style="width: 500px">Nội dung</th>
                                        <th width="100px">Ảnh</th>
                                        <th colspan="2" width="20px">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($blogs as $al)
                                        <tr id="sid{{ $al->id }}">
                                            <td><input type="checkbox" name="ids" class="checkBoxClass"
                                                    value="{{ $al->id }}"></td>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>{{ $al->tieude }}</td>
                                            <td>{{ $al->tennguoiviet }}</td>
                                            <td style="text-align:justify">
                                                {!! html_entity_decode($al->noidung) !!}
                                            </td>
                                            <td><img src="{{ asset('anh_blog/' . $al->anh) }}"
                                                    style="width:90px; height: 80px;" alt=""></td>
                                            <td>
                                                <form method="POST" action="{{ route('blog1.destroy', $al->id) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit"
                                                        class="btn btn-xs btn-danger btn-flat show_confirm"
                                                        data-toggle="tooltip" title='Delete'><i class="fa fa-trash"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-xs btn-warning">
                                                    <a href="{{ route('blog1.edit', $al->id) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $blogs->appends(\Request::except('page'))->render() !!}
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
                    url: "{{ route('blog1.destroyall') }}",
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
