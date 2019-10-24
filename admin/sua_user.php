<?php
    require "connect.php";
?>
<?php
$username = $_GET['username'];
$email = $_GET['email'];
$level = $_GET['level'];
$fullname = $_GET['fullname'];
$sex = $_GET['sex'];
$birthday = $_GET['birthday'];
$iduser = $_GET['iduser'];
$sql = "UPDATE member SET username = '$username' , email = '$email' ,
 fullname = '$fullname' , birthday = '$birthday' , sex ='$sex' 
WHERE iduser = '$iduser' ";
$data=mysqli_query($con,$sql);
if($data)
        {header('location: user_index.php?txtUsername='.$username.'&level='.$level.'');}
        else {echo "That bai";}; 
?>  