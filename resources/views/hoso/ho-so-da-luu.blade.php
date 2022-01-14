@extends('master')

@section('content')
    <div class="services">
        <div class="container">
        <h3 style="text-align: center">Quản lí hồ sơ đã lưu</h3>
          <div class="row">
              <div class="col-md-12 mt-3">
                <div class="row">
                    <div class="col-12 text-center">
                        @if (session('tb_khoiphuc'))
                    <div class="alert alert-success">
                        {{session('tb_khoiphuc')}}
                    </div>
                    @endif
                    </div>
                    <div class="col-12 text-center">
                        @if (session('tb_xoa'))
                    <div class="alert alert-success">
                        {{session('tb_xoa')}}
                    </div>
                    @endif
                    </div>
                </div>
                @if ($data->isEmpty())
                <div class="col-12 text-center">
                    {{'Danh sách trống'}}
                </div>
                @else
                @foreach ($data as $al)
                <div class="col-lg-12">
                    <div class="product-item">
                        <a href="/hoso/chi-tiet-ho-so/{{$al->id}}">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="anhcanhan">
                                        <img height="200px" style="border-radius: 15px;" src="{{asset('anh_tintimviec/'.$al->anh)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="thongtin">
                                        <h4 style="padding-bottom: 60px; padding-top: 10px;">{{$al->ten}}</h4>
                                        <p><i class="fas fa-venus-mars"></i> Giới tính: {{$al->gioitinh}}</p>
                                        <p><i class="fas fa-briefcase"></i> Ngành nghề: {{$al->nganhnghe}}</p>
                                        <p><i class="fas fa-calendar-alt"></i> Ngày đăng: {{\Carbon\Carbon::parse($al->created_at)->format('d/m/Y')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-2 right">
                                    <form action="{{ route('hosodaluu.destroy', $al->id)}}" method="post">
                                        @csrf
                                       <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete' style="margin-top:50%"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
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
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Bạn có muốn xóa hồ sơ này không?`,
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
