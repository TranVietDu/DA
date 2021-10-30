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
                      <a href="/blog/chi-tiet-blog/{{$val->id}}" class="services-item-image"><img src="{{$val->anh}}" class="img-fluid" alt=""></a>

                      <div class="down-content">
                        <h4><a href="/blog/chi-tiet-blog/{{$val->id}}">{{$val->tieude}}</a></h4>

                        <p style="margin: 0;"> {{$val->tennguoiviet}} &nbsp;&nbsp;|&nbsp;&nbsp; {{$val->created_at}} &nbsp;&nbsp;</p>
                      </div>
                    </div>
                  </div>
                @endforeach
                <div class="col-md-12">
                  <ul class="pages">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-form">
                <div class="form-group">
                  <h5>Hãy Thử Tìm Gì Đó !</h5>
                </div>

                <div class="row">
                  <div class="col-8">
                    <input type="text" class="form-control" placeholder="Tìm Kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                  </div>

                  <div class="col-4">
                    <button class="filled-button" type="button"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <h5>Các Blogs gần đây</h5>
              </div>

              <p><a href="blog-details.html">blog1</a></p>
              <p><a href="blog-details.html">blog2</a></p>
              <p><a href="blog-details.html">blog3</a></p>
            </div>
          </div>
        </div>
      </div>
@endsection
