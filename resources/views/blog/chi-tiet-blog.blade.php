@extends('master')

@section('content')
<!-- Page Content -->
<img height="500px" width="100%" src="https://simplepage.vn/blog/wp-content/uploads/2021/06/huong-dan-tao-blog-website.png" alt="">

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
            <div class="section-heading text-center">
                <h2>{{$blog->tieude}}</h2>
              </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8 mb-4 mr-5">
            <img width="90%" src="{{asset('anh_blog/'.$blog->anh)}}" alt="" style="margin-left: auto; margin-right: auto; display: block; margin-bottom: 15px">
            <span style="text-align: justify">{!!html_entity_decode($blog->noidung)!!}</span>
            <i style="padding-top: 10px;" class="float-right"><i class="fas fa-at"></i>{{$blog->tennguoiviet}}</i>
          </div>
          <div class="col-md-3">
            <div class="form-group blognear">
                <img src="https://neilpatel.com/wp-content/uploads/2019/06/mao-masculina-segurando-xicara-de-cafe-em-mesa-de.jpeg" alt="" style="width:100%">
                <h5 style="height: 50px; width:100%; background-color: yellow; text-align:center;line-height:50px"><a style="color: rgb(7, 7, 7);" href="{{route('blog1.create')}}">Viết Blog</a></h5>
                <h5 style="margin-top: 20px;">Một số blog khác</h5>
                @foreach($blogkhac as $blog)
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
          <h3>Hãy nói gì đó về {{$blog->tieude}}</h3>
        </div>
      </div>
      <div class="col-md-8">
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="noidung" rows="10" class="form-control" id="message" placeholder="Nội dung..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Gửi</button>
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
        <div style="padding:20px; background-color: rgba(95, 92, 92, 0.062);">
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
