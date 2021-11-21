@extends('master')

@section('content')
<!-- Page Content -->
<img height="500px" width="100%" src="https://simplepage.vn/blog/wp-content/uploads/2021/06/huong-dan-tao-blog-website.png" alt="">

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
            <p class="text-justify">{!!html_entity_decode($blog->noidung)!!}</p>
            <i style="padding-top: 10px;" class="float-right"><i class="fas fa-at"></i> {{$blog->tennguoiviet}}</i>
          </div>
          <div class="col-md-3">
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
