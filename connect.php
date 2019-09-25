<?php

$hostname="localhost";
$username="root";
$password="";
$database="dhntt";

$con = mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($con, 'UTF8');
// if ($con) {

// 	echo "Thành công";

// 	}else
// 	{

// 		echo "khong thanh cong";

// 	};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen,print" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <title>Document</title>
</head>

<body>

	<?php
	//Khai bao cau lenh truy van
	// $sql= "SELECT * FROM `tin`  ";
	//Thuc thi cau lenh sql
	// $data=mysqli_query($con,$sql);
	// if ($data) {

	// 	echo "Thành công";
	
	// 	}else
	// 	{
	
	// 		echo "khong thanh cong";
	
	// 	};
	//Get du lieu
	// while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
	// {
	// 	//echo $row['tieude']."<br>";
	// 	//echo $row['hinhanh'];
	// 	echo "<h2>".$row['tieude']."</h2>";
	// 	echo "<img src=".$row['hinhanh'].">";
	// }
	
	// ?>


  
    
</html>
