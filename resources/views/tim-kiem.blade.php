@extends('master')

@section('content')
<div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:black; text-align:center">Kết quả tìm kiếm</h2>
          </div>
        </div>
        <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color:black">Việc làm</h2>
            </div>
            @if ($search_vieclam->isEmpty())
                {{'Không tìm thấy kết quả'}}
            @endif
          </div>
        @foreach ($search_vieclam as $val)
        <div class="col-md-4">
            <div class="product-item">
            <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><img src="{{ asset('anh_tintuyendung/'.$val->anh) }}" alt="" style="padding: 8px;"></a>
            <div class="down-content">
                <a href="vieclam/chi-tiet-viec-lam/{{$val->id}}"><h4>{{ $val->tieude }}</h4></a>

                <h4><small><i class="fa fa-briefcase"></i> {{ $val->nganhnghe}} <br> <strong><i class="fa fa-building"></i>{{ $val->tenquan}}</strong></small></h4>

                <small>
                    <strong title="Posted on"><i class="fa fa-calendar"></i> {{ $val->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Type"><i class="fa fa-file"></i> </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Location"><i class="fa fa-map-marker"></i> {{$val->diachi }}</strong>
                </small>
            </div>
            </div>
        </div>
        @endforeach



        <div class="col-md-12 mt-4">
            <div class="section-heading">
              <h2 style="color:black">Hồ sơ</h2>
            </div>
            @if ($search_hoso->isEmpty())
                {{'Không tìm thấy kết quả'}}
            @endif
          </div>
        @foreach ($search_hoso as $val)
        <div class="col-md-6">
            <div class="product-item">
                <a href="/hoso/chi-tiet-ho-so/{{$val->id}}">
                    <div class="row">
                        <div class="col-md-5">
                            <img style="padding: 8px;" width="auto" height="100%" src="{{ asset('anh_tintimviec/'.$val->anh) }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="down-content">
                                <h4>{{$val->ten}}</h4>

                                <p><i class="fas fa-briefcase"></i>  {{$val->nganhnghe}}</p>
                                <small>
                                    <strong title="Posted on"><i class="fa fa-calendar"></i> {{$val->created_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Location"><i class="fa fa-map-marker"></i>{{$val->diachi}}</strong>
                                </small>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        @endforeach

      </div>
      </div>
    </div>
  </div>
@endsection
