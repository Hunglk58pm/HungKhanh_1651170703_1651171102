
<?php require "header.php";?>
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
            <div class="container-fluid " style="background-color:midnightblue;">
                <h1 class="text-center my-3" style="color:goldenrod;">TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH? </h1>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto">
                        <div class="carousel-item col-md-4 active">
                            <div class="card" >
                                <div class="card-body">
                                    <h4 class="card-title">Đạt chuẩn chất lượng quốc gia</h4>
                                    <p class="card-text">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Đại học hạnh phúc</h4>
                                    <p class="card-text">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Chuẩn 3 sao QS-Stars (Anh Quốc)</h4>
                                    <p class="card-text">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">95% sinh viên tốt nghiệp có việc làm</h4>
                                    <p class="card-text">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn 
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mt-4">
                                <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                                <i class="fa fa-lg fa-chevron-left"></i>
                                </a>
                                <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                                <i class="fa fa-lg fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
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
            <div class="container">
                <h2>Our  Partners/ Our Clients</h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                    <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                </section>
                <br>
            </div>
        </main>
<?php require "footer.php";?>