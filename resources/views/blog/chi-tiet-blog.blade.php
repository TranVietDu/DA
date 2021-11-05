@extends('master')

@section('content')
     <!-- Page Content -->
     <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4><i class="fa fa-user"></i> {{$blog->tennguoiviet}}  &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> {{$blog->created_at}}  &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                <h2>{{$blog->tieude}}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="products">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                <div class="section-heading">
                  <h2>{{$blog->tieude}}</h2>
                </div>
              </div>

              <div class="col-md-8">
                  <p>{{$blog->noidung}}</p>
              </div>

              <div class="col-md-4">
                <div class="left-content">
                  <h4>Ảnh Liên Quan</h4>

                  <br>

                  <p>
                      <img src="{{ asset('anh_blog/'.$blog->anh) }}"  alt="" width="100%" class="img-responsive">
                  </p>
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
