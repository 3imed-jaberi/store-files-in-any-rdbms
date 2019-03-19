<?php


    // data for connect .. 
    $host = DB_HOST ;
    $username = DB_USER ;
    $password = DB_PASSWORD ;
    $db_name = DB_NAME ;

    // connect to db .. 
    $connect = mysqli_connect($host, $username, $password , $db_name) or die("Failed Connection : \n".mysqli_error($connect));
?>