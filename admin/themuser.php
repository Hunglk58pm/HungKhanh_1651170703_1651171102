<?php
    require "connect.php";

$level = $_GET['level'];
$pass = md5($_GET['password']);
$username = $_GET['username'];
$email = $_GET['email'];
$fullname = $_GET['fullname'];
$birthday = $_GET['birthday'];
$sex = $_GET['sex'];
$sql = "INSERT INTO `member`( `username`, `password`,`email`, `fullname`, `birthday`,`sex`,`level`) VALUES ('$username','$pass','$email','$fullname','$birthday','$sex','$level') ";
$data=mysqli_query($con,$sql);
if($data && $level > 0 && $level <= 2)
        {header('location: user_index.php?txtUsername='.$username.'&level=1');
        }
        else {echo "That bai";}; 
?>  