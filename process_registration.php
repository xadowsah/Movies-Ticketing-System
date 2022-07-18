<?php
    session_start();
    include('config.php');
    extract($_POST);
    mysqli_query($con,"insert into  tbl_registration values(NULL,'$name','$email','$phone','$age','gender')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into  tbl_login values(NULL,'$id','$email','$password','2')");
    header('location:login.php');
?>