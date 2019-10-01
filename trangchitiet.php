<?php
require"connect.php"
?>
    <?php
      if($_GET['cid'])
     {
         $cid= $_GET['cid'];
        // echo $cid;
        }
	
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
                            <a href="index.php"><img src="img/logo_ntt.png" alt=""></a>
                        </div>
                        <div class="main-menu">
                        <?php 
                        $sql= "SELECT * FROM `danhmuc`";

                        $data=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            echo"<a href='trangchitiet.php?cid=".$row['iddanhmuc']."'>".$row['tendanhmuc']."</a>";
                        }
                    
                    ?>
                        </div>
                    </div>
                </div>
                </div>
            </header>

            <main>
                <div class="noidung" style="display:flex;">
                    <div class="col-md-3">
                        <div class="heading p-4">
                            <h3>Đại Học Nguyễn Tất Thành</h3>
                            <ul class="list-unstyled">
                                <li class="c-lime-a5 font-weight-bold">“Đoàn kết - Hội nhập - Năng Động - Trí tuệ - Trách nhiệm”</li>
                            </ul>
                            <!-- /heading -->
                        </div>

                        <article class="p-4">
                            <p><img alt="" class="img-fluid" src="img/ct11.png" /></p>
                            <p>QUY MÔ ĐÀO TẠO</p>

                            <ul>
                                <li>Hơn 20.000 sinh viên</li>
                            </ul>

                            <p>ĐỘI NGŨ GIẢNG VIÊN</p>

                            <ul>
                                <li>924 giảng viên</li>
                                <li>90% có bằng TS, ThS </li>
                            </ul>

                            <p>CƠ SỞ VẬT CHẤT</p>

                            <ul>
                                <li>8 cơ sở đào tạo</li>
                                <li>100.000 m² sàn xây dựng</li>
                                <li>3.000 máy tính</li>
                                <li>100.000 bản sách trong nước và quốc tế</li>
                                <li>Thư viện đạt chuẩn Quốc gia</li>
                            </ul>

                            <p>CHẤT LƯỢNG</p>

                            <ul>
                                <li>Đạt chuẩn kiểm định chất lượng của Bộ GD&ĐT</li>
                                <li>Đạt chuẩn QS-Stars 3 sao (Anh Quốc)</li>
                            </ul>

                            <p>KHOA</p>

                            <ul>
                                <li><a href="http://khoay.ntt.edu.vn/">Y</a></li>
                                <li><a href="http://duoc.ntt.edu.vn/">Dược</a></li>
                                <li>Điều dưỡng</li>
                                <li><a href="http://qtkd.ntt.edu.vn/">Quản trị Kinh doanh</a></li>
                                <li>Luật</li>
                                <li><a href="http://tckt.ntt.edu.vn/">Tài chính - Kế toán</a></li>
                                <li><a href="http://fame.ntt.edu.vn/vi/">Cơ khí - Điện - Điện tử - Ô tô</a></li>
                                <li><a href="http://fces.ntt.edu.vn/">Kỹ thuật Thực phẩm và Môi trường </a></li>
                                <li><a href="http://cnsh.ntt.edu.vn/">Công nghệ Sinh học </a></li>
                                <li><a href="http://fit.ntt.edu.vn/">Công nghệ Thông tin</a></li>
                                <li><a href="http://khoaamnhac.ntt.edu.vn/">Âm nhạc</a></li>
                                <li><a href="http://ktxd.ntt.edu.vn/">Kiến trúc - Xây dựng - Mỹ thuật ứng dụng</a></li>
                                <li><a href="http://ngoaingu.ntt.edu.vn/">Ngoại ngữ</a></li>
                                <li><a href="http://dlvnh.ntt.edu.vn/">Du lịch và Việt Nam học</a></li>
                                <li>Giáo dục Quốc phòng - An ninh và Giáo dục Thể chất</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-9">
                        <div class="cate-heading mb-3">
                            <img class="img-fluid" src="img/ct21.png" alt="" width="100%">
                            <article class="p-4" style="background-color: lightgray;">
                                <h2 class="c-black">Giới thiệu</h2>
                                <p><span class="c-lime-a5 font-weight-bold"></span>NTTU : Trường đại học Nguyễn Tất Thành được đặt tại Quận 4. Từ Trường đến trung tâm thành phố Hồ chí Minh chỉ mất 5 phút đi bằng ô-tô. Trường nằm cạnh bờ sông Sài Gòn lộng gió. Từ trên sân thượng tòa nhà, phóng tầm mắt ra xa, chúng ta có thể thấy bao quát toàn thành phố. Phía trước tòa nhà là dòng sông Sài Gòn dịu dàng uốn quanh, với nhiều tàu thuyền qua lại.</p>
                                <ul class="list-unstyled">
                                    <li><a class="font-weight-bold" href="http://ntt.edu.vn"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>http://ntt.edu.vn</a></li>
                                </ul>
                            </article>
                            <!-- /heading -->
                        </div>

                        <?php 
                       $sql= "SELECT * FROM `grap_danhmuc` WHERE cid ='$cid';  ";
                        $data=mysqli_query($con,$sql);
                       

                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                        echo"<article class='media sub-cate'>";
                        echo"<img class='d-flex img-fluid' src=".$row['img']." alt=''>";
                        echo"<div class='media-body'>";
                        echo"<h5 class='title mt-0'>";
                        echo"<a href='#'>".$row['tieude']."</a>";
                        echo"<h5>".$row['noidung']."</h5>";
                        echo"</div>";
                        echo"</article>";
                        }
                        ?>
                        <!-- <article class="media sub-cate">
                         <figure class="thumb mb-0 mr-3"><img class="d-flex img-fluid" src="img/ct23.png" alt="Generic placeholder image"></figure>
                         <div class="media-body">
                             <h5 class="title mt-0">
                             <a href="">Toàn cảnh ĐH Nguyễn Tất Thành</a>
                             </h5> Trải qua quá trình 20 năm hình thành và phát triển, đến nay, Trường Đại học Nguyễn Tất Thành đã khẳng định được uy tín và danh hiệu của mình trên bản đồ giáo dục Việt Nam.
                         </div>
                        </article> -->
                    </div>
                </div>

            </main>
            <footer class="page-footer font-small indigo">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold  mt-3 mb-4">ĐH NGUYỄN TẤT THÀNH</h5>

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
        </body>

        </html>