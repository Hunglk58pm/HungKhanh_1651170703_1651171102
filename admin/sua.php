<?php
    require "connect.php";

$img = $_GET['img'];
$tieude = $_GET['tieude'];
$level = $_GET['level'];
$noidung = $_GET['noidung'];
$idgrap = $_GET['idgrap'];
$cid= $_GET['cid'];
//echo $cid;
//echo $idgrap;
$sql = "UPDATE grap_danhmuc SET img = '$img' , noidung = '$noidung' , tieude = '$tieude' WHERE idgrap = '$idgrap' ";
$data=mysqli_query($con,$sql);
if($data)
        {header('location: baiviet_index.php?cid='. $cid .'&?txtUsername='.$username.'&level='.$level.'');
        }
        else {echo "That bai";}; 
?>  