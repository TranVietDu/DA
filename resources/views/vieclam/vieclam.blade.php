@extends('master')

@section('content')
     <!-- Page Content -->
     <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h2>Jobs</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="products">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
               <div class="contact-form">
                  <form action="#">
                   <h5 style="margin-bottom: 15px">Loại</h5>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Bán Thời Gian (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Toàn Thời Gian (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                            <input type="checkbox">

                            <small>Thực Tập (5)</small>
                        </label>
                    </div>

                   <br>

                   <h5 style="margin-bottom: 15px">Giới Tính</h5>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Nam</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Nữ</small>
                        </label>
                   </div>

                   <br>

                   <h5 style="margin-bottom: 15px">Địa Điểm</h5>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Hải Châu (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Thanh Khê (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Ngũ Hành Sơn (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                            <input type="checkbox">

                            <small>Sơn Trà (5)</small>
                        </label>
                    </div>

                    <div>
                        <label>
                             <input type="checkbox">

                             <small>Cẩm Lệ (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                            <input type="checkbox">

                            <small>Hòa Vang (5)</small>
                        </label>
                    </div>

                   <br>

                   <h5 style="margin-bottom: 15px">Ngành Nghề</h5>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Phục Vụ (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Bán Hàng (5)</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                             <small>Gia sư (5)</small>
                        </label>
                   </div>

                   <br>


                   <h5 style="margin-bottom: 15px">Mức Lương</h5>

                   <div>
                        <label>
                             <input type="checkbox">

                              <small>1tr - 2tr</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                              <small>2tr - 3tr</small>
                        </label>
                   </div>

                   <div>
                        <label>
                             <input type="checkbox">

                              <small>3tr - 4tr</small>
                        </label>
                   </div>
              </form>
               </div>
            </div>

            <div class="col-md-9">
              <div class="row">
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="product-item">
                    <a href="/vieclam/chi-tiet-viec-lam"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                      <a href="/vieclam/chi-tiet-viec-lam"><h4>{Tên công việc}</h4></a>

                    <h6>{Ten quan}</h6>

                      <h4><small><i class="fa fa-briefcase"></i> { Nganh nghe } / { Phuc vu } <br> <strong><i class="fa fa-money"></i> {Luong}</strong></small></h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-user"></i> {So luong}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> Hai Chau</strong>
                      </small>
                    </div>
                  </div>
                </div>

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
          </div>
        </div>
      </div>
@endsection
