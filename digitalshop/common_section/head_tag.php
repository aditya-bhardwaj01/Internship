<?php

include "config/connection.php";

$sql = "SELECT * FROM site_settings";

$res = mysqli_query($conn, $sql);

$head_tag = '';

foreach($res as $row){
    $head_tag .= '<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>  '.$row['site_name'].' </title>
	<meta name="'.$row['seo_descrition'].'" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="'.$row['site_logo'].'">
	<!-- ========== Start Stylesheet ========== -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/fontawesome.min.css" rel="stylesheet" />
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
	<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="assets/css/flaticon-set.css" rel="stylesheet" />
	<link href="assets/css/themify-icons.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet" />';
}

echo $head_tag;

?>