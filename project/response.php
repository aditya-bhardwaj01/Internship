<?php
session_start();



require 'config/connection.php';
$id= $_GET['id'];
$query="SELECT * FROM buisnessopp_response INNER JOIN vendor
 ON buisnessopp_response.vendor_id=vendor.id WHERE vendor.status=1 AND buisnessopp_response.m_row_id='$id'";
$result=mysqli_query($conn,$query);
?>

<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="NextEvent - Conference & Event Responsive HTML5 Template" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Response Business Oppurtunity</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>

    <link href="styles.css" rel="stylesheet" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">

    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- external javascripts -->
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>
    <!--    <script src='js/jquery.iframe-transport.js' type='text/javascript'></script>-->
    <!--    <script src='js/jquery.fileupload.js' type='text/javascript'></script>-->
    <!--    <script src='js/jquery.cloudinary.js' type='text/javascript'></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
<div id="wrapper">

    <!-- Header -->
    <header class="header">
        <div class="header-nav navbar-fixed-top navbar-dark navbar-transparent navbar-sticky-animated animated-active">
            <div class="header-nav-wrapper">
            </div>
        </div>
    </header>

    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" style="background:url('http://www.tourismsaskatchewan.com/-/media/things-to-do/events/sasktel-centre-concert-events.ashx');
position: center">
            <div class="container pt-10 pb-10">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="title text-white" style="font-family: cursive">Responses (<?= mysqli_num_rows($result) ?>)</h5>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
    </div>
    <?php  if(isset($_SESSION['vendor-id'])){
  $sql126="SELECT * FROM `vendor` WHERE id=".$_SESSION['vendor-id']." AND vendor_type LIKE '%15%';"; 
    $res126=mysqli_query($conn,$sql126) or die('cant get: '.$sql126);
    $vendor_type15=0;
    if(mysqli_num_rows($res126)>0)
    {
    foreach($res126 as $row126)
      {
      $vendor_type15=15;

      }
    }
    if($vendor_type15==15){include('menu_new.php');}
    else{include('menu.php');}
  }
  else{
    include('menu_user.php');
  }
  ?>
    
    
    <div class="container">

        <div style="height: 3rem"></div>
       
    
       
        <div class=col-md-10>
        <table class="table table-bordered">
        
            <thead style="background-color: black;color: whitesmoke">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Message</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
            while($row=$result->fetch_assoc())
            {
                $sql="SELECT * from vendor where id='".$row['vendor_id']."' AND status='1'";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)){
                  
            ?>
            <tr>
                <th scope="row"><?= $i++?></th>
                <td><?= $row['customer_name'] ?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['mobile']?></td>
                <td><?= $row['message']?></td>
            </tr>
            <?php }
            } ?>
            </tbody>
           
        </table>
        </div>
    </div>
</div>

</html>
