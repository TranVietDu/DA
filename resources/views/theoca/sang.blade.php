@extends('master')

@section('content')
    <!-- content -->
    <div class="container-fluid content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="top">Tất cả công việc &#10148; Ca sáng &#10148; Trang 1/3</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-3">
                    <h4 style="color: rgb(28, 146, 146);">&#9776; Sàng lọc</h4>
                    <form class="sangloc">
                        <div class="sapxep">
                            <h5 style="text-align: center; color:rgb(110, 23, 71);">Sắp xếp</h5>
                            <button class="tron">Độ chính xác</button> <button class="tron1">Thời gian</button>
                            <hr>
                        </div>
                        <div class="thoigian">
                            <h5>Thời gian</h5>
                            <button class="tron">Bán thời gian</button>
                            <button class="tron1">Toàn thời gian</button>
                            <hr>
                        </div>
                        <div class="loaivieclam">
                            <h5>Loại việc làm</h5>
                            <button class="tron">Mọi việc làm</button><br>
                            <button class="tron1">Phụ vụ</button> <button class="tron1">Bán hàng</button> <button
                                class="tron1">Gia sư</button>
                            <hr>
                        </div>
                        <div class="ngaydang">
                            <h5>Ngày đăng</h5>
                            <button class="tron">Mọi thời gian</button><br>
                            <button class="tron1">24 giờ qua</button> <button class="tron1">7 ngày qua</button><br>
                            <button class="tron1">14 ngày qua</button> <button class="tron1">30 ngày qua</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <!--111111111111-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal1"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/1.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân Viên Phục Vụ và Pha Chế</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> Thỏa thuận</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Hải Châu</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 3 giờ trước</i>

                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" role="dialog">
                                <div class="modal-dialog" style="margin: 0px auto;">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">The NOGARD COFFEE</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/1.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                (Mức lương: Thỏa thuận)
                                                <ul>
                                                    <li>Chào đón khách hàng</li>
                                                    <li>Nhận order, phục vụ nước cho khách hàng</li>
                                                    <li>Vệ sinh bàn khi khách ra về</li>
                                                </ul>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca sáng:</b>6h30 - 11h30</li>
                                                    <li><b>Ca tối:</b> 14h30 - 22h30</li>
                                                    <li style="list-style: none;">(có thể xoay ca)</li>
                                                </ul>
                                                <p><b>Quyền lợi được hưởng:</b></p>
                                                <ul>
                                                    <li> Đồng nghiệp hòa đồng - thân thiện - vui vẻ.</li>
                                                    <li>Và nhiều quyền lợi hơn khi gắn bó lâu dài với cửa hàng.</li>
                                                </ul>
                                                <p><b>Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                                                <p><b>
                                                        Yêu cầu công việc:</b></p>
                                                <ul>
                                                    <li>Có trách nhiệm, nhiệt tình trong công việc.</li>
                                                    <li>Có tính sáng tạo trong công việc.</li>
                                                    <li>Nhanh nhẹn, vui vẻ, trung thực, đúng giờ.</li>
                                                </ul>
                                                <p><b>
                                                        Yêu cầu giới tính:</b> Nam/Nữ</p>
                                                <p><b>
                                                        Ngành nghề:</b> Phục Vụ/ Pha chế</p>
                                            </div>
                                        </div>
                                        <div class="bando">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.56945230016!2d108.22417083604654!3d16.035913023397264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421969684607b5%3A0xa273ee9e274da81d!2sThe%20Nogard%20Coffee!5e0!3m2!1svi!2s!4v1621005946790!5m2!1svi!2s"
                                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                    style="text-decoration: none;color: black;">Ứng tuyển</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--2222222222-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal2"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/2.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân Viên Bán Hàng tại
                                                    Store</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> Thỏa thuận</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Hải Châu</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 4 giờ trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Chiến STORE</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/2.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                (Mức lương: Thoat thuận)
                                                <ul>
                                                    <li>Tư vấn bán hàng điện thoại</li>
                                                    <li>Viết bài bán hàng, tư vấn trả lời trên Fanpage</li>
                                                    <li>Kiểm tra hàng hóa</li>
                                                </ul>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca sáng:</b> 7h - 12h</li>
                                                </ul>
                                                <p><b>Quyền lợi được hưởng:</b></p>
                                                <ul>
                                                    <li>Môi trường làm việc năng động, phù hợp cho giới trẻ</li>
                                                    <li>Được học hỏi, tiếp xúc nhiều với công nghệ</li>
                                                    <li>Ưu đãi khi mua hàng của cửa hàng</li>
                                                </ul>
                                                <p><b>
                                                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                                                <p><b>
                                                        Yêu cầu công việc:</b></p>
                                                <ul>
                                                    <li>Độ tuổi từ 18 – 25 tuổi</li>
                                                    <li>Có kỹ năng giao tiếp tốt, vui vẻ, hoạt bát, nhanh nhẹn</li>
                                                    <li>Tác phong gọn gàng, sạch sẽ, đi làm đúng giờ, có trách nhiệm với
                                                        công
                                                        việc</li>
                                                    <li>Có đam mê về công nghệ và hiểu biết về iPhone</li>
                                                </ul>
                                                <p><b>
                                                        Yêu cầu giới tính:</b> Nam/Nữ</p>
                                                <p><b>
                                                        Ngành nghề:</b> Bán hàng, Việc làm sinh viên, Việc làm thêm buổi
                                                    ngày.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bando">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.27851407038!2d108.20754281468383!3d16.051030688892155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b9a1fc1abb%3A0xeb80aeafff5579c0!2zQ2hp4bq_biBTdG9yZQ!5e0!3m2!1svi!2s!4v1621006772098!5m2!1svi!2s"
                                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                    style="text-decoration: none;color: black;">Ứng tuyển</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--333333333-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal3"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/3.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân viên phục vụ
                                                    BiDa</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> 3tr - 3tr5</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Ngũ Hành Sơn</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 5 giờ trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal3" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Quán BiDa ANHEM</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/3.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                Số lượng cần tuyển: 5<br>
                                                (Mức lương: Thỏa thuận)
                                                <ul>
                                                    <li>Chào đón khách hàng</li>
                                                    <li>Mở bàn, lấy bi, ghi giờ, phục vụ nước cho khách hàng</li>
                                                    <li>Vệ sinh bàn khi khách ra về</li>
                                                </ul>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Cả ngày:</b> 9h - 23h</li>
                                                    <li><b>Ca sáng:</b> 9h - 15h</li>
                                                    <li style="list-style: none;">(có thể linh hoạt đổi ca)</li>
                                                </ul>
                                                <p><b>Quyền lợi được hưởng:</b></p>
                                                <ul>
                                                    <li>Môi trường năng động, thoải mái phát triển</li>
                                                    <li>Được nhân lương các ngày lễ tết</li>
                                                </ul>
                                                <p><b>
                                                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                                                <p><b>
                                                        Yêu cầu công việc:</b></p>
                                                <ul>
                                                    <li>Ưu tiên : có kinh nghiệm và gắn bó lâu dài</li>
                                                    <li>Nhanh nhẹn , thật thà</li>
                                                </ul>
                                                <p><b>
                                                        Yêu cầu giới tính:</b> Nam</p>
                                                <p><b>
                                                        Ngành nghề:</b> Phục Vụ Bàn</p>
                                            </div>
                                        </div>
                                        <div class="bando">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245483.6581968546!2d108.25097749999999!3d15.9779663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4aefd62f2971c568!2sBida%20Anh%20Em!5e0!3m2!1svi!2s!4v1621007871017!5m2!1svi!2s"
                                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                    style="text-decoration: none;color: black;">Ứng tuyển</a></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--4444444444-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal4"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/4.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân Viên Phục Vụ </b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> Thỏa thuận</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Hải Châu</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 7 giờ trước</i>

                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal4" role="dialog">
                                <div class="modal-dialog" style="margin: 0px auto;">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">EM Cà Phê</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/4.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                <ul>
                                                    <li style="list-style: decimal-leading-zero;"><b>Nhân viên phục vụ
                                                            Full-time(04 người)</b>
                                                        <ul>
                                                            <li><b>Yêu cầu: </b>Nam/ Nữ tốt nghiệp THPT trở lên, có kinh
                                                                nghiệm
                                                                trong lĩnh vực nhà hàng, khách sạn biết ngoại ngữ là một
                                                                lợi
                                                                thế.</li>
                                                            <li><b>Thời gian làm việc: </b>8 tiếng/1 ngày</li>
                                                            <li><b>Mức lương: </b>Thỏa thuận, chế độ ngày nghỉ, lễ tết
                                                                theo quy
                                                                định của nhà nước</li>
                                                        </ul>
                                                    </li>
                                                    <li style="list-style: decimal-leading-zero;"><b>Nhân viên phục vụ
                                                            Part-time(05 người)</b>
                                                        <ul>
                                                            <li><b>Yêu cầu: </b>Nam/Nữ tốt nghiệp THPT trở lên, biết
                                                                ngoại ngữ
                                                                là một lợi thế.</li>
                                                            <li><b>Thời gian làm việc: </b>4-8 tiếng/1 ngày</li>
                                                            <li><b>Mức lương: </b>Thỏa thuận, chế độ ngày nghỉ, lễ tết
                                                                theo quy
                                                                định của nhà nước</li>
                                                        </ul>
                                                    </li>
                                                    <li style="list-style: decimal-leading-zero;"><b>Tạp Vụ</b>
                                                        <ul>
                                                            <li> Dọn dẹp,lau chùi sạch sẽ, rửa bán đĩa</li>
                                                            <li>Thực hiện công việc theo sự chỉ đạo cấp trên.</li>
                                                            <li><b>Mức lương:</b>Thỏa thuận, chế độ ngày nghỉ, lễ tết
                                                                theo quy
                                                                định của nhà nước</li>
                                                        </ul>
                                                    </li>
                                                    <li><b>Chế độ và quyền lợi:</b>
                                                        <ul>
                                                            <li> Được hỗ trợ 1 suất ăn cơm/ca chính</li>
                                                            <li> Được đào tạo bài bản về nghiệp vụ</li>
                                                            <li> Làm việc trong môi trường năng động, công bằng</li>
                                                            <li> Cơ hội thăng tiến và phát triển bản thân</li>
                                                            <li> Tất cả các vị trí đều được nghỉ it nhất 4 ngày/1 tháng
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li style="list-style: none;">
                                                        <p><b>Yêu cầu chung: </b></p> Các ứng viên phải trên 18 tuổi,
                                                        sức khỏe
                                                        tốt, siêng năng, chăm chỉ, thật thà, nhiệt tình và có trách
                                                        nhiệm trong
                                                        công việc. Gắn bó lâu dài với nhà hàng.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bando">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.61990126119318!2d108.22413817939854!3d16.069722627836978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218318ba81305%3A0xcf1934fde2083fd1!2zODMgxJAuIFRy4bqnbiBQaMO6LCBI4bqjaSBDaMOidSAxLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1621070938679!5m2!1sen!2s"
                                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                        style="text-decoration: none;color: black;">Ứng
                                                        tuyển</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--555555555-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal5"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/5.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân Viên Phục vụ quán
                                                    CAFE</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> Thỏa thuận</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Sơn trà</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 10 giờ trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal5" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Công ty cổ phần PPC iGOLF Miền Trung (iGolf Cafe)
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/5.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                (Mức lương: 15k/h)
                                                <ul>
                                                    <li> Nhận Order của khách, bưng bê cafe</li>
                                                    <li> Giữ gìn vệ sinh chung của shop</li>
                                                    <li> Các công việc khác khi phỏng vấn sẽ trao đổi thêm</li>
                                                </ul>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca 1:</b> 7h - 12h (2 người)</li>
                                                    <li><b>Ca 2:</b> 12h - 17h (2 người)</li>
                                                </ul>
                                                Yêu cầu công việc:</b></p>
                                                <ul>
                                                    <li> Độ tuổi từ 18 – 25 tuổi</li>
                                                    <li> Ngoại hình ưa nhìn</li>
                                                    <li> Tác phong gọn gàng, sạch sẽ, đi làm đúng giờ, có trách nhiệm
                                                        với công
                                                        việc</li>
                                                </ul>
                                                <p><b>Yêu cầu giới tính:</b> Nữ</p>
                                                <p><b>Liên hệ:</b> Ms.Linh (0962 091 196)</p>
                                            </div>
                                            <div class="bando">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9212596506213!2d108.23632631747424!3d16.069575317896152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xadaff40984542dd1!2sShop%20iGolf%20Danang!5e0!3m2!1sen!2s!4v1621071743718!5m2!1sen!2s"
                                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                        style="text-decoration: none;color: black;">Ứng
                                                        tuyển</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--66666666-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal6"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/6.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân viên Phục Vụ & Pha chế</b>
                                            </h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> 2tr4/ 1 ca</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Sơn trà</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 1 ngày trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal6" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">CHINIEE COFFEE</h4>
                                        </div>
                                        <p> CHINIEE COFFEE cần tuyển 6 nhân viên phục vụ và pha chế</p>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/6.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca sáng:</b> 8h - 14h</li>
                                                    <li><b>Ca sáng:</b> 14h - 20h</li>
                                                    <li><b>Lương: </b>2,400,000/ 1 ca - Được nghỉ 1 ngày trong tháng.
                                                    </li>
                                                    <li style="list-style: none;">(có thể linh hoạt đổi ca)</li>
                                                </ul>
                                                <p><b>Yêu cầu công việc:</b></p>
                                                <ul>
                                                    <li>Nam / nữ đủ 18 tuổi trở lên</li>
                                                    <li>Biết trả lời tin nhắn khác hàng, chụp sản phẩm đăng hình trên
                                                        Facebook.
                                                    </li>
                                                    <li>Nhiệt tình chăm chỉ có trách nhiệm trong công việc.</li>
                                                </ul>
                                                <p><b>Ngành nghề:</b> Phục Vụ Bàn</p>
                                            </div>
                                        </div>
                                        <div class="bando">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4818.518246847426!2d108.23933070553991!3d16.08228751502642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421759fe1c9a5b%3A0x44e4945cff54d9bd!2sChiniee%20Coffee!5e0!3m2!1sen!2s!4v1621073004176!5m2!1sen!2s"
                                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                    style="text-decoration: none;color: black;">Ứng tuyển</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--77777777777777-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal7"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/7.png"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân Viên Bán bánh mỳ GANG</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> 3 - 4tr</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng/chiều</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Sơn trà</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 3 ngày trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal7" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Bánh Mỳ GANG</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/7.png" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Hình thức làm việc:</b> Bán thời gian</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca sáng:</b> 5h30 - 9h30</li>
                                                    <li><b>Ca chiều:</b> 15h30 - 19h30</li>
                                                </ul>
                                                Công việc cần làm:</b></p>
                                                <ul>
                                                    <li> Chuẩn bị nguyên liệu bánh mì</li>
                                                    <li> Kiểm kê nguyên liệu</li>
                                                    <li> Bán bánh mì, Order nguyên liệu</li>
                                                </ul>
                                                <p><b>Yêu cầu giới tính:</b> Nữ</p>
                                                <p><b>Liên hệ:</b> Ms.Trang (0931999655)</p>
                                            </div>
                                            <div class="bando">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.4309368393497!2d108.24062441468443!3d16.094993488865008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217f74586af73%3A0x39ccba86d3932cfd!2sMorning%20Jade%20Food%20Company%20Limited!5e0!3m2!1sen!2s!4v1621311227663!5m2!1sen!2s"
                                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                        style="text-decoration: none;color: black;">Ứng
                                                        tuyển</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--8888888888888888-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal8"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/8.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân viên bán Phụ Kiện ĐT</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> 2.5tr - 4tr</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Ngũ Hành Sơn</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 4 ngày trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal8" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">PHONE HUB</h4>
                                        </div>
                                        <p> Shop cần tuyển 3 nhân viên phụ bán Phụ Kiện điện thoại</p>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/8.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca sáng:</b> 7h - 11h</li>
                                                    <li><b>Ca sáng:</b> 12h - 17h</li>
                                                    <li style="list-style: none;">(có thể linh hoạt đổi ca)</li>
                                                </ul>
                                                <p><b> Chính sách:</b></p>
                                                <ul>
                                                    <li>Lương thưởng: Lương cứng+hoa hồng bán điện thoại+hoa hồng phụ
                                                        kiện + hoa
                                                        hồng sửa chữa+ thưởng lễ</li>
                                                    <li>Môi trường làm việc thoải mái, cực kỳ nhẹ nhàng, hòa đồng, thân
                                                        thiện,
                                                        phù hợp với các bạn sinh viên cần kiếm thêm thu nhập.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bando">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0507896126032!2d108.21999586468411!3d16.062853988884864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ccdcb2a951%3A0x6b26773453a4765!2zUGjGsOG7m2MgTmluaCwgSOG6o2kgQ2jDonUgRGlzdHJpY3QsIERhIE5hbmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1621312187689!5m2!1sen!2s"
                                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                    style="text-decoration: none;color: black;">Ứng tuyển</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--999999999999-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal9"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/99.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân viên bán Điện
                                                    thoại</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> 3tr - 4tr</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Hải Châu</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 5 ngày trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal9" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">PHONE RUBI</h4>
                                        </div>
                                        <p> Shop cần tuyển 3 nhân viên phụ bán Phụ Kiện điện thoại</p>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/99.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca sáng:</b> 7h - 11h</li>
                                                    <li><b>Ca sáng:</b> 12h - 17h</li>
                                                    <li style="list-style: none;">(có thể linh hoạt đổi ca)</li>
                                                </ul>
                                                <p><b> Chính sách:</b></p>
                                                <ul>
                                                    <li>Lương thưởng: Lương cứng+hoa hồng bán điện thoại+hoa hồng phụ
                                                        kiện + hoa
                                                        hồng sửa chữa+ thưởng lễ</li>
                                                    <li>Môi trường làm việc thoải mái, cực kỳ nhẹ nhàng, hòa đồng, thân
                                                        thiện,
                                                        phù hợp với các bạn sinh viên cần kiếm thêm thu nhập.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bando">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0507896126032!2d108.21999586468411!3d16.062853988884864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ccdcb2a951%3A0x6b26773453a4765!2zUGjGsOG7m2MgTmluaCwgSOG6o2kgQ2jDonUgRGlzdHJpY3QsIERhIE5hbmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1621312187689!5m2!1sen!2s"
                                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                    style="text-decoration: none;color: black;">Ứng tuyển</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--1000000000000000-->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal10"
                                style="text-align: left;background-color: white; border: none;color: black; width: 100%;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-fluid" src="assets/images/image congviectheoca/10.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font"><b>Nhân Viên phục vụ nhà
                                                    Hàng</b></h5>
                                            <div class="jobs-update">
                                                <img src="https://cdn3.iconfinder.com/data/icons/essential-27/32/dolar-128.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;margin-right: 10px;"> Thỏa thuận</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/clock-time-ticker-times-hour-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px; margin-right: 10px;"> Ca sáng</span>
                                                <img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_location-256.png"
                                                    alt="" style="height: 12px; width: auto;"><span
                                                    style="font-size: 13px;">
                                                    Hải Châu</span><br>
                                            </div>
                                            <i style="font-size: 12px; color: darkcyan;"><span
                                                    style="color: springgreen;">
                                                    &#9679;</span> 5 ngày trước</i>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal10" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" style="width: auto; height: auto;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Nhà hàng STAR BEEF</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <img src="assets/images/image congviectheoca/10.jpg" alt=""
                                                    style="width: 100%;">
                                                <p><b>Mô tả công việc:</b></p>
                                                (Mức lương: Thỏa thuận)
                                                <p><b>Chức vụ:</b> Nhân Viên</p>
                                                <p><b>Thời gian làm việc:</b></p>
                                                <ul>
                                                    <li><b>Ca 1:</b> 7h - 14h</li>
                                                    <li><b>Ca 2:</b> 14h - 22h</li>
                                                </ul>
                                                <p><b>Quyền lợi được hưởng:</b></p>
                                                <ul>
                                                    <li>Môi trường làm việc năng động, phù hợp cho giới trẻ</li>
                                                    <li>Được nhân lương các ngày lễ tết</li>
                                                </ul>
                                                <p><b>
                                                        Yêu cầu bằng cấp (tối thiểu):</b> Không cần thiết</p>
                                                <p><b>
                                                        Yêu cầu công việc:</b></p>
                                                <ul>
                                                    <li>Làm việc lâu dài , có trách nhiệm .</li>
                                                    <li>Siêng năng, thật thà ,chăm chỉ , luôn vui vẻ</li>ssss
                                                </ul>
                                                <p><b>
                                                        Yêu cầu giới tính:</b> Nam/Nữ</p>
                                                <p><b>
                                            </div>
                                            <div class="bando">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.013813022754!2d108.22016831468413!3d16.064772988883707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421833250855e7%3A0x3929333ec953216e!2zODEgWcOqbiBCw6FpLCBQaMaw4bubYyBOaW5oLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1621313204028!5m2!1sen!2s"
                                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-info"> <a href="Ungtuyen.html"
                                                        style="text-decoration: none;color: black;">Ứng
                                                        tuyển</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chuyen Trang -->
            <div class="row justify-content-md-center">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6 text-center">
                    <nav aria-label="Search results pages">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Trước</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="Casang.html">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="Casang2.html">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="Casang3.html">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sau</a>
                            </li>
                        </ul>
                    </nav>
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
                <p>Bằng cách đăng ký qua gmail, bạn đồng ý với <span style="color: blue;">Điều khoản sử dụng</span> và
                    <span style="color: blue;">Chính sách Bảo Mật</span> của chúng TN123. Bạn có thể hủy thông báo qua
                    email bất cứ lúc nào.
                </p>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
@endsection
