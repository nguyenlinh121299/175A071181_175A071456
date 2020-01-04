<?php
    include('php/header.php')



?>
    <!--===========menu main==============-->
    <main>
        <div class="slider">
            <div class="container">
                <div class="menu-block">
                    <div class="menu">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="project.php"><i class="fas fa-home"></i></a>|</li>
                                <li><a href="sinhvien.php">SINH VIÊN</a>|</li>
                                <li><a href="Tintuc&thongbao.php">TIN TỨC & THÔNG BÁO</a>|</li>
                                <li><a href="#">TUYỂN SINH</a>|</li>
                                <li><a href="#">GIỚI THIỆU</a>|</li>
                                <li><a href="#">ĐÀO TẠO</a>|</li>
                                <li><a href="#">KHOA HỌC VÀ CÔNG NGHỆ</a>|</li>
                                <li><a href="#">ĐỐI NGOẠI</a>|</li>
                                <li><a href="#">LIÊN HỆ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./image/banner1.png" class="d-block w-100" alt="first slide">
                            </div>
                            <div class="carousel-item">
                                <img src="./image/banner2.jpg" height="333px" class="d-block w-100" alt="second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="./image/banner3.png" class="d-block w-100" alt="third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                    </script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
                    </script>
                </div>
            </div>
        </div>
        <!--=============================================================================-->
        <div class="menu-main">
            <div class="container">
                <div class="row">
                    <div class="content-menu-main">
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-menu1.png" alt="">
                            </div>
                            <span><a href="#"> 60 nam tlu</a></span>
                        </div>
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-nenu2.jpg" alt="">
                            </div>
                            <span><a href="#"> Đảm bảo chất lượng</a></span>
                        </div>
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-menu7.jpg" alt="">
                            </div>
                            <span><a href="#"> Khoa, Viện</a></span>
                        </div>
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-menu4.jpg" alt="">
                            </div>
                            <span><a href="#"> Thư Viện</a></span>
                        </div>
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-menu5.jpg" alt="">
                            </div>
                            <span><a href="#"> TLU-mail</a></span>
                        </div>
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-menu6.jpg" alt="">
                            </div>
                            <span><a href="./file_login/login_student.html"> Đăng ký học</a></span>
                        </div>
                        <div class="small">
                            <div class="small-img">
                                <img src="image/main-menu3.jpg" alt="">
                            </div>
                            <span><a href="#"> Lịch công tác</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr width="100%" align="center">
        <div class="news-notifi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="news">
                            <h3><a href="#" style="color: rgb(7, 38, 131); font-size: 25px; font-weight: bold;  text-decoration: none;"> Tin Tức</a></h3>
                            <div class="row">
                                <div class="col-lg-7">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./image/main-top.jpg" width="415px" height="250px" alt="First slide">
                                                <a href="#" style="font-weight:bold ">
                            Lãnh đạo Trường Đại học Thủy lợi nhận giải thưởng "Giọt hồng năm 2019"</a>
                                                <p>Ngày 04/12/2019, tại Hà Nội, Viện Huyết học - Truyền máu Trung ương tổ chức Lễ trao giải thưởng Giọt Hồng và Gặp mặt nhà quản lý năm 2019. Đây</p>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./image/slide-tintuc2.png" alt="Second slide">
                                                <a href="#" style="font-weight:bold ">
                            Đội tuyển Olympic Tin học sinh viên tạo dấu ấn tại kỳ thi toàn quốc lần thứ 28"</a>
                                                <p>Ngày 04/12/2019, tại Hà Nội, Viện Huyết học - Truyền máu Trung ương tổ chức Lễ trao giải thưởng Giọt Hồng và Gặp mặt nhà quản lý năm 2019. Đây</p>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./image/slide-tintuc3.png" alt="Third slide">
                                                <a href="#" style="font-weight:bold "> Hai doanh nhân Việt lọt top 10 nhà từ thiện tuyệt vời nhất châu Á
                                                </a>
                                                <p>Vợ chồng người đồng sáng lập Công ty Đầu tư và Kinh doanh Golf Long Thành vừa được ghi danh vào danh sách 30 "anh hùng từ thiện" của Tạp chí Forbes. Chia sẻ Tweet</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="news-right">
                                        <div class="menu-news-right">
                                            <ul>
                                                <li><a href="">Kế hoạch bổ nhiệm chức danh giáo sư, phó giáo sư năm 2019</a></li>
                                                <hr>
                                                <li><a href="">Thêm 4 chương trình đào tạo tiến hành khảo sát sơ bộ </a></li>
                                                <hr>
                                                <li><a href="">Khai giảng Khóa học Bồi dưỡng lý luận chính trị dành cho đối tượng kết nạp Đảng </a></li>
                                                <hr>
                                                <li><a href="">Đại học Thủy lợi giành 8 giải thưởng Đồ án xuất sắc - Giải Loa thành năm 2019 </a></li>
                                                <hr>
                                                <li><a href="">Lễ ký kết Biên bản ghi nhớ với Công ty TNHH Mirae E&I, Hàn Quốc </a></li>
                                                <hr>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="notifi">
                            <h3><a href="#" style=" color: blue; text-decoration: none;"> Thông báo</a></h3>
                            <div class="menu-notifi">
                                <ul>
                                    <li><a href=""> Hội thảo chương trình Meister School đào tạo kỹ sư làm việc tại Nhật Bản</a></li>
                                    <hr>
                                    <li><a href="">Danh sách sinh viên nhận học bổng khuyến khích học tập kỳ II năm học 2018-2019</a></li>
                                    <hr>
                                    <li><a href=""> Một số thông báo phục vụ sinh hoạt lớp tháng 12/2019</a></li>
                                    <hr>
                                    <li><a href="">Triển khai đánh giá kết quả rèn luyện học kỳ 1 và toàn khóa học của sinh viên hệ chính quy làm tốt nghiệp học kỳ 1 năm học 2019-2020</a></li>
                                    <hr>
                                    <li><a href=""> Thông báo thi Olympic cấp trường môn Cơ học đất 2019</a></li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="admissions">
            <div class="container">
                <h3><a href="#" style="color: rgb(7, 38, 131); font-size: 25px; font-weight: bold;  text-decoration: none;"> Tuyen Sinh</a  ></h3>
        <div class="row">
         
          <div class="col-lg-9">
            <div class="admiss-left">
              <div class="row">
                <div class="col-lg-4">
                  <div class="small-admiss">
                    <img src="image/main-TS.png" alt="" class="img-fluid">
                    <p><a href="">Lịch thi tuyến sinh đào tạo trình độ thạc sĩ năm...</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-admiss">
                <img src="image/main-TS2.png" alt="" class="img-fluid">
                <p><a href="">Lịch học ôn thi tuyển sinh thạc sĩ năm 2019</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-admiss">
                <img src="image/main-ts3.png" alt="" class="img-fluid">
                <p><a href="">Thông báo các môn thi tuyển sinh trong đào tạo...</a></p>
            </div>
        </div>

        </div>
        </div>
        </div>
        <div class="col-lg-3">
            <ul>
                <li><a href="#">Lịch học chuyển đổi thi tuyển sinh cao học năm...</a></li>
                <hr>
                <li><a href="#">Thông báo tuyển sinh liên thông trình độ đại học...</a></li>
                <hr>
                <li><a href="#"> Quyết định điểm chuẩn năm 2019 tại cơ sở mở rộng...</a></li>
                <hr>
                <li><a href="#"> Quyết định điểm chuẩn năm 2019 của Trường ĐH Thủy...</a></li>
                <hr>
            </ul>

        </div>
        </div>
        </div>
        </div>
        <div class="educate">
            <div class="container">
                <h3><a href="#" style="color: rgb(7, 38, 131); font-size: 20px; font-weight: bold;  text-decoration: none;"> ĐÀO TẠO</a></h3>
                <div class="row">

                    <div class="col-lg-9">
                        <div class="educate-left">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="small-educate">
                                        <img src="image/main-ts3.png" alt="" class="img-fluid">
                                        <p><a href=""> Thông báo về kế hoạch học kỳ 2 năm học 2019-2020....</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small-educate">
                                        <img src="image/main-ts3.png" alt="" class="img-fluid">
                                        <p><a href="">Thông báo về kế hoạch học kỳ 2 năm học 2019-2020...</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small-educate">
                                        <img src="image/main-TS.png" alt="" class="img-fluid">
                                        <p><a href="">Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ....</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Thông tin thời gian bảo vệ luận án tiến sĩ cấp...</a></li>
                            <hr>
                            <li><a href="#">Quyết định Chuẩn đầu ra Ngoại ngữ cho K61 và học...</a></li>
                            <hr>
                            <li><a href="#"> Thông tin luận án tiến sĩ cấp Trường của NCS Tạ...</a></li>
                            <hr>
                            <li><a href="#"> Thông báo triển khai kế hoạch học kỳ song song kỳ....</a></li>
                            <hr>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
        <div class="technology" style="background-color: #cfd7de; ">
            <div class="container">
                <h3><a href="#" style="color: rgb(7, 38, 131); font-size: 20px; font-weight: bold;  text-decoration: none;"> KHOA HỌC VÀ CÔNG NGHỆ</a></h3>
                <div class="row">

                    <div class="col-lg-9">
                        <div class="educate-left">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="small-technology">
                                        <img src="image/main-khcn2.png" alt="" class="img-fluid">
                                        <p><a href=""> Đề xuất nhiệm vụ thích ứng với BĐKH..</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small-technology">
                                        <img src="image/main-khcn3.png" alt="" class="img-fluid">
                                        <p><a href="">Nhân 74 năm Ngày Truyền thống ngành Thủy lợi: Đôi...</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small-technology">
                                        <img src="image/main-KHCN.png" alt="" class="img-fluid">
                                        <p><a href="">Hội nghị Khoa học thường niên năm 2019..</a></p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="image/main-khcn4.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <p><a href="#"> >> xem tất cả </a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="students">
            <div class="container">
                <h3><a href="#" style="color: rgb(7, 38, 131); font-size: 20px; font-weight: bold;  text-decoration: none;"> SINH VIÊN</a></h3>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="educate-left">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="small-students">
                                        <img src="image/main-sv1.png" alt="" class="img-fluid">
                                        <ul class="list-new">
                                            <li><a href="#"> Hướng dẫn khai thông tin online dành...</a></li>
                                            <li><a href="#">Trường ĐH Thủy lợi tạo sức hút tại Ngày...</a></li>
                                            <li><a href="#">Trường ĐH Thủy lợi thông báo ngưỡng...</a></li>
                                            <li><a href="#">Thí sinh trúng tuyển diện xét học bạ...></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small-students">
                                        <img src="image/main-sv2.png" alt="" class="img-fluid">
                                        <ul class="list-new">
                                            <li><a href="#">ĐH Thủy lợi dự kiến mở một số ngành...</a></li>
                                            <li><a href="#">Danh sách sinh viên được hưởng trợ cấp...</a></li>
                                            <li><a href="#">Tecotec group tuyển dụng nhân sự</a></li>
                                            <li><a href="#">Sinh viên Trường Đại học Thủy lợi đạt...</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small-students">
                                        <img src="image/main-sv3.png" alt="" class="img-fluid">
                                        <ul class="list-new">
                                            <li><a href="#">
                       Cựu sinh viên Đại học Thủy lợi thưởng 6...</a></li>
                                            <li><a href="#">ừ khó đi lên, cựu sinh viên Thủy lợi...</a></li>
                                            <li><a href="#">Hai doanh nhân Việt lọt top 10 nhà từ...</a></li>
                                            <li><a href="#">Cựu sinh viên Nhà trường giữ chức Phó...</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!--====================footer=================-->

<?php
    include('php/footer.php')

?>