<?php 

	
	session_start();
	include("includes/db.php");
	include("functions/functions.php"); 

?>


<?php 

	if(isset($_GET['pro_id'])){

		$product_id = $_GET['pro_id'];

		$get_product = "select * from products where product_id='$product_id'";

		$run_product = mysqli_query($con,$get_product);

		$row_product = mysqli_fetch_array($run_product);

		$p_cat_id = $row_product['p_cat_id'];
		$pro_title = $row_product['product_title'];
		$pro_price = $row_product['product_price'];
		$pro_desc = $row_product['product_desc'];
		$pro_img1 = $row_product['product_img1'];
		$pro_img2 = $row_product['product_img2'];
		$pro_img3 = $row_product['product_img3'];
		$pro_img4 = $row_product['product_img4'];
		$pro_img5 = $row_product['product_img5'];

		$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
		
		$run_p_cat = mysqli_query($con,$get_p_cat);

		$row_p_cat = mysqli_fetch_array($run_p_cat);

		$p_cat_title = $row_p_cat['p_cat_title'];

		
	}


?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:51:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Maxshop - Premium Multipurpose HTML5/CSS3 Theme</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->

    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
	
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	
		<link id="color_scheme" href="css/theme.css" rel="stylesheet">
		
	<link href="css/responsive.css" rel="stylesheet">
	
   
	
	

