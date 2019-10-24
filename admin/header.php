<?php
    require "connect.php";
?>
 <?php 
if ($_GET['level']) 
{
    $user = $_GET['txtUsername'];
    $level = $_GET['level'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Xin chào ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendors/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="#">Admin ĐH Nguyễn Tất Thành</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
           <?php
           if ($level == 2) 
           {
               
             echo "<li class='nav-item'>";
             echo "<a class='nav-link' href='admin_index.php?txtUsername=".$user."&level=".$level."'>";
             echo "<i class='fas fa-fw fa-chart-area'></i>";
             echo "<span>Xem danh mục bài viết</span></a>";
             echo "</li>";

             echo "<li class='nav-item '>";
             echo "<a class='nav-link ' href='baiviet_add.php?txtUsername=".$user."&level=".$level."' >";
             echo "<i class='fas fa-fw fa-folder'></i>";
             echo " <span>Them bai viet</span>";
             echo "</a>";
             echo "</li>";
           }
           if ($level == 1) 
           {
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='admin_index.php?txtUsername=".$user."&level=".$level."'>";
            echo "<i class='fas fa-fw fa-chart-area'></i>";
            echo "<span>Xem danh mục bài viết</span></a>";
            echo "</li>";

             echo "<li class='nav-item '>";
             echo "<a class='nav-link ' href='user_index.php?txtUsername=".$user."&level=".$level."' >";
             echo "<i class='fas fa-fw fa-folder'></i>";
             echo " <span>User</span>";
             echo "</a>";
             echo "</li>";

             echo "<li class='nav-item '>";
             echo "<a class='nav-link ' href='user_add.php?txtUsername=".$user."&level=".$level."' >";
             echo "<i class='fas fa-fw fa-folder'></i>";
             echo "<span>Them User</span>";
             echo "</a>";
             echo "</li>";
           }
           ?>
            
            
            
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">
