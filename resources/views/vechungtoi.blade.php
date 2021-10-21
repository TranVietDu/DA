@extends('master')

@section('content')
    <!-- BẢN DỒ -->
  <div class="containet-fluid" style="margin-top: 150px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.668147130694!2d108.25024801468285!3d15.97869728893689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108f13c698cd%3A0x37bda7be2ec7b5b2!2zMTggTMOqIFRoaeG7h24gVHLhu4ssIEhvw6AgSOG6o2ksIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1619538575438!5m2!1sen!2s"
            width="100%" height="680px" style="border:10px; margin-top: 20px;" allowfullscreen=""
            loading="lazy"></iframe>
        </div>
        <div class="col-md-4" style="border: 1px solid black; margin-top: 20px">
          <h2 style="margin: 40px auto;"><b>Giới thiệu <span style="color: red;">về chúng tôi</span>!</b></h2>
          <p style="text-align: justify; line-height: 2;">Hiện nay trong thời đại 4.0, công nghệ thông tin được áp dụng
            rất nhiều vào
            các lĩnh vực trong đó phổ biến
            là tìm kiếm. Thực trạng hiện nay, việc tìm kiếm công việc làm thêm cho sinh viên còn rất nhiều bất cập như
            khó tìm được công việc phù hợp, tình trạng lừa đảo, hành vi đen tối, khó tiếp cận được đặc thù công việc chỉ
            qua bảng quảng cáo hay mạng xã hội… Từ thực tế đó, việc xây dựng một công cụ tìm kiếm việc làm là rất cần
            thiết. Vì vậy chúng em đã xây dựng <span style="font-size: 20px; color: rgb(31, 143, 187);"><b>TRANG WEB TÌM
                KIẾM VIỆC
                LÀM cho Đà Nẵng</b></span> với mục đích nghiên cứu, tìm hiểu và xây dựng website để có thể đáp ứng được
            nhu
            cầu tìm kiếm việc làm cho sinh viên Đà Nẵng, giúp cho các bạn có thể tiết kiệm được thời gian, công sức và
            giúp việc tìm kiếm dễ dàng, tiện lợi hơn</p>
        </div>
      </div>
      <div class="row" style="margin-top: 50px; background-color: rgb(194, 238, 240); border: 2px dashed black;">
        <div class="col-12">
          <h5 style="color: darkturquoise;"><b><img src="assets/icons/iconfinder_Eye_7324055.png" alt=""
                style="height: 50px;"> TẦM NHÌN</b></h5>
          <p>Trở thành 1 trang Web cung cấp các việc làm online hàng đầu và đồng hành cùng tất cả sinh viên ở Việt Nam.
          </p>
          <h5 style="color: rgb(204, 26, 26);"><b><img src="assets/icons/iconfinder_Target_icon_2315605.png" alt=""
                style="height: 70px;"> SỨ MỆNH</b></h5>
          <p>Nghiên cứu và phát triển nhiều chức năng trang web để tạo sự thuận tiện và tăng khả năng tương tác của
            người dùng truy cập website.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-4 mb-4">
          <h3><i>Liên hệ với chúng tôi qua:</i></h3>
        </div>
        <div class="col-md-8">
          <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section>
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i><img
                    src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Facebook2_colored_svg-256.png"
                    alt="" style="width: auto; height: 30px;"></i></a>
              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i> <img
                    src="https://cdn4.iconfinder.com/data/icons/social-media-flat-7/64/Social-media_Twitter-256.png"
                    alt="" style="width: auto; height: 30px;"></i></a>
              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i><img
                    src="https://cdn3.iconfinder.com/data/icons/logos-brands-3/24/logo_brand_brands_logos_google-256.png"
                    alt="" style="width: auto; height: 30px;"></i></a>
              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i><img
                    src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/62-instagram-256.png" alt=""
                    style="width: auto; height: 30px;"></i></a>
              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i><img
                    src="https://cdn1.iconfinder.com/data/icons/logotypes/32/linkedin-256.png" alt=""
                    style="width: auto; height: 30px;"></i></a>
              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i><img
                    src="https://cdn2.iconfinder.com/data/icons/significon-social/512/Significon-Github-256.png" alt=""
                    style="width: auto; height: 30px;"></i></a>
            </section>
            <!-- Section: Social media -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
