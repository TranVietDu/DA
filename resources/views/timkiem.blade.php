@extends('master')

@section('content')
<div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:black">Kết quả tìm kiếm</h2>
          </div>
        </div>
        @if (isset($search_vieclam))
        @foreach ($search_vieclam as $val)
        <div class="col-md-4">
            <div class="product-item">
            <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><img src="{{ $val->anh }}" alt=""></a>
            <div class="down-content">
                <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><h4>{{ $val->tieude }}</h4></a>

                <h6>
                    @if (isset($val->luong))
                    ${{$val->luong }}
                    @else
                    $ {{ 'thương lượng'}}
                    @endif
                </h6>

                <h4><small><i class="fa fa-briefcase"></i> {{ $val->nganhnghe}} <br> <strong><i class="fa fa-building"></i>{{ $val->tenquan}}</strong></small></h4>

                <small>
                    <strong title="Posted on"><i class="fa fa-calendar"></i> {{ $val->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Type"><i class="fa fa-file"></i> {{$val->gioitinh}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Location"><i class="fa fa-map-marker"></i> {{$val->diachi }}</strong>
                </small>
            </div>
            </div>
        </div>
        @endforeach
    @endif

      </div>
    </div>
  </div>
@endsection
