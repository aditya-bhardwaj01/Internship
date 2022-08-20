<?php

require_once "config/connection.php";

$sql = "SELECT * FROM site_settings";

$res = mysqli_query($conn, $sql);

$head = '';

foreach($res as $row){
    $head .= '<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> '.$row['site_name'].'</title>
    <meta name="'.$row['seo_descrition'].'" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="'.$row['site_logo'].'">

    <!-- Normalize CSS --> 
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Main CSS -->         
    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Animate CSS --> 
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    
    <!-- Main Menu CSS -->      
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="css/hover-min.css">

    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="vendor/noUiSlider/nouislider.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Modernizr Js -->
    <script src="js/modernizr-2.8.3.min.js"></script>';
}


?>