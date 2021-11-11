@extends('master')

@section('content')
<div class="services">
  <div class="row">
    <div class="col-md-12">
      <img src="" alt="">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 style="color:black">Kết quả tìm kiếm Blog</h2>
        </div>
      </div>


      <div class="col-md-8">
        <div class="row">
          @if (isset($search_blog))
          @foreach ($search_blog as $val)
          <div class="col-md-6">
            <div class="product-item">
              <a href="/blog/chi-tiet-blog/{{$val->id}}" class="services-item-image"><img src="{{ asset('anh_blog/'.$val->anh) }}" alt="" height="250px" width="400px" class="img-responsive"></a>

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
      <div class="col-md-4">
      <div class="contact-form">
          <div class="form-group">
            <h5>Hãy Thử Tìm Gì Đó !</h5>
          </div>
          <form action="/tim-kiem-blog" method="get" autocomplete="off">
            <div class="input-group">

                  <td><input height="100px" class=" border-end-0 border rounded-pill" type="text" placeholder="Tìm Kiếm..." id="keywords" name="keywords_submit"></td>
                  <td><button class="btn btn-outline-secondary bg-black border-start-0 border rounded-pill ms-n3" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </div>
        <div class="form-group blognear">
          <h5 style="margin-bottom: 20px;">Các Blogs gần đây</h5>
          @foreach($blogganday as $blog)
          <div style="margin: 10px;" class="blogss">
            <a href="/blog/chi-tiet-blog/{{$blog->id}}">
              <div class="product-item">
                <div class="">
                  <img width="100%" src="{{ asset('anh_blog/'.$blog->anh) }}" alt="">
                </div>
                <div class="">
                  <b class="small">{{$blog->tieude}}</b>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>


    </div>
  </div>
</div>
@endsection
