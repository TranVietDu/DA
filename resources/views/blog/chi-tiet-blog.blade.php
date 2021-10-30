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

                  <p>{{$blog->anh}}</p>
                </div>
              </div>
          </div>

          <br>

          <div>
            <img src="assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Họ và Tên" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Địa chỉ Email" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Bình luận của bạn..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="filled-button">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-md-4">
                <div class="left-content">

                  <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>

                  <br>

                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
