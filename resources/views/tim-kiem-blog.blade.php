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


      <div class="col-md-12">
        <div class="row">
          @if (isset($search_blog))
          @foreach ($search_blog as $val)
          <div class="col-md-4">
            <div class="product-item">
              <a href="/blog/chi-tiet-blog/{{$val->id}}" class="services-item-image"><img src="{{ asset('anh_blog/'.$val->anh) }}" alt="" height="250px" width="400px" class="img-responsive"></a>

              <div class="down-content">
                <h4><a href="/blog/chi-tiet-blog/{{$val->id}}">{{$val->tieude}}</a></h4>

                <p style="margin: 0;"> {{$val->tennguoiviet}} &nbsp;&nbsp;|&nbsp;&nbsp; {{$val->luotxem}} <i class="fa fa-eye" aria-hidden="true"></i> &nbsp;&nbsp;</p>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
