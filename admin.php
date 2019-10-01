<h2>HELLO</h2>
<?php
require"connect.php"
?>
    <?php
      if($_GET['user'] && $_GET['pass'] )
     {
         $user= $_GET['user'];
         $pass= ($_GET['pass'];
         echo $user."<br>";
         echo $pass;
        }
	
?>
 <?php 
        $sql= "SELECT * FROM `user` where username = '$user'";

        $data=mysqli_query($con,$sql);

        $row=mysqli_fetch_array($data, MYSQLI_ASSOC);
        
           if($row['username'] == "" || $row['password'] != $pass )
           {
               echo "user name cua ban khong ton tai";
               header("location:index.php");
           }
        
    
    ?>