</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_1">
			<!-- Header Top -->
			<div class="header-top compact-hidden">
				<div class="container">
					<div class="row">
						<div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
							<ul class="list-inlines">
								<li class="hidden-xs" >
									<div class="welcome-msg"> 
										<ul class="list-msg">
										<li><label class="label-msg">
												<?php
												
													if(!isset($_SESSION['customer_email'])){
															echo "Welcome: Guest";
													}else{
														echo "Welcome: ". $_SESSION['customer_email']. "";
													}

												?>
											</label> <a href="#"><?php items(); ?> Items in your Cart | Total Price: <?php total_price(); ?> </a></li> 
												<li><label class="label-msg">
												<?php
												
													if(!isset($_SESSION['customer_email'])){
															echo "Welcome: Guest";
													}else{
														echo "Welcome: ". $_SESSION['customer_email']. "";
													}

												?></label> <a href="#"><?php items(); ?> Items in your Cart | Total Price: <?php total_price(); ?> </a></li> 
										</ul> 
									</div>
								</li>
							</ul>
							
						</div>
						<div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
							<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="account" id="my_account">
										<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu ">
											<li><a href="customer_register.php"> Register</a></li>
											<li><a href="customer_login.php">
											<?php  
											
														
												if(!isset($_SESSION['customer_email'])){

														echo "<a href='checkout.php'> Login </a>";
												}else{
													
													echo " <a href='logout.php'> Log Out </a>";
												}

											?>
										
										</a></li>
										</ul>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->
			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- LOGO -->
						<div class="navbar-logo col-md-3 col-sm-4 col-xs-10">
						   <a href="index.php"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
						</div>
						<div class="header-center-right col-md-9 col-sm-8 col-xs-2">
							<div class="responsive so-megamenu  megamenu-style-dev">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										
										<div class="megamenu-wrapper ">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
												<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="<?php if($active == 'Home') echo "home hover"; ?>">
															<a href="index.php">Home </a>
														</li>
														<li class="<?php if($active == 'Shop') echo "home hover"; ?>">
															<a href="shop.php">Shop</a>
														</li>
														<li class="<?php if($active == 'Account') echo "home hover"; ?>">
														<?php 
															
															if(!isset($_SESSION['customer_email'])){
																echo "<a href='checkout.php'>My Account</a>";
															}else{
																echo "<a href='customer/my-account.php?my_orders'>My Account</a>";
															}

															?>
														</li>
														<li class="<?php if($active == 'Cart') echo "home hover"; ?>">
															<a href="cart.php">Shopping Cart</a>
														</li>
														
														<li class="<?php if($active == 'Contact') echo "home hover"; ?>">
															<a href="contact.php">Contact Us</a>
															
														</li>
													</ul>
													
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header center -->
			<!-- Header Bottom -->
			<div class="header-bottom compact-hidden">
				<div class="container">
					<div class="header-bottom-inner">
						<div class="row">
							<div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
								<div class="responsive so-megamenu megamenu-style-dev">
									<div class="so-vertical-menu no-gutter compact-hidden">
										<nav class="navbar-default">	
											<div class="container-megamenu vertical open">
												<div id="menuHeading">
													<div class="megamenuToogle-wrapper">
														<div class="megamenuToogle-pattern">
															<div class="container">
																<div>
																	<span></span>
																	<span></span>
																	<span></span>
																</div>
																Categories							
																<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="navbar-header">
													<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>	
												</div>
												<div class="vertical-wrapper" >
													<span id="remove-verticalmenu" class="fa fa-times"></span>
													<div class="megamenu-pattern">
														<div class="container">
															<ul class="megamenu item-vertical">
																<li class="item-vertical style1 with-sub-menu hover">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<strong>
																		<span>Automotive &amp; Motocrycle</span>
																		<b class="fa fa-angle-right"></b>
																		</strong> 
																	</a>
																	<div class="sub-menu" data-subwidth="100" >
																		<div class="content" >
																			<div class="row">
																				<div class="col-sm-8">
																					<div class="categories ">
																						<div class="row">
																							<div class="col-sm-6 static-menu">
																								<div class="menu">
																									<ul>
																										<li>
																											<a href="#" class="main-menu">Automotive</a>
																											<ul>
																												<li> <a href="#">Car Alarms and Security</a>	</li>
																												<li> <a href="#">Car Audio &amp; Speakers</a>   </li>
																												<li> <a href="#">Gadgets &amp; Auto Parts</a>	</li>
																												<li> <a href="#">More Car Accessories</a>		</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#" class="main-menu">Computer</a>
																											<ul>
																												<li> <a href="#">Camping &amp; Hiking</a>	</li>
																												<li> <a href="#">Cusen mariot</a>			</li>
																												<li> <a href="#">Denta magela</a>			</li>
																												<li> <a href="#">Engite nanet</a>			</li>
																											</ul>
																										</li>
																									</ul>
																								</div>
																							</div>
																							<div class="col-sm-6 static-menu">
																								<div class="menu">
																									<ul>
																										<li>
																											<a href="#" class="main-menu">Electronics </a>
																											<ul>
																												<li>	<a href="#">Angene mafin</a>	</li>
																												<li>	<a href="#">Egante mangetes</a>	</li>
																												<li>	<a href="#">Gante extensg</a>	</li>
																												<li>	<a href="#">Guntes magesg</a>	</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#" class="main-menu">Mobile &amp; Tablet </a>
																											<ul>
																												<li>	<a href="#">Hanet magente</a>	</li>
																												<li>	<a href="#">Knage unget</a>		</li>
																												<li>	<a href="#">Latenge mange</a>	</li>
																												<li>	<a href="#">Punge nenune</a>	</li>
																											</ul>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="row img-banner">
																						<a href="#"><img src="image/demo/cms/img-static-megamenu-h.png" alt="banner"></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="item-vertical">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<strong>
																		<span>Electronic</span>
																		</strong>
																	</a>
																</li>
																<li class="item-vertical with-sub-menu hover">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<span class="label"></span>
																		<strong>
																		<span>Sports &amp; Outdoors</span>
																		<b class="fa fa-angle-right"></b>
																		</strong>
																	</a>
																	<div class="sub-menu" data-subwidth="60" >
																		<div class="content">
																			<div class="row">
																				<div class="col-md-6">
																					<div class="row">
																						<div class="col-md-12 static-menu">
																							<div class="menu">
																								<ul>
																									<li>
																										<a href="#" onclick="window.location = '81.html';" class="main-menu">Mobile Accessories</a>
																										<ul>
																											<li><a href="#" onclick="window.location = '33_63.html';">Gadgets &amp; Auto Parts</a></li>
																											<li><a href="#" onclick="window.location = '24_64.html';">Bath &amp; Body</a></li>
																											<li><a href="#" onclick="window.location = '17.html';">Bags, Holiday Supplies</a></li>
																										</ul>
																									</li>
																									<li>
																										<a href="#" onclick="window.location = '18_46.html';" class="main-menu">Battereries &amp; Chargers</a>
																										<ul>
																											<li><a href="#" onclick="window.location = '25_28.html';">Outdoor &amp; Traveling</a></li>
																											<li><a href="#" onclick="window.location = '80.html';">Flashlights &amp; Lamps</a></li>
																											<li><a href="#" onclick="window.location = '24_66.html';">Fragrances</a></li>
																										</ul>
																									</li>
																									<li>
																										<a href="#" onclick="window.location = '25_31.html';" class="main-menu">Fishing</a>
																										<ul>
																											<li><a href="#" onclick="window.location = '57_73.html';">FPV System &amp; Parts</a></li>
																											<li><a href="#" onclick="window.location = '18.html';">Electronics</a></li>
																											<li><a href="#" onclick="window.location = '20_76.html';">Earings</a></li>
																											<li><a href="#" onclick="window.location = '33_60.html';">More Car Accessories</a></li>
																										</ul>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="row banner">
																						<a href="#">
																							<img src="image/demo/cms/menu_bg2.jpg" alt="banner1">
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical with-sub-menu hover">
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			<strong>
																			<span>Health &amp; Beauty</span>
																			<b class="fa fa-angle-right"></b>
																			</strong>
																		</a>
																		<div class="sub-menu" data-subwidth="100" >
																			<div class="content" >
																				<div class="row">
																					<div class="col-md-12">
																						<div class="row">
																							<div class="col-md-4 static-menu">
																								<div class="menu">
																									<ul>
																										<li>
																											<a href="#" class="main-menu">Car Alarms and Security</a>
																											<ul>
																												<li><a href="#" >Car Audio &amp; Speakers</a></li>
																												<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																												<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																												<li><a href="#" >Headphones, Headsets</a></li>
																											</ul>
																										</li>
																										<li>
																											<a href="24.html" onclick="window.location = '24.html';" class="main-menu">Health &amp; Beauty</a>
																											<ul>
																												<li>
																													<a href="#" >Home Audio</a>
																												</li>
																												<li>
																													<a href="#" >Helicopters &amp; Parts</a>
																												</li>
																												<li>
																													<a href="#" >Outdoor &amp; Traveling</a>
																												</li>
																												<li>
																													<a href="#">Toys &amp; Hobbies</a>
																												</li>
																											</ul>
																										</li>
																									</ul>
																								</div>
																							</div>
																							<div class="col-md-4 static-menu">
																								<div class="menu">
																									<ul>
																										<li>
																											<a href="#"  class="main-menu">Electronics</a>
																											<ul>
																												<li>
																													<a href="#">Earings</a>
																												</li>
																												<li>
																													<a href="#" >Salon &amp; Spa Equipment</a>
																												</li>
																												<li>
																													<a href="#" >Shaving &amp; Hair Removal</a>
																												</li>
																												<li>
																													<a href="#">Smartphone &amp; Tablets</a>
																												</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#"  class="main-menu">Sports &amp; Outdoors</a>
																											<ul>
																												<li>
																													<a href="#" >Flashlights &amp; Lamps</a>
																												</li>
																												<li>
																													<a href="#" >Fragrances</a>
																												</li>
																												<li>
																													<a href="#" >Fishing</a>
																												</li>
																												<li>
																													<a href="#" >FPV System &amp; Parts</a>
																												</li>
																											</ul>
																										</li>
																									</ul>
																								</div>
																							</div>
																							<div class="col-md-4 static-menu">
																								<div class="menu">
																									<ul>
																										<li>
																											<a href="#" class="main-menu">More Car Accessories</a>
																											<ul>
																												<li>
																													<a href="#" >Lighter &amp; Cigar Supplies</a>
																												</li>
																												<li>
																													<a href="#" >Mp3 Players &amp; Accessories</a>
																												</li>
																												<li>
																													<a href="#" >Men Watches</a>
																												</li>
																												<li>
																													<a href="#" >Mobile Accessories</a>
																												</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																											<ul>
																												<li>
																													<a href="#" >Gift &amp; Lifestyle Gadgets</a>
																												</li>
																												<li>
																													<a href="#" >Gift for Man</a>
																												</li>
																												<li>
																													<a href="#" >Gift for Woman</a>
																												</li>
																												<li>
																													<a href="#" >Gift for Woman</a>
																												</li>
																											</ul>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical css-menu with-sub-menu hover">
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			
																			<strong>
																				<span>Smartphone &amp; Tablets</span>
																				<b class="fa fa-angle-right"></b>
																			</strong>
																		</a>
																		<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
																			<div class="content"  style="display: none;">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-12 hover-menu">
																									<div class="menu">
																										<ul>
																											<li><a href="#" class="main-menu">Headphones, Headsets <b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li><a href="#">Head Magente</a></li>
																													<li><a href="#">Head Unget</a></li>
																													<li><a href="#">Latenge mange</a></li>
																													<li><a href="#">Car Alarms and Security</a></li>
																												</ul>
																											</li>
																											<li><a href="#" class="main-menu">Home Audio</a></li>
																											<li><a href="#" class="main-menu">Health &amp; Beauty<b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li><a href="#">Rengae manges</a></li>
																													<li><a href="#">Mobiles</a></li>
																													<li><a href="#">Macs</a></li>
																													<li><a href="#">Punge nenune</a></li>
																												</ul>
																											</li>
																											<li><a href="#" class="main-menu">Helicopters &amp; Parts</a></li>
																											<li><a href="#" class="main-menu">Car Audio &amp; Speakers<b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li><a href="#">Qunge genga</a></li>
																													<li><a href="#">Accessories</a></li>
																													<li><a href="#">Laptops &amp; Notebooks</a></li>
																												</ul>
																											</li>
																										</ul>

																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical">
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			<strong>
																				<span>Flashlights &amp; Lamps</span>
																			</strong>
																		</a>
																	</li>
																	<li class="item-vertical">
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			<strong>
																				<span>Camera &amp; Photo</span>
																			</strong>
																		</a>
																	</li>
																	<li class="item-vertical">
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			<strong>
																				<span>Smartphone &amp; Tablets</span>
																			</strong>
																		</a>
																	</li>
																	<li class="item-vertical" >
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			<strong>
																				<span>Outdoor &amp; Traveling Supplies</span>
																			</strong>
																		</a>
																	</li>
																	<li class="item-vertical" style="display: none;">
																		<p class="close-menu"></p>
																		
																		<a href="#" class="clearfix">
																			<strong>
																				<span>Health &amp; Beauty</span>
																			</strong>
																		</a>
																	</li>
																	<li class="item-vertical" >
																		<p class="close-menu"></p>
																		<a href="#" class="clearfix">
																			<strong>
																				<span>Toys &amp; Hobbies </span>
																			</strong>
																		</a>
																	</li>
																	
																	<li class="loadmore">
																		<i class="fa fa-plus-square-o"></i>
																		<span class="more-view">More Categories</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</nav>
									</div>
								</div>
							</div>
							
							<!-- Main menu -->
							<div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">
								<div class="col-lg-9 col-md-8 col-sm-7 col-xs-9 header_search">
									<!-- Search -->
									<div id="sosearchpro" class="search-pro">
										<form method="GET" action="https://demo.smartaddons.com/templates/html/maxshop/index.html">
											<div id="search0" class="search input-group">
												<div class="select_category filter_type  icon-select">
													<select class="no-border" name="category_id">
														<option value="0">All Category</option>
														<option value="20">Desktops</option>
														<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 9</option>

														<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 8</option>

														<option value="18">Laptops &amp; Notebooks</option>
														<option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs</option>

														<option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>

														<option value="25">Automotive</option>
														<option value="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadgets &amp; Auto Parts</option>

														<option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More Car Accessories</option>

														<option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Alarms and Security</option>

														<option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Audio &amp; Speakers</option>

														<option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>

														<option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>

														<option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
														<option value="57">Mobile &amp; Tablet </option>
														<option value="68">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hanet magente</option>

														<option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knage unget</option>

														<option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latenge mange</option>

														<option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punge nenune</option>

														<option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qunge genga</option>

														<option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tange manue</option>

														<option value="17">Electronics </option>
														<option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angene mafin</option>

														<option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Egante mangetes</option>

														<option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gante extensg</option>

														<option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guntes magesg</option>

														<option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rengae manges</option>

														<option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sine engain</option>

														<option value="33">Apparel</option>
														<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>

														<option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bags</option>

														<option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computers</option>

														<option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option>

														<option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option>

														<option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</option>

														<option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobiles</option>

														<option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports</option>

														<option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watches</option>

														<option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</option>

														<option value="34">Computer</option>
														<option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camping &amp; Hiking</option>

														<option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cusen mariot</option>

														<option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denta magela</option>

														<option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engite nanet</option>

														<option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theid cupensg</option>

														<option value="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verture agoent</option>
													</select>
												</div>	

												<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
												<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
												</span>
											</div>
											<input type="hidden" name="route" value="product/search" />
										</form>
									</div>
									<!-- //end Search -->
								</div>
								<div class="block-cart">
									<!--cart-->
									<div class="shopping_cart pull-right">
										<div id="cart" class=" btn-group btn-shopping-cart">
											<a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
												<div class="shopcart">
													<span class="handle pull-left"></span>
													<span class="text-shopping-cart hidden-xs">	<?php items(); ?> Items...</span>
													<span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
													  <i class="fa fa-cart-plus"></i>
													</span> 
												</div>
											</a>
											<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">							
												
												<li>
													<div>
														<p class="text-center"> <a class="btn view-cart" href="cart.php"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; 
														<a class="btn btn-mega checkout-cart" href="checkout.php"><i class="fa fa-share"></i>Checkout</a> </p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<!--//cart-->
								</div>
								<div class="header_custom_link hidden-xs">
									<ul>
										<li><a href="customer_login.php"><i class="fa fa-user"></i> Login</a></li>
									</ul>	
								</div>
							</div>
							<!-- //end Main menu -->
						</div>
					</div>
				</div>
			</div>
		</header>