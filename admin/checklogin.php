<?php
    require "connect.php";
?>
 <?php 
if ($_GET['txtUsername']) 
{
  $user = $_GET['txtUsername'];
  //echo $user;
  $pass =md5( $_GET['txtPassword']);
  //echo $pass;
  $sql = "SELECT * FROM `member` WHERE username ='$user'";
  $data=mysqli_query($con,$sql);
    if ($data) {
        $row = mysqli_fetch_array($data, MYSQLI_ASSOC);
        echo $pass."<br>";
        echo $row['password'];
        if ( $pass != $row['password']) {
            header("location: /web/index.php");
         }else{
            header('location: admin_index.php?txtUsername='. $user .'&level='. $row['level'] .'');
        
        }
    } 
}
?>