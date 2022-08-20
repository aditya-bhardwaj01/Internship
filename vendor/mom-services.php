<?php
include 'api.php';
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<style>
	.seller-name {
		height: 18px;
		color: #222325;
		-o-text-overflow: ellipsis;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
		float: left;
		line-space: 2px;
		margin-top: 5px;
		font-size: 12px;
		margin: 4px 5px 5px 5px;
		margin-left: 3px;
	}

	.seller-wrapper {

		line-height: 120%;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		padding: 12px 12px 8px;
		height: 54px;
		width: 100%;
	}

	.gig-footer {
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: r;
		clear: both;
		border-top: 1px solid #eee;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-pack: justify;
		-ms-flex-pack: justify;
		justify-content: space-between;
		padding: 2px 15px;
		font-size: 16px;
		color: #555;

	}

	.seller-image {
		background-color: #b5b6ba;
		display: -webkit-inline-box;
		display: -ms-inline-flexbox;
		display: inline-flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		position: relative;
		width: 60px;
		height: 60px;
		border-radius: 50%;
		overflow: hidden;

	}

	.image {
		background-color: #b5b6ba;
		margin: 0;
		display: -webkit-inline-box;
		display: -ms-inline-flexbox;
		display: inline-flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		position: relative;
		width: 100px;
		height: 00px;
		border-radius: 50%;
		overflow: hidden;
		float: left;
	}
</style>

