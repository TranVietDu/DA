@extends('master')

@section('content')
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h2>Blog</h2>
                <h4><a href="blog/viet-blog">Viết Blog</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="products">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                @foreach ($blogs as $val)
                <div class="col-md-6">
                    <div class="service-item">
                      <a href="/blog/chi-tiet-blog/{{$val->id}}" class="services-item-image"><img src="{{ asset('anh_blog/'.$val->anh) }}" class="img-fluid" style="height:200px" alt=""></a>

                      <div class="down-content">
                        <h4><a href="/blog/chi-tiet-blog/{{$val->id}}">{{$val->tieude}}</a></h4>

                        <p style="margin: 0;"> {{$val->tennguoiviet}} &nbsp;&nbsp;|&nbsp;&nbsp; {{$val->created_at}} &nbsp;&nbsp;</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-form">
                <div class="form-group">
                  <h5>Hãy Thử Tìm Gì Đó !</h5>
                </div>
                <form action="/tim-kiem-blog" method="get" autocomplete="off">
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="Tìm Kiếm..." id="keywords" name="keywords_submit">
                          <button class="btn btn-outline-secondary bg-black border-start-0 border rounded-pill ms-n3" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                      </div>
                 </form>
              </div>

              <div class="form-group">
                <h5>Các Blogs gần đây</h5>
              </div>
              @foreach ($blogganday as $bl)
              <p><a href="/blog/chi-tiet-blog/{{$bl->id}}">{{$bl->tieude}}</a></p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
@endsection
