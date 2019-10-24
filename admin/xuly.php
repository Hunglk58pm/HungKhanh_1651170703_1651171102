<?php

    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }
    
    //Nhúng file kết nối với database
    include('connect.php');
         
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
         
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $fullname   = addslashes($_POST['txtFullname']);
    $birthday   = addslashes($_POST['txtBirthday']);
    $sex        = addslashes($_POST['txtSex']);
     //echo $username ;     
    
        // Mã khóa mật khẩu
        $password = md5($password);
    $sql ="INSERT INTO member (
            username,
            password,
            email,
            fullname,
            birthday,
            sex
        )
        VALUES (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}',
            '{$birthday}',
            '{$sex}'
        )
    ";
    $data=mysqli_query($con,$sql);
        if($data)
        {echo "Thanh cong";
        }
        else {echo "That bai";}; 
?>