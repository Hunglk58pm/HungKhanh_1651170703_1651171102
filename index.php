<?php
require"connect.php"
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen,print" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>Document</title>
    </head>

    <body>
        <header>
            <div class="topheader">
                <nav class="navbar navbar-expand-lg ">
                    <div class="contact">
                        <span>Hotline: <a href="#">0902.298.300</a>  - <a href="#">0906.298.300</a></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="material-icons icon" style="color: white">toc</i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">SINH VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">GIẢNG VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ĐÀO TẠO QUỐC TẾ </a>
                            </li>
                        </ul>
                        <div class="search">
                            <form action="#">
                                <input type="search" placeholder="Tìm kiếm thông tin">
                                <i class="material-icons icon" style="color:white">search</i>
                            </form>
                            <div class="lang">
                                <img class="lang " src="img/flags/en.jpg" alt="english flag">
                            </div>
                        </div>

                    </div>
                </nav>
                <div id="main-header">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo_ntt.png" alt="" ></a>
                    </div>
                    <div class="main-menu">
                        <a href="trangchitiet.php"><i class="material-icons icon">info </i>   Giới thiệu</a>
                        <a href="#">Tuyển sinh</a>
                        <a href="#">Đào tạo</a>
                        <a href="#">Nghiên cứu</a>
                        <a href="#">Hợp tác doanh nghiệp</a>
                    </div>
                </div>
                
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <div class="carousel-caption text-left">
                                    <h3>Day la slide 1</h3>
                                </div>
                                <img src="img/s1.jpg" alt="">
                            </div>
                            <?php

                              $sql= "SELECT * FROM `slideshow`  ";

                              $data=mysqli_query($con,$sql);

                              while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                              {
                              echo "  <div class='item'>";
                              echo "<div class='carousel-caption text-left'>";
                              echo "<h3>".$row['tieudeslide']."</h3>";
                              echo "</div>";
                              echo "<img src=".$row['imgslide']." >";
                              echo "</div>";
                              }

                                ?>

                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main>
          
                              
                <div id="doanmot">
                    <div class="col-md-9">
                        <h2><a class="tieude" href="#">Tin tức</a></h2>
                        <div class="card-deck">
                            <?php

                          $sql= "SELECT * FROM `tin` WHERE idanhmuc=1 ";

                          $data=mysqli_query($con,$sql);

                          while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                          {
                          echo "  <div class='card'>";
                          echo "<img src=".$row['hinhanh']." class='card-img-top' >";
                          echo "<div class='card-body'>";
                          echo "<a style='color:black;'>".$row['tieude']."</a>";
                          echo " <p class='card-text'>".$row['ndtin']."</p>";
                          echo "<p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";
                          echo "</div>";
                          echo "</div>";
                          }

                          ?>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2><a class="tieude" href="#">Media</a></h2>
                        <div class="yotubediv">
                            <iframe src="https://www.youtube.com/embed/JViDyojZzhs" width= 239px  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="nav flex-column">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="material-icons icon">navigate_next</i>
                    ĐIỂM TIN THÁNG 8</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="material-icons icon">navigate_next</i>
                    ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="material-icons icon">navigate_next</i>
                    NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                            
               
            </div>
            <div id="doanhai">
                    <div class="col-md-9" style="display:flex;">
                        <?php

                            $sql= "SELECT * FROM `doanhai`  ";

                            $data=mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))

                            {

                            echo "<div class='col-sm-6'> ";
                            echo "<h2><a class='tieude' href='#'>".$row['danhmucdoanhai']."</a></h2>";
                            echo "<img src=".$row['imgdoanhai']." alt='Thumbnail'>";
                            echo "<a class='card-title' href='#';>".$row['tieudedoanhai']."</a>";
                            echo "<p class='card-text'>".$row['nddoanhai']."</p>";
                            echo "<p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";
                            echo "</div>";

                            }

                            ?>
                            <!-- <div class="col-md-3">
                            <h3><a class='tieude' href='#'>Sự kiện nổi bật</a></h3>
                            </div> -->
                            <div class="col-lg-4">
                                <h2><a class="tieude" href="#">Sự kiện nổi bật</a></h2>
                                <ul class="list-unstyled">
                                    <li class="media event">
                                        <div class="d-flex align-items-center mr-3 thumb c-white">
                                            <span class="inner text-center w-100">
                                                Sep<br>
                                                <b>25</b>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="title mt-0"><a href="/web/su-kien/dai-hoi-dai-bieu-doan-tncs-ho-chi-minh-truong-dh-nguyen-tat-thanh-lan-vii-nhiem-ky-2019-2022">Đại hội đại biểu Đoàn TNCS Hồ CHí Minh - Trường ĐH Nguyễn Tất Thành lần VII, nhiệm kỳ 2019 - 2022</a></h5>
                                            <ul class="breadcrumb mb-0 bgm-white">
                                                <li class="breadcrumb-item col-xs-auto time">
                                                    <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                                                </li>
                                                <li class="breadcrumb-item col-xs-auto">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="media event">
                                        <div class="d-flex align-items-center mr-3 thumb c-white">
                                            <span class="inner text-center w-100">
                                                Sep<br>
                                                <b>22</b>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="title mt-0"><a href="/web/su-kien/chuyen-de-tot-nghiep-lop-viet-nam-hoc-khoa-du-lich-va-viet-nam-hoc">Chuyên đề tốt nghiệp lớp Việt Nam học - Khoa Du lịch và Việt Nam học</a></h5>
                                            <ul class="breadcrumb mb-0 bgm-white">
                                                <li class="breadcrumb-item col-xs-auto time">
                                                    <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:00
                                                </li>
                                                <li class="breadcrumb-item col-xs-auto">Sân bóng - cơ sở quận 7, 458/3F Nguyễn Hữu Thọ, phường Tân Hưng, quận 7</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="media event">
                                        <div class="d-flex align-items-center mr-3 thumb c-white">
                                            <span class="inner text-center w-100">
                                                Sep<br>
                                                <b>19</b>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="title mt-0"><a href="/web/su-kien/workshop-chu-de-youtube-da-thay-doi-cuoc-song-cua-toi-nhu-the-nao">Workshop, Chủ đề: "Youtube đã thay đổi cuộc sống của tôi như thế nào''</a></h5>
                                            <ul class="breadcrumb mb-0 bgm-white">
                                                <li class="breadcrumb-item col-xs-auto time">
                                                    <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                                                </li>
                                                <li class="breadcrumb-item col-xs-auto">Hội trường L.HT1, 331 QL1A, phường An Phú Đông, quận 12</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a class="c-blue-a5 font-weight-bold" href="/web/su-kien/"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                                </ul>
                            </div>
                    </div>

                </div>
        </main>
        <!-- Footer -->
        <footer class="page-footer font-small indigo">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ĐH NGUYỄN TẤT THÀNH</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Thư ngỏ</a>
                            </li>
                            <li>
                                <a href="#!">Tầm nhìn - Sứ mạng</a>
                            </li>
                            <li>
                                <a href="#!">Văn hóa ĐH Nguyễn Tất Thành</a>
                            </li>
                            <li>
                                <a href="#!">Thông tin 3 công khai</a>
                            </li>
                            <li>
                                <a href="#!">Đảm bảo chất lượng</a>
                            </li>
                            <li>
                                <a href="#!">Phát triển bền vững</a>
                            </li>
                            <li>
                                <a href="#!">Trường Trung cấp Nguyễn Tất Thành</a>
                            </li>
                            <li>
                                <a href="#!">Trường Tiểu học Anh Việt Mỹ</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">PHÒNG - BAN</h5>
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">THƯ VIỆN ẢNH</h5>
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">E-LEARNING</h5>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">TRUNG TÂM - VIỆN</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Viện Đào Tạo Quốc Tế</a>
                            </li>
                            <li>
                                <a href="#">Viện Công Nghệ Cao</a>
                            </li>
                            <li>
                                <a href="#">Viện Đào tạo Sau đại học</a>
                            </li>
                            <li>
                                <a href="#">Trung tâm Thông tin Thư viện</a>
                            </li>
                            <li>
                                <a href="#">TT Ngoại Ngữ</a>
                            </li>
                            <li>
                                <a href="#">TT Tin Học NTT</a>
                            </li>
                            <li>
                                <a href="#">TT QH Doanh Nghiệp & Khởi nghiệp</a>
                            </li>
                            <li>
                                <a href="#">TT Đào tạo theo nhu cầu XH</a>
                            </li>
                            <li>
                                <a href="#">TT Xuất khẩu lao động Texgamex</a>
                            </li>
                            <li>
                                <a href="#">Công đoàn Trường ĐH Nguyễn Tất Thành</a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-3 mx-auto">
                        <ul class="sub-page">
                            <li><a href="http://facbook.com/daihocnguyentatthanh" class="btn"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                            <li><a href="https://plus.google.com/112750194814925795608" class="btn"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                            <li><a href="http://youtube.com/daihocntt" class="btn"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                            <li><a href="mailto:#" class="btn"><i class="fa fa-envelope"></i>E-mail</a></li>
                            <li><a href="https://zalo.me/1656351623584574728" class="btn"><i class="fa fa-wechat"></i>Zalo</a></li>
                            <li><a href="https://eo1.ntt.edu.vn" class="btn"><i class="fa fa-mortar-board"></i>E-office</a></li>
                            <li><a href="http://tcns.ntt.edu.vn" class="btn"><i class="fa fa-users"></i>Tuyển dụng</a></li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>

            <div class="doancuoi">
                <div class="col-md-7">
                    <p class="pb-0">
                        <b>THÔNG TIN LIÊN HỆ </b></br>
                        Trụ sở chính: <b>300A – Nguyễn Tất Thành, Phường 13, Quận 4, TP. Hồ Chí Minh, Việt Nam</b> </br>
                        Điện thoại: <b> 1900 2039 </b> Fax: <b>028 39 404 759</b></br>
                        Hotline: <b>0902 298 300 – 0906 298 300 – 0912 298 300 – 0914 298 300</b></br>
                        Email: <b>tttvtsinh@ntt.edu.vn – bangiamhieu@ntt.edu.vn </b>

                    </p>

                </div>
                <div class="col-md-5">
                    <p class="pb-0">&copy;2017. Bản quyền thuộc về trường <b>Đại học Nguyễn Tất Thành</b></p>
                </div>

            </div>

        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>