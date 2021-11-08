@extends('master')

@section('content')
<!-- Page Content -->
<img height="500px" width="100%" src="https://www.seotopnhanh.com/wp-content/uploads/2019/09/Ki%E1%BA%BFm-ti%E1%BB%81n-t%E1%BB%AB-blog.jpg" alt="">

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>{{$blog->tieude}}</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-9">
            <img width="100%" src="{{asset('anh_blog/'.$blog->anh)}}" alt="">
            <p class="text-justify">{{$blog->noidung}}</p>
            <i style="padding-top: 10px;" class="float-right">Tác Giả: {{$blog->tennguoiviet}}</i>
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

      </div>
    </div>

    <br>

    <div>
    </div>
  </div>
</div>

@if (Auth::check())
<div class="send-message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Bình Luận</h2>
        </div>
      </div>
      <div class="col-md-8">
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="noidung" rows="6" class="form-control" id="message" placeholder="Bình luận của bạn..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Bình Luận</button>
                </fieldset>
              </div>
            </div>
            {{csrf_field()}}
          </form>
        </div>
      </div>

      <div class="col-md-4">

      </div>
      @foreach ($comments as $cm)
      <div class="col-md-12" style="margin-top:30px">
        <div class="product-item" style="padding:20px">
          <strong>{{$cm->ten}}</strong>
          <p>{{$cm->created_at}}</p>
          <br>
          <h6>
            <a>{{$cm->noidung}}</a>
          </h6>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endif
@endsection