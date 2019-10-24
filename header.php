
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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                        <ul>
                        <div class="search">
                            <form action="#">
                                <input type="search" placeholder="Tìm kiếm thông tin">
                                <i class="material-icons icon" style="color:white">search</i>
                            </form>
                            <div class="lang">
                                <img class="lang " src="img/flags/en.jpg" alt="english flag">
                            </div>
                            <a  href="/web/admin/dangnhap.php" type="button"  class="btn btn-default" style="margin-left: 20px;">Đăng nhập</a>
                            <a  href="/web/admin/dangky.php" type="button" class="btn btn-default" >Đăng ký</a>
                        </div>
                        </div>
                        </ul>
                        
                </nav>
                <div id="main-header">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo_ntt.png" alt="" ></a>
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

                        <div class="slider" >
                        <img class="mySlides" src="img/s1.jpg" style="width:100%">
                        <img class="mySlides" src="img/s2.jpg" style="width:100%">
                        <img class="mySlides" src="img/s3.jpg" style="width:100%">
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="font-size:100px;">&#10094;</div>
                            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)" style="font-size:100px;">&#10095;</div>
                            <div class="thespan" style="margin-top:100px;">
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                                
                            </div>
                        </div>
                        </div>

                
            </div>
            
        </header>