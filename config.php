<?php
    $host = "127.0.0.1";
    $user = "root";                     
    $pass = "";                                  
    $db = "movietheatredb.sql";
    $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die("error connection");
?>