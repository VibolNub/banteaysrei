<?php

    include_once("pages/template/header.php");
    
    if(!isset($_GET["p"])){
        include_once("pages/index.php");
    }
    else{
        // echo "<script>alert('hello".$_GET["p"]."')</script>";
        include_once("pages/".$_GET["p"].".php");
        // include_once("pages/".$_GET["p"]."");
    }

?>