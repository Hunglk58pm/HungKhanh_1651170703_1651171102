<?php
    require "connect.php";
?>
<?php
$idgrap = $_GET['idgrap'];
$cid= $_GET['cid'];
 $sql = "DELETE FROM `grap_danhmuc` WHERE idgrap = '$idgrap' ";
$data=mysqli_query($con,$sql);
if($data)
        {header('location: baiviet_index.php?cid='. $cid .'');}
        else {echo "That bai";}; 
?>  