<?php
    require "connect.php";
?>
<?php
$iduser = $_GET['iduser'];
$username = $_GET['txtUsername'];
 
  $level = $_GET['level'];
  $levelxoa = $_GET['levelxoa'];
 echo $level."<br>"; 
 echo $levelxoa;
$sql = "DELETE FROM `member` WHERE iduser = '$iduser' ";
if( $level < $levelxoa)
{
  $data=mysqli_query($con,$sql);
  if($data )
          {header('location: user_index.php?txtUsername='.$username.'&level='.$level.'');}
          else {echo "That bai";}; 
}
else {echo "That bai";}; 

?>  