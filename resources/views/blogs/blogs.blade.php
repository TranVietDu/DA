@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor sit amet</h4>
          <h2>Blog</h2>
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
          <div class="col-md-10">
            <h4 style="margin-bottom: 20px;">Blog Nổi Bật</h4>
            <div class="service-item">
              <a href="/blog/chi-tiet-blog" class="services-item-image"><img width="100%" src="https://anhdepfree.com/wp-content/uploads/2018/10/Wallpaper-4K-dep.jpg" class="img-fluid" alt=""></a>
              <div class="down-content">
                <h4><a href="/blog/chi-tiet-blog">Siêu xe Lamborghini Huracan STO đầu tiên về Việt Nam</a></h4>
                <p class="text-justify">Siêu xe Lamborghini Huracan STO vừa về Việt Nam sở hữu ngoại thất màu xanh chủ đạo kết hợp màu cam và đỏ. Cung cấp sức mạnh cho Lamborghini Huracan STO là khối động cơ V10, hút khí tự nhiên, 5.2L, sản sinh công suất tối đa 631 mã lực và mô-men xoắn cực đại 565 Nm, giúp xe hoàn thành cú tăng tốc nước rút từ 0-100 km/h trong vòng 3 giây, từ 0-200 km/h trong vòng 9 giây, trước khi đạt tốc độ tối đa 310 km/h.</p>
                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
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

        <div class="form-group blognear">
          <h5 style="margin-bottom: 20px;">Các Blogs gần đây</h5>
          <div style="margin: 10px;" class="blogss">
            <a href="">
              <div class="row">
                <div class="col-8">
                  <img width="100%" src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-nen-4k-tuyet-dep-cho-may-tinh.jpg" alt="">
                </div>
                <div class="col-4">
                  <b class="small">Tên Blog</b>
                </div>
              </div>
            </a>
          </div>
          <div style="margin: 10px;" class="blogss">
            <a href="">
              <div class="row">
                <div class="col-8">
                  <img width="100%" src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-nen-4k-tuyet-dep-cho-may-tinh.jpg" alt="">
                </div>
                <div class="col-4">
                  <b class="small">Tên Blog</b>
                </div>
              </div>
            </a>
          </div>
          <div style="margin: 10px;" class="blogss">
            <a href="">
              <div class="row">
                <div class="col-8">
                  <img width="100%" src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-nen-4k-tuyet-dep-cho-may-tinh.jpg" alt="">
                </div>
                <div class="col-4">
                  <b class="small">Tên Blog</b>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tên Blog</h5>
              <small class="card-text float-right">Tác giả:Viết Dũ</small>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tên Blog</h5>
              <small class="card-text float-right">Tác giả:Viết Dũ</small>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tên Blog</h5>
              <small class="card-text float-right">Tác giả:Viết Dũ</small>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tên Blog</h5>
              <small class="card-text float-right">Tác giả:Viết Dũ</small>
            </div>
          </div>
        </a>
      </div>
      

    </div>
  </div>
</div>
@endsection