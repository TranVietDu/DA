@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(https://blog.webico.vn/wp-content/uploads/2019/12/what-is-a-blog_bhakti-1-scaled.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4 style="padding: 60px 30px;background-color: red;border-radius: 50%;" class="float-right"><a style="color: white;" href="blog/viet-blog">Viết Blog</a></h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          @foreach($blognoibat as $blog)
          <div class="col-md-10">
            <h4 style="margin-bottom: 20px;">Blog Nổi Bật</h4>
            <div class="service-item">
              <a href="/blog/chi-tiet-blog/{{$blog->id}}" class="services-item-image"><img width="100%" src="{{ asset('anh_blog/'.$blog->anh) }}" class="img-fluid" alt=""></a>
              <div class="down-content">
                <h4><a href="/blog/chi-tiet-blog/{{$blog->id}}">{{$blog->tieude}}</a></h4>
                <p class="text-justify">{{$blog->noidung}}</p>
                <p style="margin: 0;float: right;">Tác Giả: {{$blog->tennguoiviet}} &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-3">
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
    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-3">
      <div class="product-item">
        <a href="/blog/chi-tiet-blog/{{$blog->id}}">
            <img class="card-img-top" src="https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep.jpg" alt="Card image cap">
            <div class="card-body">
              <p style="font-size: large;" class="card-title">{{$blog->tieude}}</p>
              <small class="card-text float-right">Tác giả: {{$blog->tennguoiviet}}</small>
            </div>
        </a>
      </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection