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
        <div class="col-md-3">
        <div class="product-item">
                <a href="/vieclam/chi-tiet-viec-lam/{{$val->id}}">
                <img src="{{asset('anh_tintuyendung/'.$val->anh)}}" style="width:100%; height:200px; padding: 8px;border-radius: 15px;" alt="">
                <div class="down-content">
                  <h4 style="color: blue;">{{$val->tieude}}</h4>
                  <p>
                    <i class="fas fa-dollar-sign"></i> Lương: {{$val->luong}}
                  </p>
                  <h5 style="color: black;"><small><i class="fa fa-briefcase"></i> {{$val->nganhnghe}}<br> <i class="fa fa-building"></i> {{$val->tenquan}}</small></h5>
                </div>
              </a>
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
            <div style="height: 200px;" class="product-item">
                <a href="/hoso/chi-tiet-ho-so/{{$val->id}}">
                    <div class="row">
                        <div class="col-md-5">
                            <img style="padding: 8px;border-radius: 15px;" width="auto" height="200px" src="{{ asset('anh_tintimviec/'.$val->anh) }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="down-content">
                                <h4>{{$val->ten}}</h4>
                                <p><i class="fas fa-briefcase"></i>  {{$val->nganhnghe}}</p>
                                <small>
                                    <strong title="Posted on"><i class="fa fa-calendar"></i> {{$val->created_at}}</strong><br>
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
