@extends('master')

@section('content')
<!-- Page Content -->

<!-- <div class="page-heading about-heading header-text" style="background-image: url(https://www.seotopnhanh.com/wp-content/uploads/2019/09/Ki%E1%BA%BFm-ti%E1%BB%81n-t%E1%BB%AB-blog.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4 class="float-right blog1"><a style="color: white;" href="blog/viet-blog">Viết Blog</a></h4>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="head">
<img width="100%" height="341px" src="https://nguyenvantuan830970966.files.wordpress.com/2021/11/blog-productpage.jpeg?w=1038&h=576&crop=1" alt="">
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-9" style="padding:0 20px">
        <div class="row">
          <!-- <div class="col-12 text-center"> -->
            <div class="col-md-12">
            <h4 style="padding: 10px; background-color: rgb(10, 172, 184); color: white; margin-bottom:10px" class="text-center">TẤT CẢ BLOG</h4>
            </div>
          <!-- </div> -->
          @foreach($blogs as $blog)
          @if (isset($blog->deleted_at))
          @else
          <div class="col-md-12 blog2">
            <a href="/blog/chi-tiet-blog/{{$blog->id}}">
              <div class="row">
                <div class="col-md-4">
                <img height="100px" style="padding: 5px; width: 90%;" class="card-img-top" src="{{ asset('anh_blog/'.$blog->anh) }}" alt="Card image cap">
                </div>
                <div class="col-md-8">
                  <h5 style="color:black">{{$blog->tieude}}</h5>
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
          <!-- <div class="col-md-12 mb-5 mt-4 blog2">
            <a href="/blog/chi-tiet-blog/{{$blog->id}}">
              <div class="row">
                <div class="col-md-4">
                  <img height="200px" style="padding: 5px; width: 90%;" class="card-img-top" src="{{ asset('anh_blog/'.$blog->anh) }}" alt="Card image cap">
                </div>
                <div class="col-md-8">
                  <h5 style="color:black">{{$blog->tieude}}</h5>
                  <p style="text-align:justify">{!!html_entity_decode(Str::limit($blog->noidung,340,'...'))!!}</p>
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
          </div> -->
          @endif
          @endforeach
          <div class="col-12">
            <div class="phantrang text-center">
              {!! $blogs->links() !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
      <img src="https://neilpatel.com/wp-content/uploads/2019/06/mao-masculina-segurando-xicara-de-cafe-em-mesa-de.jpeg" alt="" style="width:100%">
      <h5 style="height: 50px; width:100%; background-color: yellow; text-align:center;line-height:50px;margin-bottom: 10px;"><a style="color: rgb(7, 7, 7);" href="{{route('blog1.create')}}">Viết Blog</a></h5>
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
        <h5 style="margin-bottom: 20px;">Bảng xếp hạng lượt xem</h5>
        <div class="form-group blognear blog3" id="blog3">
          @php
          $i=1;
          @endphp
          @foreach($blogxemnhieu as $blog)
          <div style="margin: 10px;" class="blogss">
            <div class="row">
              <div class="col-12 text-center">
                @if ($i == 1)
                <span style="color: red"><b>Top {{$i++}}</b></span>
                @elseif ($i == 2)
                <span style="color: rgb(7, 204, 7)"><b>Top {{$i++}}</b></span>
                @elseif ($i == 3)
                <span style="color: rgb(0, 68, 255)"><b>Top {{$i++}}</b></span>
                @else
                <b>{{$i++}}</b>
                @endif
              </div>
            </div>
            <div class="col-md-12 text-center">
              <img height="100px" style="padding: 5px; display: block; margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ asset('anh_blog/'.$blog->anh) }}" alt="Card image cap">
              <a style="font-size: 18px" href="/blog/chi-tiet-blog/{{$blog->id}}">
                <b class="small">{{$blog->tieude}}</b>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection