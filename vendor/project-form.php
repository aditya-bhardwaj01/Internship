<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <!-- Start of Main -->
        <main class="main checkout">
              <!-- Start of PageContent -->
			  <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="marketplace-professionals">Marketplace Professionals</a></li>
                        <li><a href="rfq">Request for Quotations</a></li>
                    </ul>
                </div>
            </nav>
       <div class="page-content">
               <div class="container">
			   <h5>The purpose of this REQUEST  is to  seek best mathcing quotations form our partners.<br>
			   Write about your project and your expectations form the professionals. </h5>
<div class="row">
	
	
		   	   <div class="border-1px p-30 mb-0">
		   <h3 class="text-theme-colored mt-0 pt-5">Business Information</h3>
		              <form id="idea_form" name="idea_form" action="project_submit.php" method="post" enctype="multipart/form-data" onsubmit="return formSubmit();">
			  <div class="col-md-6">
			  <div class="row">
                   <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name">Business Name<small>*</small></label>
                      <input id="form_bus" name="form_bus" required="" type="text" placeholder="Company Name" class="form-control" onkeypress="return ((event.charCode > 64 &amp;&amp; event.charCode < 91) || (event.charCode > 96 &amp;&amp; event.charCode < 123) || (event.charCode > 48 &amp;&amp; event.charCode < 57) || (event.charCode ==32))" onchange="Validcmpname()">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_url">Website URL <small>*</small></label>
                      <input id="form_url" name="form_url" class="form-control" type="text" placeholder="www.yourdomain.com" onchange="ValidURL()">
                    </div>
                  </div>
                </div>
                <div class="row">               
                   <div class="col-sm-6">
                     <div class="form-group">
                      <label for="form_post">Stage<small>*</small></label>
			<select id="form_stage" name="form_stage" class="form-control" onchange="validate_stage()">
			<option value="">Select Stage</option>
                        <option value="Idea">Idea</option>
                        <option value="Prototype">Prototype</option>
                        <option value="Ready to Launch">Ready to Launch</option>
                        <option value="Already Launched">Already Launched</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
			<label for="form_post">Industry<small>*</small></label>
			<select id="form_industry" name="form_industry" class="form-control" onchange="validate_industry()">
                        <option value="">Select Industry</option>
                        <option value="Agriculture, Forestry, Fishing">Agriculture, Forestry, Fishing</option>
                        <option value="Arts and Entertainment">Arts and Entertainment</option>
                        <option value="Chemical/Process">Chemical/Process</option>
                        <option value="Construction">Construction</option>
                        <option value="Education &amp; Training">Education &amp; Training</option>
                        <option value="Finance/Insurance">Finance/Insurance</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="Information Services and Technology">Information Services and Technology</option>           
                        <option value="Law Enforcement">Law Enforcement</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="Manufacturing">Manufacturing</option>
			<option value="Media &amp; Advertisement">Media &amp; Advertisement</option>
                        <option value="Mining, Oil &amp; Gas">Mining, Oil &amp; Gas</option>
                        <option value="Non-Profit">Non-Profit</option>
                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                        <option value="Real Estate">Real Estate</option>						
                        <option value="Recruitment">Recruitment</option>
                        <option value="Retail">Retail</option>
                        <option value="Rural Development">Rural Development</option>
                        <option value="Telecommuncations">Telecommuncations</option>
			<option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
                        <option value="Transportation/Warehousing">Transportation/Warehousing</option>
                        <option value="Utilities - Water/Power">Utilities - Water/Power</option>
                      </select>
                    </div>
                  </div>
                </div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						  <label for="form_name">Business Location<small>*</small></label>
						  <input id="form_loc" name="form_loc" type="text" placeholder="City, State" class="form-control" onkeypress="return ((event.charCode > 64 &amp;&amp; event.charCode < 91) || (event.charCode > 96 &amp;&amp; event.charCode < 123) || (event.keyCode > 48 &amp;&amp; event.keyCode < 57) || (event.keyCode ==32))" onchange="Validloc()">
						</div>
					  </div>
					  <div class="col-md-6">
					   <div class="form-group">
					  <label for="form_attachment">Upload Company Profile</label>
					  <input id="form_profile" name="form_profile" class="file" type="file" multiple="" data-show-upload="false" onchange="ValidateSingleInputProfile(this);" required="">
					  <small>Maximum upload file size: 12 MB</small>
					</div>
					</div>
				</div>
				<div class="form-group">
					  <label for="form_message">Pitch Your Project in 100 Words<small>*</small></label>
					  <textarea id="form_message" name="form_message" class="form-control" rows="5" placeholder="Project Details Here" aria-required="true" onkeypress="if (this.value.length > 100) {  return false; }" onkeyup="textCounter(this,'counter',100);"></textarea>
					  <input type="hidden" name="userIP" value="2405:201:d000:609d:c8fe:1dec:61f7:dc9b">
		   			  <input type="hidden" name="status" value="PENDING">    
				</div>
				<div class="row">
				<div class="col-sm-12">
		                  <!-- <div class="form-group mb-10">	
                		   <script src='https://www.google.com/recaptcha/api.js'></script>				  
			             <div class="g-recaptcha" data-sitekey="6Lc3vxIUAAAAAJq2XRzZOnLmZ5B97t8jjAhJC2DD" data-callback="captcha_validate"></div>
	        		  </div>			 -->
				 </div> 
				 </div>
				  </div>
				  <div class="col-md-6">
				  <h3 class="text-theme-colored mt-0 pt-15">Support You Are Looking For</h3>
				  <div class="checkbox-group required">
						<div class="row">
						
						  <div class="col-md-6">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox1" name="support[]" value="Business Support">
								Business Support</label>
						  </div>
						   <div class="col-md-6">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox2" name="support[]" value="Financial Support ">
							  Financial Support </label>
						  </div>
						<div class="col-md-6">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox3" name="support[]" value="Technical Support">
							  Technical Support </label>
						  </div>
					
						
						<div class="col-md-6">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox4" name="support[]" value="Team management">
							 Team management</label>
						  </div>
						  <div class="col-md-6">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox5" name="support[]" value="Product development">
							 Product development</label>
						  </div>
						  <div class="col-md-6">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox6" name="support[]" value="Consultaion &amp; Guidance">
							 Consultaion &amp; Guidance</label>
						  </div>  
			
						  </div>
				</div>
				<div class="checkbox1-group required">
						 <h3 class="text-theme-colored mt-0 pt-15">What You are Offering?</h3>
							<div class="row">
							
							  <div class="col-md-4">
									<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox7" name="product[]" value="Services">
									Services</label>
							  </div>
								
							  <div class="col-md-4">
									<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox8" name="product[]" value="Product">
								 Product</label>
							  </div>
							   <div class="col-md-4">
									<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox9" name="product[]" value="Both">
								  Both </label>
							  </div>
							</div>
				</div>
			 <h3 class="text-theme-colored mt-0 pt-15">Contact Person Details</h3>
			  <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name">Name <small>*</small></label>
                      <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control" onkeypress="return ((event.charCode > 64 &amp;&amp; event.charCode < 91) || (event.charCode > 96 &amp;&amp; event.charCode < 123))">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_email">Email <small>*</small></label>
                      <input id="form_email" name="form_email" required="" class="form-control" type="email" placeholder="Enter Email" onchange="validateForm();">
                    </div>
                  </div>
                </div>
			 <div class="row">               
                   <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_phone">Mobile <small>*</small></label>
                      <input id="form_phone" name="form_phone" required="" class="form-control" type="phone" placeholder="Enter Mobile no" onkeypress="return event.charCode > 47 &amp;&amp; event.charCode < 58;" pattern="[0-9]{10}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_post">Role<small>*</small></label>
			<select id="form_role" name="form_role" required="" class="form-control required" onchange="validate_role()">
			<option value="">Select Role</option>
                        <option value="Managing Director">Managing Director</option>
                        <option value="Director">Director</option>
                        <option value="CEO">CEO</option>
                        <option value="Employee">Employee</option>
                       </select>
                    </div>
                  </div>
                </div>
		
				
		<div class="row">
		<div class="col-md-6">
		<div class="form-group">
			<div class="checkbox">
                	<label>
	                  <input id="terms-cond" onchange="changeSubmitButton()" type="checkbox" required="">
        	         <a href="">I have read Terms &amp; Conditions</a></label>
              		</div>
              	 </div>
<button id="submitData" diable-attr="true" onclick="sendMail(event)" class="btn btn-primary btn-cart mb-2"><i class="w-icon-cart"></i><span> Submit</span></button>					 
			  </div>
			  <div class="col-md-6"></div>
				
				</div>
				</div>
				
				  <div id="contactResponse"></div>
			</form>
			
              <!-- Job Form Validation-->
             
			  </div>
          </div>

                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <footer class="footer">
            <div class="footer-newsletter bg-primary pt-6 pb-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To  Our Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                                    placeholder="Your E-mail Address" />
                            <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                    class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo1.html" class="logo-footer">
                                    <img src="assets/images/logo_footer.png" alt="logo-footer" width="144"
                                        height="45" />
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                    <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                        & coupons ster now toon.
                                    </p>

                                    <div class="social-icons social-icons-colored">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-body">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Team Member</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="#">Affilate</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Product Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Term and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">Consumer Electric:</h6>
                            <a href="#">TV Television</a>
                            <a href="#">Air Condition</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Washing Machine</a>
                            <a href="#">Audio Speaker</a>
                            <a href="#">Security Camera</a>
                            <a href="#">View All</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Clothing & Apparel:</h6>
                            <a href="#">Men's T-shirt</a>
                            <a href="#">Dresses</a>
                            <a href="#">Men's Sneacker</a>
                            <a href="#">Leather Backpack</a>
                            <a href="#">Watches</a>
                            <a href="#">Jeans</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Boots</a>
                            <a href="#">Rayban</a>
                            <a href="#">Acccessories</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Home, Garden & Kitchen:</h6>
                            <a href="#">Sofa</a>
                            <a href="#">Chair</a>
                            <a href="#">Bed Room</a>
                            <a href="#">Living Room</a>
                            <a href="#">Cookware</a>
                            <a href="#">Utensil</a>
                            <a href="#">Blender</a>
                            <a href="#">Garden Equipments</a>
                            <a href="#">Decor</a>
                            <a href="#">Library</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Health & Beauty:</h6>
                            <a href="#">Skin Care</a>
                            <a href="#">Body Shower</a>
                            <a href="#">Makeup</a>
                            <a href="#">Hair Care</a>
                            <a href="#">Lipstick</a>
                            <a href="#">Perfume</a>
                            <a href="#">View all</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Jewelry & Watches:</h6>
                            <a href="#">Necklace</a>
                            <a href="#">Pendant</a>
                            <a href="#">Diamond Ring</a>
                            <a href="#">Silver Earing</a>
                            <a href="#">Leather Watcher</a>
                            <a href="#">Rolex</a>
                            <a href="#">Gucci</a>
                            <a href="#">Australian Opal</a>
                            <a href="#">Ammolite</a>
                            <a href="#">Sun Pyrite</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Computer & Technologies:</h6>
                            <a href="#">Laptop</a>
                            <a href="#">iMac</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Tablet</a>
                            <a href="#">Apple</a>
                            <a href="#">Asus</a>
                            <a href="#">Drone</a>
                            <a href="#">Wireless Speaker</a>
                            <a href="#">Game Controller</a>
                            <a href="#">View all</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="assets/images/payment.png" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
	
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.html" class="sticky-link">
		
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                    width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/html/wolmart/product.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                    height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>
        
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search" required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->
    
    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle> </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search" required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo1.html">Home</a></li>
                        <li>
                            <a href="shop-banner-sidebar.html">Shop</a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                        <li><a href="shop-list.html">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>
                                    <ul>
                                        <li><a href="product-variable.html">Variable Product</a></li>
                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                        <li><a href="product-section.html">Data In Sections</a></li>
                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                        <li><a href="product-extended.html">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.html">Grid Images</a></li>
                                        <li><a href="product-masonry.html">Masonry</a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.html">Vendor</a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="https://www.portotheme.com/html/wolmart/blog-grid.html">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">Pages</a>
                            <ul>
                                
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                            <ul>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-titles.html">Titles</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-vendors.html">Vendors</a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                Bases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                Headboards</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                Beds</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                Chests</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen & Dining</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                Cabinets</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-electronics"></i>Electronics
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                Computers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                Storage</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                Speakers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                Devices</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                Cards</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                Cases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                Chargers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-furniture"></i>Furniture
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Lighting</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                Lighting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home Accessories</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                Accessories</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Candals &
                                                Holders</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Garden & Outdoors</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                Furniture</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                Washers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                Tools</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="shop-banner-sidebar.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Plugin JS File -->   <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/sticky/sticky.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        function sendMail(ev) {
            ev.preventDefault();
            if (!document.querySelector('#terms-cond').checked) {
                swal({
                    text: "Agree to terms and condition",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }

            var businessName = document.getElementById('form_bus').value;
            if (businessName == '') {
                swal({
                    title: "Business Name is empty!",
                    text: "Please enter Business Name",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }
            var webUrl = document.getElementById('form_url').value;
            if (webUrl == '') {
                swal({
                    title: "Website URL is empty!",
                    text: "Please enter Website URL",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }

            var stage = document.getElementById('form_stage').value;
            if (stage == '') {
                swal({
                    title: "Stage is empty!",
                    text: "Please select Stage",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }
            var industry = document.getElementById('form_industry').value;
            if (industry == '') {
                swal({
                    title: "Industry is empty!",
                    text: "Please select Industry",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }

            var businessLocation = document.getElementById('form_loc').value;
            if (businessLocation == '') {
                swal({
                    title: "Location is empty!",
                    text: "Please enter Location",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }
            var formProfile = document.getElementById('form_profile').value;
            if (formProfile == '') {
                swal({
                    title: "Profile is empty!",
                    text: "Please upload Profile",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }

            var name = document.getElementById('form_name').value;
            if (name == '') {
                swal({
                    title: "Contact Name is empty!",
                    text: "Please enter Contact Name",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }
            var email = document.getElementById('form_email').value;
            if (email == '') {
                swal({
                    title: "Email is empty!",
                    text: "Please enter Email",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }

            var phone = document.getElementById('form_phone').value;
            if (phone == '') {
                swal({
                    title: "Phone is empty!",
                    text: "Please enter Phone",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }
            var role = document.getElementById('form_role').value;
            if (role == '') {
                swal({
                    title: "Role is empty!",
                    text: "Please select Role",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }
            var projectPitch = document.getElementById('form_message').value;
            if (projectPitch == '') {
                swal({
                    title: "Project Details is empty!",
                    text: "Please give Project Details",
                    icon: "error",
                    timer: 3000,
                    button: false
                });
                return;
            }

            var serviceInterest = '';
            if (document.querySelector('#inlineCheckbox1').checked) {
                if (serviceInterest != '') {
                    serviceInterest += ', ';
                }
                serviceInterest += document.getElementById('inlineCheckbox1').value;
            }
            if (document.querySelector('#inlineCheckbox2').checked) {
                if (serviceInterest != '') {
                    serviceInterest += ', ';
                }
                serviceInterest += document.getElementById('inlineCheckbox2').value;
            }
            if (document.querySelector('#inlineCheckbox3').checked) {
                if (serviceInterest != '') {
                    serviceInterest += ', ';
                }
                serviceInterest += document.getElementById('inlineCheckbox3').value;
            }
            if (document.querySelector('#inlineCheckbox4').checked) {
                if (serviceInterest != '') {
                    serviceInterest += ', ';
                }
                serviceInterest += document.getElementById('inlineCheckbox4').value;
            }
            if (document.querySelector('#inlineCheckbox5').checked) {
                if (serviceInterest != '') {
                    serviceInterest += ', ';
                }
                serviceInterest += document.getElementById('inlineCheckbox5').value;
            }
            if (document.querySelector('#inlineCheckbox6').checked) {
                if (serviceInterest != '') {
                    serviceInterest += ', ';
                }
                serviceInterest += document.getElementById('inlineCheckbox6').value;
            }



            var offering = '';
            if (document.querySelector('#inlineCheckbox7').checked) {
                if (offering != '') {
                    offering += ', ';
                }
                offering += document.getElementById('inlineCheckbox7').value;
            }
            if (document.querySelector('#inlineCheckbox8').checked) {
                if (offering != '') {
                    offering += ', ';
                }
                offering += document.getElementById('inlineCheckbox8').value;
            }
            if (document.querySelector('#inlineCheckbox9').checked) {
                if (offering != '') {
                    offering += ', ';
                }
                offering += document.getElementById('inlineCheckbox9').value;
            }
            
            // const jsonString = JSON.stringify(toSend);

            var myFormData = new FormData();
             // ye step sahi kara h ese hi hoga

            myFormData.append('profile', document.getElementById('form_profile').files[0]);
            myFormData.append("businessName", businessName) ;
            myFormData.append("webUrl", webUrl) ;
            myFormData.append("stage", stage) ;
            myFormData.append("industry", industry) ;
            myFormData.append("businessLocation", businessLocation) ;
            myFormData.append("name", name) ;
            myFormData.append("email", email) ;
            myFormData.append("phone", phone) ;
            myFormData.append("role", role) ;
            myFormData.append("serviceInterest", serviceInterest) ;
            myFormData.append("projectPitch", projectPitch) ;
            myFormData.append("offering", offering) ;

            $.ajax({
                url: "project_form_helper.php",
                type: "POST",
                data: myFormData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response){
                        swal({
                    title: "Success!",
                    text: "Thanks for Your Interest We will connect with you shortly.",
                    icon: "Success",
                    timer: 5000,
                    button: false
                });
                    }

                    else{
                        swal({
                    title: "Error",
                    text: "Error has occured",
                    icon: "error",
                    timer: 5000,
                    button: false
                });
                    }
                }
            });

        }

        function changeSubmitButton() {
            if (document.querySelector('#terms-cond').checked) {
                document.getElementById('submitData').attr("disable-attr") = false;
            } else {
                document.getElementById('submitData').attr("disable-attr") = true;
            }
        }
    </script>
</body>

</html>

