<?php
    require "connect.php";

$img = $_GET['img'];
$tieude = $_GET['tieude'];
$noidung = $_GET['noidung'];
$cid = $_GET['cid'];
$sql = "INSERT INTO `grap_danhmuc`( `cid`, `img`, `tieude`, `noidung`) VALUES ('$cid','$img','$tieude','$noidung') ";
$data=mysqli_query($con,$sql);
if($data && $cid <=5 && $cid >0)
        {header('location: baiviet_index.php?cid='. $cid .'');
        }
        else {echo "That bai do bai viet ban them khong co danh muc phu hop";}; 
?>  