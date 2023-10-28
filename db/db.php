<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'banteaysrei';

    // create connection

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(mysqli_connect_errno()){
        echo 'Failed to connect!';
        exit();
    }
    else{
        // echo 'Connection Success!';
        echo "<script>console.log('Connection Success')</script>";
    }


?>