<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="WomenFederation" />
<meta name="keywords" content="Women Empowerment, Fashion, Lifestyle, Women Groups, Women Power, Growth, ecommerce" />
<meta name="author" content="CCBUL" />
<!-- Page Title -->
<title>WomenFederation</title>

	<!-- Favicon and Touch Icons -->
	<link href="images/favicon.png" rel="icon" type="image/png">
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

	<!-- Stylesheet -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" type="text/css">
	<link href="../css/css-plugin-collections.css" rel="stylesheet" />
	<!-- CSS | menuzord megamenu skins -->
	<link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
	<!-- CSS | Main style file -->
	<link href="../css/style-main.css" rel="stylesheet" type="text/css">
	<!-- CSS | Theme Color -->
	<link href="../css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">
	<!-- CSS | Preloader Styles -->
	<link href="../css/preloader.css" rel="stylesheet" type="text/css">
	<!-- CSS | Custom Margin Padding Collection -->
	<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<!-- CSS | Responsive media queries -->
	<link href="../css/responsive.css" rel="stylesheet" type="text/css">
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

	<!-- Revolution Slider 5.x CSS settings -->
	<link href="../js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
	<link href="../js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
	<link href="../js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

	<!-- external javascripts -->
	<script src="../js/jquery-2.2.0.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- JS | jquery plugin collection for this theme -->
	<script src="../js/jquery-plugin-collection.js"></script>

	<!-- Revolution Slider 5.x SCRIPTS -->
	<script src="../js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
	<script src="../js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
	<div id="wrapper">
		<!-- preloader -->
		<div id="preloader">
			<div id="spinner">
				<div class="preloader-dot-loading">
					<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
				</div>
			</div>
			<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
		</div>

		<?php include 'header_all.php'; ?>

		<!-- Start main-content -->
		<div class="main-content bg-light">
			<div class="container-fluid pt-1 pb-0 bg-white">
				<div class="row mt-80">
					<div class="col-md-12">
						<h3 class="text-uppercase" style="margin-top: 5px; margin-bottom: 5px; font-style: italic;">Featured <span class="text-theme-colored">Services</span></h3>
					</div>
				</div>

				<div class="row mt-20">
					<div class="owl-carousel">
						<div class="item"> <a href="#"><img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606177/unnamed_vzud6f.jpg" alt="" style="height:150px; width:350px;"></a></div>
						<div class="item"> <a href="#"><img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606176/Marketing-Services-1_rmx8vj.jpg" alt="" style="height:150px; width:350px;"></a></div>
						<div class="item"> <a href="#"><img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606175/October-seo-content-writing-600x392_s2uxwr.jpg" alt="" style="height:150px; width:350px;"></a></div>
						<div class="item"> <a href="#"><img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606174/HR-Human-Resources-Management_ojmpzg.jpg" alt="" style="height:150px; width:350px;"></a></div>
						<div class="item"> <a href="#"><img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606174/taxation-services-500x500_zxsg04.jpg" alt="" style="height:150px; width:350px;"></a></div>
						<div class="item"> <a href="#"><img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606256/download_qrepqb.jpg" alt="" style="height:150px; width:350px;"></a></div>

					</div>

				</div>
				<script>
					$('.owl-carousel').owlCarousel({
						loop: true,
						margin: 10,
						autoplay: true,
						nav: true,
						navText: [
							'',
							''
						],
						responsive: {
							0: {
								items: 1
							},
							600: {
								items: 3
							},
							1000: {
								items: 5
							}
						}
					})
				</script>
			</div>
		</div>
		<section>
			<div class="bg-lightest" style=" background-color: #fff;  margin-left: 35px;  margin-right: 35px; margin-top:2px;  border-radius: 5px;  box-shadow: 0 2px 4px 0 rgba(0,0,0,.08); border-top: 1px solid #eaeaea;">
				<div class="container-fluid pt-1 pb-0">
					<div class="row p-10">
						<div class="col-md-4 text-uppercase">
							<h3 style="margin-top: 5px; margin-bottom: 5px;">Legal <span class="text-theme-colored">Services</span></h3>
						</div>
						<div class="col-md-6 mt-5">
							<div class="widget">
								<div class="tags">
									<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services" style="background-color:#fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px"> Litigation</a>
									<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services" style="background-color:#fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Legal Consultation</a>
									<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services" style="background-color:#fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Legal Drafting</a>
									<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services" style="background-color:#fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Legal Aid</a>
									<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services" style="background-color:#fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Liasoning Services</a>
								</div>
							</div>
						</div>
						<div class="col-md-2 text-right"><a target="_blank" href="marketplace_services.php?cat=Compliance and Legal Services" style="border-color:#121b26; font-size:11px; font-weight:600;">View All</a></div>
					</div>
					<div class="owl-carousel">
						<div class="item">
							<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Litigation">
								<div class="product" style="border: #e1e1e1 solid 1px;">
									<div class="volunteer-thumb"> <img src="https://www.nmlaw.ae/wp-content/uploads/2018/11/NM-Law-The-connect-between-hard-times-and-litigation.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
									<div class="bg-lighter text-center pt-2">
										<div class="schedule-details clearfix p-5 pt-5">
											<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="marketplace_services.php?cat=Legal"> Litigation</a></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Legal Services">
								<div class="product" style="border: #e1e1e1 solid 1px;">
									<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606469/images_1_lv8n67.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
									<div class="bg-lighter text-center pt-2">
										<div class="schedule-details clearfix p-5 pt-5">
											<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="marketplace_services.php?cat=Legal">Legal Consultation</a></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=IPR Services">
								<div class="product" style="border: #e1e1e1 solid 1px;">
									<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606469/images_1_lv8n67.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
									<div class="bg-lighter text-center pt-2">
										<div class="schedule-details clearfix p-5 pt-5">
											<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="marketplace_services.php?cat=Legal">Legal Drafting</a></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Legal Aid">
								<div class="product" style="border: #e1e1e1 solid 1px;">
									<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606640/1591885632Legal-Aid_mudkr1.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
									<div class="bg-lighter text-center pt-2">
										<div class="schedule-details clearfix p-5 pt-5">
											<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="marketplace_services.php?cat=Legal&subcat=Legal Aid">Legal Aid</a></h5>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services">
								<div class="product" style="border: #e1e1e1 solid 1px;">
									<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638606702/liasoning-services-500x500_as57va.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;">
									</div>
									<div class="bg-lighter text-center pt-2">
										<div class="schedule-details clearfix p-5 pt-5">
											<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="marketplace_services.php?cat=Compliance and Legal Services&subcat=Liasoning Services">Liasoning Services</a></h5>

										</div>
									</div>
								</div>
							</a>
							<script>
								$('.owl-carousel').owlCarousel({
									loop: true,
									margin: 10,
									autoplay: true,
									nav: true,
									navText: [
										'',
										''
									],
									responsive: {
										0: {
											items: 1
										},
										600: {
											items: 3
										},
										1000: {
											items: 5
										}
									}
								})
							</script>
						</div>
					</div>
				</div>
			</div>
				  <div class="bg-lightest"  style=" background-color: #fff;  margin-left: 35px;  margin-right: 35px; margin-top:2px;  border-radius: 5px;  box-shadow: 0 2px 4px 0 rgba(0,0,0,.08); border-top: 1px solid #eaeaea;">
        <div class="container-fluid pt-1 pb-0">
			<div class="row p-10">
		<div class="col-md-4 text-uppercase"><h3 style="margin-top: 5px; margin-bottom: 5px;">Morden <span class="text-theme-colored">Marketing</span></h3>
		</div>
		<div class="col-md-6 mt-5">
		<div class="widget">
               <div class="tags">
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">Influencer Marketing</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Blogger</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Vlogger</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Youtuber</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> e-Commerce Marketing</a>

   				</div>
            </div>
		</div>
			<div class="col-md-2 text-right"><a href="marketplace_services.php" style="border-color:#121b26; font-size:11px; font-weight:600;" target="_blank">View All</a></div>
		</div>
		<div class="owl-carousel">
		  <div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638608387/460-1_fkpmix.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Influencer Marketing</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
			<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638608386/download_2_cjgt6w.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Blogger</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638608386/download_3_dijywi.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Vlogger</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638608365/images_5_bufcan.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Youtuber</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
					   <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638608498/download_1_nsvddy.png" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">e-Commerce Marketing</a></h5>
							  </div>
							 </div>
						</div>	
				  <script>
			  $('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				autoplay:true,
				nav:true,
				navText: [
					'',
					''
				],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})

			  </script>			
	</div>
        </div>
      </div>
    </section>
  </div>

		 <div class="bg-lightest"  style=" background-color: #fff;  margin-left: 35px;  margin-right: 35px; margin-top:2px;  border-radius: 5px;  box-shadow: 0 2px 4px 0 rgba(0,0,0,.08); border-top: 1px solid #eaeaea;">
        <div class="container-fluid pt-1 pb-0">
		<div class="row p-10">
		<div class="col-md-4 text-uppercase"><h3 style="margin-top: 5px; margin-bottom: 5px;">Social Media <span class="text-theme-colored">Marketing</span></h3>
		</div>
		<div class="col-md-6 mt-5">
		<div class="widget">
               <div class="tags">
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">WhastApp Marketing </a>
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">FB Marketing</a>
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">Linkedin Marketing </a>
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">Twitter Marketing </a>
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">Instagram Marketing </a>

   				</div>
            </div>
		</div>
			<div class="col-md-2 text-right"><a href="marketplace_services.php" style="border-color:#121b26; font-size:11px; font-weight:600;">View All</a></div>
		</div>
			<div class="owl-carousel">
		  <div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607748/why-should-you-use-whatsapp-in-your-marketing-in-2020_skyu1m.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">WhastApp Marketing </a></h5>
				
				
							  </div>
							 					  </div>
						</div>				
					</div>
			<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607749/download_1_jodsp1.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">FB Marketing</a></h5>
				
				
							  </div>
							 					  </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607746/images_2_m6sidc.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Linkedin Marketing </a></h5>
							  </div>
							 </div>
						</div>
						
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://qph.fs.quoracdn.net/main-qimg-6033d3b4febd02b1a8cfa65b328d48ab" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Twitter Marketing </a></h5>
							  </div>
							 </div>
						</div>						
					</div>
						<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607748/instagram-marketing_lt8rhr.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Instagram Marketing</a></h5>
							  </div>
							 </div>
						</div>	
					
		
			  <script>
			  $('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				autoplay:true,
				nav:true,
				navText: [
					'',
					''
				],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})

			  </script>			
		</div>

	</div>
   
        </div>
      </div>
	  <div class="bg-lightest"  style=" background-color: #fff;  margin-left: 35px;  margin-right: 35px; margin-top:2px;  border-radius: 5px;  box-shadow: 0 2px 4px 0 rgba(0,0,0,.08); border-top: 1px solid #eaeaea;">
        <div class="container-fluid pt-1 pb-0">
			<div class="row p-10">
		<div class="col-md-4 text-uppercase"><h3 style="margin-top: 5px; margin-bottom: 5px;">Digital <span class="text-theme-colored">Marketing</span></h3>
		</div>
		<div class="col-md-6 mt-5">
		<div class="widget">
               <div class="tags">
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px">Content Marketing</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Email Marketing</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> SMS Marketing</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> SEO</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> SEM</a>
   				</div>
            </div>
		</div>
			<div class="col-md-2 text-right"><a href="marketplace_services.php" style="border-color:#121b26; font-size:11px; font-weight:600;" target="_blank">View All</a></div>
		</div>
		<div class="owl-carousel">
		  <div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607967/Content-Marketing-light-scaled_azcmlk.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Content Marketing</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
			<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607966/images_3_i3xf5a.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Email Marketing</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638608063/Bulk-Sms-mrketing_mtgbku.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">SMS Marketing</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607965/19-SEO-tips-to-double-search-traffic-_grmxth.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">SEO</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
					   <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638607964/images_4_koezlr.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">SEM</a></h5>
							  </div>
							 </div>
						</div>	
				  <script>
			  $('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				autoplay:true,
				nav:true,
				navText: [
					'',
					''
				],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})

			  </script>			
	</div>
        </div>
      </div>
    </section>
  </div>
    	<div class="bg-lightest"  style=" background-color: #fff;  margin-left: 35px;  margin-right: 35px; margin-top:2px;  border-radius: 5px;  box-shadow: 0 2px 4px 0 rgba(0,0,0,.08); border-top: 1px solid #eaeaea;">
        <div class="container-fluid pt-1 pb-0">
			<div class="row p-10">
		<div class="col-md-4 text-uppercase"><h3 style="margin-top: 5px; margin-bottom: 5px;">Content Creation <span class="text-theme-colored"> Services</span></h3>
		</div>
		<div class="col-md-6 mt-5">
		<div class="widget">
               <div class="tags">
                <a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 8px 6px; color:#95979d; font-size:12px"> Website Content</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Product Description</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Resume Writing</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Linkedin Profile Writing</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Translation Services</a>
				<a href="#" style="background-color:##fafafa;border:1px solid #e4e5e7;  padding: 6px 6px 6px; color:#95979d; font-size:12px"> Article Writing</a>
   				</div>
            </div>
		</div>
			<div class="col-md-2 text-right"><a href="marketplace_services.php" style="border-color:#121b26; font-size:11px; font-weight:600;">View All</a></div>
		</div>
		<div class="owl-carousel">
		  <div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638611402/1042021191_jqufhd.png" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#"> Website Content</a></h5>
							  </div>
							 </div>
						</div>				
					</div>
			<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638611400/writing-product-descriptions_rmcpdl.png" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Product Description</a></h5>
							  </div>
							</div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638611393/images_nxoptd.png" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Resume Writing</a></h5>
							  </div>
							</div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638611391/Linkedin-Profile-Writing-Services2_hfe8zm.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Linkedin Profile Writing</a></h5>
		
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638611387/translation-services_hccqaf.png" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> </div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Translation Services</a></h5>
		
							  </div>
							 </div>
						</div>				
					</div>
					<div class="item">
						  <div class="product" style="border: #e1e1e1 solid 1px;">
							<div class="volunteer-thumb"> <img src="https://res.cloudinary.com/dafjd2pd0/image/upload/v1638611389/download_4_x199ay.jpg" alt="" class="img-fullwidth img-responsive" style="width:250px; height:150px;"> 
							</div>
							<div class="bg-lighter text-center pt-2">
							  <div class="schedule-details clearfix p-5 pt-5">
								<h5 class="font-12 title text-uppercase mt-5 mb-5"><a href="#">Article Writing</a></h5>
		
							  </div>
							 </div>
						</div>	
			  <script>
			  $('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				autoplay:true,
				nav:true,
				navText: [
					'',
					''
				],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})

			  </script>			
			</div>
		</div>
       </div>
      </div>
	<!-- Footer -->

	<?php include 'footer.php'; ?>
	<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	<!-- end wrapper -->

	<!-- Footer Scripts -->
	<!-- JS | Custom script for all pages -->
	<script src="js/custom.js"></script>

</body>

</html>