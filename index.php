
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
                    <img src="img/logo_ntt.png" alt="">
                </div>
                <div class="main-menu">
                    <a href="trangchitiet.php?idanhmuc=1">tintuc</a>
                    <a href="#">Tuyển sinh</a>
                    <a href="#">Đào tạo</a>
                    <a href="#">Nghiên cứu</a>
                    <a href="#">Hợp tác doanh nghiệp</a>
                </div>
            </div>
                <div class="container">
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
                          <img src="img/s1.jpg" alt="" >
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
    <div class="container">
    
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
                <iframe width="239px" height="134px" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <div class="col-md-9">
                    <div class="col-sm-6">
                            <h3><a class="tieude" href="#">Hợp tác quốc tế</a></h3>
                            <img src="img/nd21.jpg" alt="Thumbnail">
                            <a class="card-title" href="#">Khoa Công nghệ Sinh học ĐH Nguyễn Tất Thành làm việc với ĐH Hiroshima</a>
                            <p class="card-text">NTTU - Sáng ngày 17/09/2019, khoa Công nghệ Sinh học Trường ĐH Nguyễn Tất Thành đã có buổi làm việc với ĐH Hiroshima (Nhật Bản)</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="col-sm-6">
                            <h3><a class="tieude" href="#">Môi trường học tập</a></h3>
                            <img src="img/nd22.jpg" alt="Thumbnail">
                            <a class="card-title" href="#">Nhật ký thực tập nhận thức của sinh viên khoa Du lịch và Việt Nam học Trường ĐH Nguyễn Tất Thành</a>
                            <p class="card-text">NTTU- Nhằm tạo cầu nối để sinh viên Khoa Du lịch và Việt Nam học Trường Đại học Nguyễn Tất Thành có cơ hội được tiếp cận thực tế, được trải nghiệm kiến thức chuyên môn liên quan đến ngành học qua đó giúp hình thành tình yêu nghề nghiệp đồng thời phát huy </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
            
            </div>
            <div class="col-md-3">
                <h3><a class="tieude" href="#">Sự kiện nổi bật</a></h3>

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
                  <a href="#!">Very long link 2</a>
                </li>
                <li>
                  <a href="#!">Very long link 3</a>
                </li>
                <li>
                  <a href="#!">Very long link 4</a>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
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
                Điện thoại: <b> 1900 2039 </b>		Fax: <b>028 39 404 759</b></br>
            Hotline: <b>0902 298 300 – 0906 298 300 – 0912 298 300 – 0914 298 300</b></br>
        Email: <b>tttvtsinh@ntt.edu.vn – bangiamhieu@ntt.edu.vn </b>
    
                        </p>
                        
                    </div>
    <div class="col-md-5"><p class="pb-0">&copy;2017. Bản quyền thuộc về trường <b>Đại học Nguyễn Tất Thành</b></p> </div>
    
        </div>
            
      
      </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>

</html>