@extends('master')

@section('content')
<div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:black">Kết quả tìm kiếm Blog</h2>
          </div>
        </div>
        @if (isset($search_vieclam))
        @foreach ($search_vieclam as $val)
        <div class="col-md-6">
            <div class="service-item">
              <a href="/blog/chi-tiet-blog/{{$val->id}}" class="services-item-image"><img src="{{$val->anh}}" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="/blog/chi-tiet-blog/{{$val->id}}">{{$val->tieude}}</a></h4>

                <p style="margin: 0;"> {{$val->tennguoiviet}} &nbsp;&nbsp;|&nbsp;&nbsp; {{$val->created_at}} &nbsp;&nbsp;</p>
              </div>
            </div>
          </div>
        @endforeach
    @endif

      </div>
    </div>
  </div>
@endsection
