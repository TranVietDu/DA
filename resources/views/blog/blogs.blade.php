@extends('master')

@section('content')
<!-- Page Content -->

<div class="page-heading about-heading header-text" style="background-image: url(https://www.seotopnhanh.com/wp-content/uploads/2019/09/Ki%E1%BA%BFm-ti%E1%BB%81n-t%E1%BB%AB-blog.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4 class="float-right blog1"><a style="color: white;" href="blog/viet-blog">Viết Blog</a></h4>
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
            <div class="col-12">
                <h5 style="margin-bottom: 20px">Tất cả Blog</h5>
            </div>
          @foreach($blogs as $blog)
          <div class="col-md-12 mb-5 blog2">
            <a href="/blog/chi-tiet-blog/{{$blog->id}}">
              <div class="row">
                  <div class="col-md-4">
                    <img height="200px" style="padding: 5px" class="card-img-top" src="{{ asset('anh_blog/'.$blog->anh) }}" alt="Card image cap">
                  </div>
                  <div class="col-md-8">
                    <h5 style="color:black">{{$blog->tieude}}</h5>
                    {!!html_entity_decode($blog->noidung)!!}
                    <small class="card-text">Tác giả: {{$blog->tennguoiviet}}</small><br>
                    <i><small>
                      Lượt xem:
                      @if (isset($blog->luotxem))
                      {{$blog->luotxem}}
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      @else
                      {{'Chưa có'}}
                      @endif
                  </small></i>
                  </div>
              </div>
            </a>
          </div>
          @endforeach
          <div class="col-12">
            <div class="phantrang text-center">
                {!! $blogs->links() !!}
              </div>
        </div>
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
        <br>
        <div class="form-group blognear">
          <h5 style="margin-bottom: 20px;">Xem nhiều nhất</h5>
          @foreach($blogxemnhieu as $blog)
          <div style="margin: 10px;" class="blogss">
            - <a style="font-size: 18px" href="/blog/chi-tiet-blog/{{$blog->id}}">
                  <b class="small">{{$blog->tieude}} | {{$blog->luotxem}}
                    <i class="fa fa-eye" aria-hidden="true"></i></b>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
