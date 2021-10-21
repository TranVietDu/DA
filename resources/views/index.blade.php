@extends('master')

@section('content')
<div class="container-fluid">
    <div class="container mt-5">
      <!-- slice hình ảnh -->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/image slice/slice1.png" class="d-block w-100" alt="..."
              style="height: 600px; margin-top: 100px;">
          </div>
          <div class="carousel-item">
            <img src="assets/images/image slice/slice2.jpg" class="d-block w-100" alt="..."
              style="height: 600px;margin-top: 100px;">
          </div>
          <div class="carousel-item">
            <img src="assets/images/image slice/slice3.jpg" class="d-block w-100" alt="..."
              style="height: 600px;margin-top: 100px;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <h2 style="color: rgb(56, 199, 180); margin-top: 40px;"><b>Tại sao <span style="color: red;">Sinh Viên</span>
          nên đi làm thêm
          ?</b></h2>
      <div class="row">
        <div class="col-md-8">
          <iframe width="auto" height="500px" src="https://www.youtube.com/embed/Tznt3EcEuJc"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            style="width: 95%;"></iframe>
          <p>
          <h4 id="thuctrang"><b>1. Thực trạng công việc làm thêm hiện nay</b></h4>
          <h5 id="thuctrang1"><b>1.1. Thực trạng nguồn lao động tìm việc làm thêm hiện nay</b></h5>
          <p style="text-align: justify;">
            Khi tham gia công việc làm thêm, một trong số những lý do đó là học hỏi và tích lũy thêm kinh nghiệm. Đây
            là
            một chiều hướng tốt, tuy nhiên đa số người lao động hiện nay đang tự đưa mình vào một thực trạng đáng
            buồn,
            làm cho việc làm thêm trở nên thu hẹp dần những cơ hội tốt do bản thân các bạn còn mắc rất nhiều hạn chế.
            Vậy đó là gì? Nếu bạn đang là một cá nhân có nhu cầu tìm việc làm thêm thì nhất định phải biết về điều
            này.
          </p>
          <h6 id="thuctrang2" style="margin-top: 20px; text-align: justify;"><b>1.1.1. Thái độ thờ ơ, hời hợt với công
              việc làm thêm</b></h6>
          <p style="text-align: justify;">
            Từ những câu chuyện thực tế mà chúng ta biết được người lao động hiện nay có thái độ như thế nào đối với
            công việc làm thêm.


            Tại Hội chợ Việc làm thành phố Hà Nội, ban tổ chức đã nhìn nhận rõ vấn đề tìm việc làm thêm của sinh viên
            hiện nay. Bà Phương – Phó trưởng ban tổ chức của Hội chợ tỏ ra đáng buồn trước thực tế người lao động mang
            theo thái độ thờ ơ đến hội chợ chứng minh qua việc họ không có bất cứ sự chuẩn bị về tâm lý hay không
            chuẩn
            bị đầy đủ bộ hồ sơ xin việc.

            Cũng cùng cảnh ngộ như vậy, trong chương trình Ngày tuyển dụng được tổ chức tại một trường đại học, chỉ có
            hơn 200 người lao động tìm được việc trong tổng số gần 2000 chỉ tiêu tuyển dụng. Lý do phần lớn người lao
            động đến với ngày hội này và để vuột mất cơ hội vẫn chính là thái độ thờ ơ trong khâu chuẩn bị hồ sơ, lại
            đi
            kèm với thái độ không tốt đối với các nhà tuyển dụng, thiếu hoàn toàn sự chân thành, bản lĩnh và sự trân
            trọng nhà tuyển dụng.
          </p>
          <h6 id="thuctrang3" style="margin-top: 20px; text-align: justify;"><b>1.1.2. Thiếu kinh nghiệm</b></h6>
          <p style="text-align: justify;">
            Theo lời chia sẻ của một người cán bộ nhân sự tại Công ty Kinh Đô, được biết trong 100 hồ sơ xin việc được
            gửi tới thì con số được chọn vô cùng ít ỏi. Và riêng với vị trí kế toán, phía công ty đã không tuyển chọn
            được bất cứ một ứng viên nào đáp ứng được yêu cầu bởi vì đối với vị trí này, trình độ nghiệp vụ thôi chưa
            đủ
            mà ứng viên còn phải có kinh nghiệm làm việc từ thực tế nữa.

            Một sinh viên mới ra trường đã ngậm ngùi chia sẻ rằng, bạn đã bị trượt tuyển dụng chỉ vì một lý do duy
            nhất,
            đó là thiếu kinh nghiệm việc làm. Với kết quả này, bạn đã tự rút ra cho mình một bài học rằng chúng ta cần
            phải tích lũy kinh nghiệm từ sớm, ngay từ khi còn ngồi trên ghế nhà trường. Có vậy bạn mới tự mình làm
            "dày"
            bản CV với kinh nghiệm và kỹ năng thuyết phục những nhà tuyển dụng khó tính nhất. Hãy tìm những công việc
            làm thêm liên quan đến các vị trí mà bạn sẽ ứng tuyển sau này hoặc ít nhất nó cũng có thể hỗ trợ bạn bổ
            sung
            những kỹ năng mà mình còn thiếu sót.
          </p>
          <img src="assets/images/kinhnghiem.jpg" alt="" style="width: 100%;">
          <span id="dots" style="display: inline;"></span>
          <span id="more" style="display: none;">
            <h5 id="thuctrang4" style="margin-top: 20px;text-align: justify;"><b>1.2. Một số quan điểm về việc làm
                thêm cho sinh viên</b></h5>
            <p style="text-align: justify;">
              Tham khảo ý kiến từ chính bản thân của một sinh viên khi làm cộng tác viên tại văn phòng Đoàn cho trường
              Đại học, bạn cho rằng trở thành một người cộng tác viên cũng là một cách làm thêm, và nó mang tới cho
              bạn
              sinh viên đó ý nghĩa quan trọng vì giúp bạn nâng cao kỹ năng về mặt trình độ chuyên môn, lại vừa xây
              dựng
              thêm cho bạn kỹ năng làm tổ chức và còn tăng thêm thu nhập.

              Như vậy, việc làm thêm có thể hiểu là một công việc bên lề, không chính thức. Làm thêm sẽ giúp cho con
              người có nhiều cơ hội bao gồm việc tăng thêm thu nhập, tích lũy thêm kinh nghiệm và trau dồi nhiều kiến
              thức bổ ích trong cuộc sống và trong nhiều lĩnh vực bạn tham gia làm thêm. Đối với sinh viên, khi làm
              thêm
              bạn có cơ hội va chạm với thực tế cuộc sống và công việc sớm hơn, từ đó tạo ra được một tiền đề tốt để
              dạn
              dĩ hơn khi chính thức bước vào sự nghiệp sau khi ra trường.
            </p>
            <h4 id="thuctrang5"><b>2. Sinh viên có nên đi làm thêm hay không?</b></h4>
            <p style="text-align: justify;">
              Cho đến hiện nay, câu hỏi này vẫn nhận được nhiều ý kiến trái chiều, đặc biệt là từ các bậc phụ huynh
              học sinh. Bởi lẽ đối tượng sinh viên vẫn chịu sự quản lý của nhà trường và gia đình, chưa đủ hoàn thiện
              về chuyên môn lẫn con người để có đủ điều kiện đi làm.

              Về phần gia đình, nhiều phụ huynh học sinh muốn con em mình tập trung cho công việc học tập trên lớp tốt
              nhất nên không ủng hộ việc đi làm thêm bên ngoài. Họ cho rằng công việc kiếm tiền chân tay khiến cho
              việc học tập của các em bị gián đoạn và đứt quãng, ảnh hưởng trầm trọng đến kết quả học tập, ra trường
              không đúng thời gian quy định … Bên cạnh đó, việc đi làm thêm sớm kéo theo nhiều hệ lụy khác nhau, gặp
              phải tình trạng lừa đảo hay bóc lột sức lao động …

              Số khác lại cho rằng, việc các em sinh viên tiếp thu kiến thức trên lớp chỉ là lý thuyết. Các em làm
              thêm để được thực hành và va chạm sớm làm tiền đề để sau khi ra trường các em có nhiều kinh nghiệm và tự
              tin hơn. Hơn nữa, nguồn thu nhập từ việc làm thêm giúp các em chi trả chi phí sinh hoạt, học tập và
              nhiều nhu cầu khác, miễn sao không để ảnh hưởng đến quá trình học tập trên lớp.
              Thực tế cho thấy, hiện nay nhà nước chưa có chế tài cho việc học sinh sinh viên đi làm thêm, định hướng
              làm thêm cho sinh viên chưa thực sự chú trọng bởi người tuyển dụng đa số quan tâm đến lợi ích kinh tế
              nhiều hơn. Việc làm thêm nhiều nhưng hiệu quả mang lại chưa thực sự cao và kéo theo nhiều hệ lụy khác.
            </p>
            <h4 id="thuctrang6"><b>3. Gợi ý các công việc làm thêm cho sinh viên</b></h4>
            <p>
              Các em cần đánh giá bản thân có những lợi thế, ưu điểm hay hạn chế gì để lựa chọn cho mình một công việc
              phù hợp. Dưới đây là một số gợi ý cho các em:
              <br>
              Gia sư các môn học: Toán, Lý, Hóa, Sinh, Văn, Anh …
              <br>
              Công tác viên viết bài
              <br>
              Nhân viên marketing online
              <br>
              Phiên dịch
              <br>
              Phục vụ nhà hàng
              <br>
              Lễ tân khách sạn
              <br>
              Bán hàng online …
            </p>
          </span>
          <a id="myBtn" onclick="myFunction()" href="#" style="text-align: center; display: block;">Xem thêm</a>
          </p>
        </div>
        <div class="col-md-4">
          <div class="mucluc">
            <h4 style="text-align: center; margin:20px 0;">Mục lục</h4>
            <ul>
              <li class="li1"><b><a href="#thuctrang">1. Thực trạng công việc làm thêm hiện nay</a></b></li>
              <ul>
                <li class="li2"><a href="#thuctrang1">1.1. Thực trạng nguồn lao động tìm việc làm thêm hiện nay</a>
                </li>
                <ul>
                  <li class="li3"><a href="#thuctrang2">1.1.1. Thái độ thờ ơ, hời hợt với công việc làm thêm</a></li>
                  <li class="li3"><a href="#thuctrang3">1.1.2. Thiếu kinh nghiệm</a></li>
                </ul>
                <li class="li2"><a href="#thuctrang4">1.2. Một số quan điểm về việc làm thêm cho sinh viên</a></li>
              </ul>
              <li class="li1"><b><a href="#thuctrang5">2. Sinh viên có nên đi làm thêm hay không?</a></b></li>
              <li class="li1"><b><a href="#thuctrang6">3. Gợi ý các công việc làm thêm cho sinh viên</a></b></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Cập nhật -->
      <section id="jobs">
        <h4 class="font" style="margin: 15px 30px;"><b>Trang chủ &#10148; <span>Việc cập nhật gần đây</span></b></h4>
        <hr>
        <!-- 1111111111111111111111111111111111 -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"
          style="background-color: transparent; border: none; text-align: left;">
          <div class="row">
            <div class="col-sm-5">
              <img class="img_jobs"
                src="https://static.chotot.com/storage/chotot-kinhnghiem/c2c/2020/08/nhan-vien-phuc-vu-quan-an-nha-hang-khach-san.jpg"
                alt="">
            </div>
            <div class="col-sm-7">
              <h5 class="font"><b>Tuyển nhân viên quán Nhậu</b></h5>
              <p class="font">
              <ul>
                <li>Biết hòa đồng và vui vẻ thân thiện với mọi người.</li>
                <li>Có thể làm việc lâu dài.</li>
                <li>Nhanh nhẹn, trách nhiệm, trung thực.</li>
              </ul>
              </p>
              <div class="jobs-update">
                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;margin-right: 10px;"> 3tr -
                  3tr5</span>
                <img
                  src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                  alt="" style="height: 15px; width: auto;"><span style="font-size: 16px; margin-right: 10px;"> Ca
                  tối</span>
                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;">
                  Hải Châu</span><br>
                <i style="font-size: 14px; color: darkcyan;"><span style="color: springgreen;">
                    &#9679;</span> 12 phút trước</i>
              </div>
            </div>
          </div>
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: auto; height: auto;">
              <div class="modal-header">
                <h4 class="modal-title">Quán nhậu Cô Châu</h4>
              </div>
              <div class="modal-body">
                <div class="modal-body">
                  <img
                    src="https://static.chotot.com/storage/chotot-kinhnghiem/c2c/2020/08/nhan-vien-phuc-vu-quan-an-nha-hang-khach-san.jpg"
                    alt="" style="width: 100%;">
                  <div>
                    <p><b>Mô tả công việc:</b></p>
                    (Mức lương: 3 - 3.5 triệu VNĐ)
                    <ul>
                      <li>Chào đón khách hàng, Nhận order món ăn, beer</li>
                      <li>Phục vụ món ăn, beer tới khách hàng</li>
                      <li>Vệ sinh dọn dẹp khu vực làm việc</li>
                    </ul>
                    <p><b>Chức vụ:</b> Nhân Viên phục vụ</p>
                    <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                    <p><b>Thời gian làm việc:</b></p>
                    <ul>
                      <li><b>Ca chiều:</b> 13h - 18h</li>
                      <li><b>Ca tối:</b> 18h - 23h</li>
                    </ul>
                    <p><b>Quyền lợi được hưởng:</b></p>
                    <ul>
                      <li>Mức lương: thỏa thuận + thưởng doanh số hàng tháng</li>
                      <li>Quyền lợi: thưởng làm việc lễ, tết, được tăng lương nếu làm việc tốt</li>
                    </ul>
                    <p><b>
                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                    <p><b>
                        Yêu cầu công việc:</b></p>
                    <ul>
                      <li>Lao động phổ thông không yêu cầu bằng cấp</li>
                      <li>Nhiệt tình trong công việc.</li>
                      <li>Biết hòa đồng và vui vẻ thân thiện với mọi người.</li>
                      <li>Có thể làm việc lâu dài.</li>
                      <li>Nhanh nhẹn, trách nhiệm, trung thực.</li>
                    </ul>
                    <p><b>
                        Yêu cầu giới tính:</b> Nam/Nữ</p>
                    <p><b>
                        Ngành nghề:</b> Phục Vụ</p>
                  </div>
                </div>
              </div>
              <div class="bando">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3343.7625451089275!2d108.245850976961!3d15.991015545096516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142118443fd0e19%3A0x3cdbb1bf2c94588a!2zTmjhuq11IEPDtCBDaMOidQ!5e0!3m2!1sen!2s!4v1620186226099!5m2!1sen!2s"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> <button type="button"
                  class="btn btn-info"><a href="Ungtuyen.html" style="text-decoration: none;color: black;">Ứng
                    tuyển</a></button>
              </div>
            </div>
          </div>
        </div>
        <!--222222222222222222222222222-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2"
          style="background-color: transparent; border: none; text-align: left;">
          <div class="row">
            <div class="col-sm-5">
              <img class="img_jobs"
                src="https://dongphuctona.com/wp-content/uploads/2019/04/mau-ao-thun-va-tap-de-dong-phuc-nhan-vien-quan-tra-sua-noi-tieng-2.jpg"
                alt="">
            </div>
            <div class="col-sm-7">
              <h5 class="font"><b>Tuyển nhân viên quán Trà Sữa Ăn Vặt</b></h5>
              <p class="font">
              <ul>
                <li>Nhiệt tình trong công việc.</li>
                <li>Biết hòa đồng và vui vẻ thân thiện với mọi người.</li>
                <li>Nhanh nhẹn, trách nhiệm, trung thực.</li>
              </ul>
              </p>
              <div class="jobs-update">
                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;margin-right: 10px;"> 2tr -
                  2tr5</span>
                <img
                  src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                  alt="" style="height: 15px; width: auto;"><span style="font-size: 16px; margin-right: 10px;"> Ca
                  tối</span>
                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;">
                  Hải Châu</span><br>
                <i style="font-size: 14px; color: darkcyan;"><span style="color: springgreen;">
                    &#9679;</span> 24 phút trước</i>
              </div>
            </div>
          </div>
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: auto; height: auto;">
              <div class="modal-header">
                <h4 class="modal-title">Trà sữa ăn vặt TLB</h4>
              </div>
              <div class="modal-body">
                <div class="modal-body">
                  <img
                    src="https://dongphuctona.com/wp-content/uploads/2019/04/mau-ao-thun-va-tap-de-dong-phuc-nhan-vien-quan-tra-sua-noi-tieng-2.jpg"
                    alt="" style="width: 100%;">
                  <div>
                    <p><b>Mô tả công việc:</b></p>
                    (Mức lương: 2 - 2.5 triệu VNĐ)
                    <ul>
                      <li>Chào đón khách hàng, Nhận order</li>
                      <li>Phục vụ đồ ăn, nước uống tới khách hàng</li>
                    </ul>
                    <p><b>Chức vụ:</b> Nhân Viên</p>
                    <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                    <p><b>Thời gian làm việc:</b></p>
                    <ul>
                      <li><b>Ca tối:</b> 17h - 22h</li>
                    </ul>
                    <p><b>Quyền lợi được hưởng:</b></p>
                    <ul>
                      <li>Mức lương: thỏa thuận + thưởng doanh số hàng tháng</li>
                      <li>Quyền lợi: thưởng làm việc lễ, tết, được tăng lương nếu làm việc tốt</li>
                    </ul>
                    <p><b>
                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                    <p><b>
                        Yêu cầu công việc:</b></p>
                    <ul>
                      <li>Nhiệt tình trong công việc.</li>
                      <li>Biết hòa đồng và vui vẻ thân thiện với mọi người.</li>
                      <li>Nhanh nhẹn, trách nhiệm, trung thực.</li>
                    </ul>
                    <p><b>
                        Yêu cầu giới tính:</b> Nam/Nữ</p>
                    <p><b>
                        Ngành nghề:</b> Phục Vụ</p>
                  </div>
                </div>
              </div>
              <div class="bando">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3343.754123768904!2d108.24932112233104!3d15.991519071673709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314211d0ded484db%3A0x7183f13c5bc049fa!2zVHLDoCBz4buvYSDEg24gduG6t3QgVExC!5e0!3m2!1sen!2s!4v1620186777367!5m2!1sen!2s"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> <button type="button"
                  class="btn btn-info"><a href="Ungtuyen.html" style="text-decoration: none;color: black;">Ứng
                    tuyển</a></button>
              </div>
            </div>
          </div>
        </div>
        <!--333333333333333333333333333333-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3"
          style="background-color: transparent; border: none; text-align: left;">
          <div class="row">
            <div class="col-sm-5">
              <img class="img_jobs" src="https://www.sapo.vn/blog/wp-content/uploads/2021/05/quan-bi-da-sangtrong.jpg"
                alt="">
            </div>
            <div class="col-sm-7">
              <h5 class="font"><b>WIN WIN Tuyển nhân viên phục vụ</b> </h5>
              <p class="font">
              <ul>
                <li>Chào đón khách hàng</li>
                <li>Mở bàn, lấy bi, ghi giờ, phục vụ nước cho khách hàng</li>
                <li>Vệ sinh bàn khi khách ra về</li>
              </ul>
              </p>
              <div class="jobs-update">
                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;margin-right: 10px;"> 3tr -
                  3tr5</span>
                <img
                  src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                  alt="" style="height: 15px; width: auto;"><span style="font-size: 16px; margin-right: 10px;"> Ca
                  sáng/ tối</span>
                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;">
                  Hải Châu</span><br>
                <i style="font-size: 14px; color: darkcyan;"><span style="color: springgreen;">
                    &#9679;</span> 31 phút trước</i>
              </div>
            </div>
          </div>
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: auto; height: auto;">
              <div class="modal-header">
                <h4 class="modal-title">Bida WIN WIN</h4>
              </div>
              <div class="modal-body">
                <div class="modal-body">
                  <img src="https://www.sapo.vn/blog/wp-content/uploads/2021/05/quan-bi-da-sangtrong.jpg" alt=""
                    style="width: 100%;">
                  <div>
                    <p><b>Mô tả công việc:</b></p>
                    (Mức lương: 3 - 3.5 triệu VNĐ)
                    <ul>
                      <li>Chào đón khách hàng</li>
                      <li>Mở bàn, lấy bi, ghi giờ, phục vụ nước cho khách hàng</li>
                      <li>Vệ sinh bàn khi khách ra về</li>
                    </ul>
                    <p><b>Chức vụ:</b> Nhân Viên Phục Vụ</p>
                    <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                    <p><b>Thời gian làm việc:</b></p>
                    <ul>
                      <li><b>Ca tối:</b> 17h - 23h</li>
                    </ul>
                    <p><b>Quyền lợi được hưởng:</b></p>
                    <ul>
                      <li>Mức lương: thỏa thuận + thưởng doanh số hàng tháng</li>
                      <li>Quyền lợi: thưởng làm việc lễ, tết, được tăng lương nếu làm việc tốt</li>
                    </ul>
                    <p><b>
                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                    <p><b>
                        Yêu cầu công việc:</b></p>
                    <ul>
                      <li>Lao động phổ thông không yêu cầu bằng cấp</li>
                      <li>Nhiệt tình trong công việc.</li>
                      <li>Biết hòa đồng và vui vẻ thân thiện với mọi người.</li>
                      <li>Có thể làm việc lâu dài.</li>
                      <li>Nhanh nhẹn, trách nhiệm, trung thực.</li>
                    </ul>
                    <p><b>
                        Yêu cầu giới tính:</b> Nam</p>
                    <p><b>
                        Ngành nghề:</b> Phục Vụ Bàn</p>
                  </div>
                </div>
              </div>
              <div class="bando">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15338.380539209971!2d108.23070788264332!3d16.034577848463332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf800f228020519d!2sBida%20Win%20Win!5e0!3m2!1sen!2s!4v1620187742286!5m2!1sen!2s"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> <button type="button"
                  class="btn btn-info"><a href="Ungtuyen.html" style="text-decoration: none;color: black;">Ứng
                    tuyển</a></button>
              </div>
            </div>
          </div>
        </div>
        <!--44444444444444444444444-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4"
          style="background-color: transparent; border: none; text-align: left;">
          <div class="row">
            <div class="col-sm-5">
              <img class="img_jobs"
                src="https://static.chotot.com/storage/chotot-kinhnghiem/c2c/2020/08/viec-lam-ban-hang-shop.jpg"
                alt="">
            </div>
            <div class="col-sm-7">
              <h5 class="font"><b>Tuyển Nhân Viên Bán Shop Quần Áo</b> </h5>
              <p class="font">
              <ul>
                <li>Sắp xếp hàng hóa gọn gàng, đẹp mắt</li>
                <li>Tư vấn, bán hàng quần áo trực tiếp tại cửa hàng.</li>
                <li>Chịu sự phân công của cửa hàng trưởng</li>
              </ul>
              </p>
              <div class="jobs-update">
                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;margin-right: 10px;"> 4tr -
                  5tr</span>
                <img
                  src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                  alt="" style="height: 15px; width: auto;"><span style="font-size: 16px; margin-right: 10px;"> Ca
                  sáng</span>
                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;">
                  Hải Châu</span><br>
                <i style="font-size: 14px; color: darkcyan;"><span style="color: springgreen;">
                    &#9679;</span> 1 giờ trước</i>
              </div>
            </div>
          </div>
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="myModal4" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: auto; height: auto;">
              <div class="modal-header">
                <h4 class="modal-title">Tuyển Nhân Viên Bán Shop Quần Áo</h4>
              </div>
              <div class="modal-body">
                <div class="modal-body">
                  <img
                    src="https://static.chotot.com/storage/chotot-kinhnghiem/c2c/2020/08/viec-lam-ban-hang-shop.jpg"
                    alt="" style="width: 100%;">
                  <div>
                    <p><b>Mô tả công việc:</b></p>
                    (Mức lương: 4 - 5 triệu VNĐ)
                    <ul>
                      <li>Sắp xếp hàng hóa gọn gàng, đẹp mắt</li>
                      <li>Tư vấn, bán hàng quần áo trực tiếp tại cửa hàng.</li>
                      <li>Chịu sự phân công của cửa hàng trưởng</li>
                    </ul>
                    <p><b>Chức vụ:</b> Nhân Viên Bán Hàng</p>
                    <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                    <p><b>Thời gian làm việc:</b></p>
                    <ul>
                      <li><b>Ca sáng:</b> 7h - 11h</li>
                    </ul>
                    <p><b>Quyền lợi được hưởng:</b></p>
                    <ul>
                      <li>Mức lương: thỏa thuận + thưởng doanh số hàng tháng</li>
                      <li>Quyền lợi: thưởng làm việc lễ, tết, được tăng lương nếu làm việc tốt</li>
                    </ul>
                    <p><b>
                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                    <p><b>
                        Yêu cầu công việc:</b></p>
                    <ul>
                      <li>Nữ từ 18-21 tuổi</li>
                      <li>Có sức khỏe tốt, kiên nhẫn với công việc</li>
                      <li>Vui vẻ, thân thiện, đam mê với công việc</li>
                      <li>Mong muốn gắn bó lâu dài với Công ty</li>
                      <li>Nhanh nhẹn, trách nhiệm, trung thực.</li>
                    </ul>
                    <p><b>
                        Yêu cầu giới tính:</b> Nữ</p>
                    <p><b>
                        Ngành nghề:</b> Bán Hàng</p>
                  </div>
                </div>
              </div>
              <div class="bando">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0946808665835!2d108.20699741446907!3d16.060575843936768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b4138a3919%3A0x6613f9bc1c9b3417!2zMTQ2IFBoYW4gVGhhbmgsIFRo4bqhYyBHacOhbiwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1625045712194!5m2!1svi!2s"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> <button type="button"
                  class="btn btn-info"><a href="Ungtuyen.html" style="text-decoration: none;color: black;">Ứng
                    tuyển</a></button>
              </div>
            </div>
          </div>
        </div>
        <!--555555555555555555-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5"
          style="background-color: transparent; border: none; text-align: left;">
          <div class="row">
            <div class="col-sm-5">
              <img class="img_jobs"
                src="https://vieclam123.vn/ckfinder/userfiles/images/Tro-giang-la-mot-trong-nhung-viec-lam-them-duoc-nhieu-sinh-vien-lua-chon.jpg"
                alt="">
            </div>
            <div class="col-sm-7">
              <h5 class="font"><b>TRỢ GIẢNG TIẾNG ANH - ĐÀ NẴNG</b> </h5>
              <p class="font">
              <ul>
                <li>Đồng hành cùng Sứ giả trên lớp cùng học viên.</li>
                <li>Sửa lỗi phát âm, bài tập, đưa ra giải pháp cải thiện.</li>
              </ul>
              </p>
              <div class="jobs-update">
                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;margin-right: 10px;"> 3tr -
                  4tr</span>
                <img
                  src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                  alt="" style="height: 15px; width: auto;"><span style="font-size: 16px; margin-right: 10px;"> Ca
                  sáng/ tối</span>
                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png" alt=""
                  style="height: 15px; width: auto;"><span style="font-size: 16px;">
                  Thanh Khê</span><br>
                <i style="font-size: 14px; color: darkcyan;"><span style="color: springgreen;">
                    &#9679;</span> 2 giờ trước</i>
              </div>
            </div>
          </div>
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="myModal5" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: auto; height: auto;">
              <div class="modal-header">
                <h4 class="modal-title">TRỢ GIẢNG - MS HOA GIAO TIẾP ĐÀ NẴNG</h4>
              </div>
              <div class="modal-body">
                <div class="modal-body">
                  <img
                    src="https://vieclam123.vn/ckfinder/userfiles/images/Tro-giang-la-mot-trong-nhung-viec-lam-them-duoc-nhieu-sinh-vien-lua-chon.jpg"
                    alt="" style="width: 100%;">
                  <div>
                    <p><b>Mô tả công việc:</b></p>
                    (Mức lương: 4 - 5 triệu VNĐ)
                    <ul>
                      <li>Đồng hành cùng Sứ giả (hỗ trợ phát âm, thuyết trình và làm việc nhóm với học viên) trên lớp
                        cùng học viên.</li>
                      <li>Sửa lỗi phát âm, bài tập; đưa ra giải pháp cùng Sứ giả để hỗ trợ học viên một cách tốt nhất.
                      </li>
                      <li>Các nhiệm vụ khác được giao trong khóa học.</li>
                    </ul>
                    <p><b>Chức vụ:</b> Nhân Viên Trợ Giảng</p>
                    <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                    <p><b>Thời gian làm việc:</b></p>
                    <ul>
                      <li><b>Ca sáng:</b> 7h - 11h</li>
                      <li><b>Ca tối:</b> 18h - 22h</li>
                    </ul>
                    <p><b>Quyền lợi được hưởng:</b></p>
                    <ul>
                      <li>Được chung team đội ngũ sứ giả Ms Hoa Giao tiếp</li>
                      <li>Được rèn luyện các kỹ năng giao tiếp, giảng dạy, kỹ năng mềm.</li>
                      <li>Được cân nhắc trở thành Sứ giả tại Ms Hoa Giao tiếp</li>
                    </ul>
                    <p><b>
                        Yêu cầu bằng cấp (tối thiểu):</b> Sinh viên năm 2, 3, 4 các trường Đại học hoặc Cao đẳng.</p>
                    <p><b>
                        Yêu cầu công việc:</b></p>
                    <ul>
                      <li>Có phát âm tiếng Anh chuẩn, đam mê và yêu thích môn ngoại ngữ này</li>
                      <li>Năng động, nhiệt tình, ham làm quen gặp gỡ. Luôn vui vẻ khi tham gia các hoạt động ngoại
                        khóa, tình nguyện.</li>
                      <li>Tác phong làm việc chuyên nghiệp, có trách nhiệm, đôi khi có thể tò mò, ham học hỏi.</li>
                      <li>Có thể làm việc lâu dài.</li>
                      <li>Thời gian linh hoạt.</li>
                    </ul>
                    <p><b>
                        Yêu cầu giới tính:</b> Nữ</p>
                    <p><b>
                        Ngành nghề:</b> Trợ Giảng</p>
                  </div>
                </div>
              </div>
              <div class="bando">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0946808665835!2d108.20699741446907!3d16.060575843936768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b4138a3919%3A0x6613f9bc1c9b3417!2zMTQ2IFBoYW4gVGhhbmgsIFRo4bqhYyBHacOhbiwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1625045712194!5m2!1svi!2s"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> <button type="button"
                  class="btn btn-info"><a href="Ungtuyen.html" style="text-decoration: none;color: black;">Ứng
                    tuyển</a></button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- đánh giá -->
    <div class="container-fluid" id="danhgia">
      <div class="container text-center">
        <h2><b>Mọi người nói gì về <span style="color: red;">Chúng Tôi</span> ?</b></h2>
        <br>
      </div>
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="padding: 20px;">
            <div class="carousel-item active" style="background-color: rosybrown;">
              <div class="row">
                <div class="col-md-4">
                  <img src="https://kenh14cdn.com/2018/10/18/vuong-ngoc-nhu-1539880681652972337092.jpeg" class="img"
                    alt="">
                </div>
                <div class="col-md-8">
                  <div class="binhluan">
                    <p style="color: rgb(247, 245, 245);">Nguyễn Thị Linh Đan<br>
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saotrang.png" alt="" style="height: 20px;">
                    </p>

                    <p style=" color: #000;"><i>
                        “Ứng dụng giúp tìm kiếm công việc theo vị trí người<br> tìm
                        việc. Điều đó giúp người dùng tìm được các<br> công việc gần chỗ ở,tiện đi lại, giảm bớt được
                        nhiều chi <br> phí và có thể check thông tin bất cứ lúc nào!”
                      </i></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="background-color: rosybrown;">
              <div class="row">
                <div class="col-md-4">
                  <img
                    src="https://static2.yan.vn/YanNews/2167221/201910/nam-sinh-hutech-voi-chieu-cao-khung-va-goc-nghieng-than-thanh-khong-khac-gi-tai-tu-dien-an-19a12f56.jpg"
                    class="img" alt="">
                </div>
                <div class="col-md-8">
                  <div class="binhluan">
                    <p style="color: rgb(247, 245, 245);">Nguyễn Thành Trung<br>
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                    </p>
                    <p style=" color: #000;"><i>
                        “Ứng dụng giúp tìm kiếm công việc theo vị trí người<br> tìm
                        việc. Điều đó giúp người dùng tìm được các<br> công việc gần chỗ ở, tiện đi lại, giảm bớt được
                        nhiều <br> chi phí và có thể check thông tin bất cứ lúc nào!”
                      </i></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="background-color: rosybrown;">
              <div class="row">
                <div class="col-md-4">
                  <img
                    src="https://image-us.eva.vn/upload/3-2019/images/2019-07-27/chup-anh-mac-do-cong-nhan-bi-che-lam-mau-nu-sinh-vien-dap-tra-cong-viec-cua-toi-day-2-1564194785-256-width660height879.jpg"
                    class="img" alt="">
                </div>
                <div class="col-md-8">
                  <div class="binhluan">
                    <p style="color: rgb(247, 245, 245);">Nguyễn Thùy Trang<br>
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saovang.png" alt="" style="height: 20px;">
                      <img src="assets/icons/saotrang.png" alt="" style="height: 20px;">
                    </p>
                    <p style=" color: #000;"><i>
                        “Tôi rất thích ứng dụng này <span style="color: red;">&#9829;</span>,<br>
                        nhờ nó mà tối đã tìm được công việc phù
                        hợp<br> với bản thân của mình mà không cần bỏ sức ra đi tìm.”
                      </i></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <hr>
    <div class="row mb-2" style="background-color: rgb(212, 214, 105); padding: 20px 5px;">
      <div class="col-md-2">

      </div>
      <div class="col-md-8 text-center">
        <h4>Đăng ký nhận email việc làm mới nhất</h4>
        <p>Hàng trăm người đã có việc làm sau khi để lại email tại đây</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="nhthuong@gmail.com">
          <div class="input-group-append">
            <button class="btn btn-outline-success" type="button">Đăng ký ngay</button>
          </div>
        </div>
        <p>Bằng cách đăng ký qua gmail, bạn đồng ý với <span style="color: blue;">Điều khoản sử dụng</span> và <span
            style="color: blue;">Chính sách Bảo Mật</span> của chúng TN123. Bạn có thể hủy thông báo qua email bất cứ
          lúc nào.</p>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
@endsection
