@extends('master')

@section('content')
    <div class="services">
        <div class="container">
            <h3 style="text-align: center">Quản lí việc làm đã lưu</h3>
            <div class="row">
                <div class="col-md-12 mt-3">
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
                    @if ($data->isEmpty())
                        <div class="col-12 text-center">
                            {{ 'Danh sách trống' }}
                        </div>
                    @else
                        @foreach ($data as $val)
                            <div class="col-lg-4">
                                <div class="product-item">
                                    <a href="vieclam/chi-tiet-viec-lam/{{ $val->id }} ">
                                        <img src="{{ asset('anh_tintuyendung/' . $val->anh) }}"
                                            style="width:100%; height:200px; padding: 8px;border-radius: 20px" alt="">
                                        <div class="down-content">
                                            <h4 style="color: blue;">
                                                {{ $val->tieude }} </h4>
                                            <p>
                                                <i class="fas fa-dollar-sign"></i> Lương: {{ $val->luong }}
                                            </p>
                                            <h5 id="wistlish_nghe{{ $val->id }}" style="color: black;"><small><i
                                                        class="fa fa-briefcase"></i> {{ $val->nganhnghe }} <br> <i
                                                        class="fa fa-building"></i> {{ $val->tenquan }} </small>
                                            </h5>
                                        </div>
                                    </a>
                                    <div class="row">
                                        <form method="POST" action="{{ route('vieclamdaluu.destroy', $val->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                                                data-toggle="tooltip" title='Delete'><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div style="float: right;" class="phantrang">
                            {!! $data->links() !!}
                        </div>
                    @endif
                    <div style="float: right;" class="phantrang">
                        {!! $data->links() !!}
                    </div>
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
                    title: `Bạn có muốn xóa việc làm này không?`,
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
