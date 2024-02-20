
<?php 
		$active = 'Home';
		include("includes/header.php");
?>


		<!-- //Header Container  -->
		<!-- Main Container  -->
		<main id="content" class="page-main">
			<!-- Block Spotlight1  -->
			<div class="so-spotlight1 ">
				<div class="container">
					<div class="row">
						<div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
							<div class="slider-container "> 
								<div id="so-slideshow" class="">
									<div class="module slideshow no-margin">
										<?php 
										
											$get_slides = "select * from slider LIMIT 0,1";

											$run_slides = mysqli_query($con,$get_slides);

											while($row_slides = mysqli_fetch_array($run_slides)){
												$slide_name = $row_slides['slide_name'];
												$slide_image = $row_slides['slide_image'];

												echo "
												

														<div class='item'>
															<a href='#'><img class='lazyload img-responsive' src='admin_area/slides_images/$slide_image' alt='$slide_name'></a>
															<div class='sohomeslider-description'>
																<div class='text pos-right text-sl11'>
																	<h3 class='tilte modtitle-sl11  title-active'>Nikon D7100</h3>
																	<p class='des des-sl11 des-active'>Ultimate image quality. Create without limination</p>      
																</div> 					
															</div>
														</div>
												
														";
													}
													$get_slides = "select * from slider LIMIT 1,1";

											$run_slides = mysqli_query($con,$get_slides);

											while($row_slides = mysqli_fetch_array($run_slides)){
												$slide_name = $row_slides['slide_name'];
												$slide_image = $row_slides['slide_image'];

												echo "
														<div class='item'>
															<a href='#'><img src='admin_area/slides_images/$slide_image' alt='$slide_name'></a>
															<div class='sohomeslider-description'>
																<div class='text pos-right text-sl12'>
																<h3 class='tilte modtitle-sl12 title-active'>OUR NEW RANGE OF</h3>
																<h4 class='titleh4 h4-active'>TABLET</h4>
																<p class='des des-sl11 des-active'>FOR LESS THAN $99.00</p>   
																</div>    					
															</div>
														</div>
														
														";
													}
													$get_slides = "select * from slider LIMIT 2,1";

											$run_slides = mysqli_query($con,$get_slides);

											while($row_slides = mysqli_fetch_array($run_slides)){
												$slide_name = $row_slides['slide_name'];
												$slide_image = $row_slides['slide_image'];

												echo "
														<div class='item'>
															<a href='#'><img class='lazyload img-responsive' src='admin_area/slides_images/$slide_image' alt='$slide_name'></a>
															<div class='sohomeslider-description'>
																<div class='text pos-left text-sl13'>
																	<h3 class='tilte modtitle-sl13 title-active'>OUR NEW RANGE OF</h3>
																	<h4 class='titleh4 h4-active'>IMACS</h4>   
																</div>  					
															</div>
														</div>

												
														";
													}

										?>
									</div>
									<div class="loadeding"></div>

								</div>
							</div>
						</div>
					</div>
				</div>  
			</div>
			<!-- Block Spotlight2  -->
			<div class="so-spotlight2 ">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-sm-8 col-xs-12">
							<!-- DEAL -->
							<div class="module so-deals">
								<h3 class="modtitle"><span>Hot Deals</span></h3>
								<div class="modcontent">
								    <div id="so_deals_14513931681482050581" class="so-deal modcontent products-list grid clearfixbutton-type1 style2">
							        	<div class="extraslider-inner product-layout deal-slider">  
											
										
							               <?php getPro(); ?>
											
											
											
											

										</div>
									</div>
								    
								</div><!--/.modcontent-->
							</div>	
							<!-- END DEAL -->
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<!-- MODULE BESTSELER -->
							<div class="moduletable module best-seller">
								<h3 class="modtitle"><span>Best Sellers</span></h3>
								<div id="sp_extra_slider_20796849091482058205" class="so-extraslider">
									<div class="extraslider-inner best-seller-slider">
										<div class="item ">
											
											<?php getBestSallers(); ?>
											
											<!-- End item-wrap -->													
										</div>
										<div class="item ">

										
											<?php getBestSallers1(); ?>
											<!-- End item-wrap -->													
										</div>
									</div>
								</div>
							</div>
							<!-- END  -->
						</div>
					</div>
				</div>  
			</div>
			<!-- Block Spotlight3  -->
			<div class="so-spotlight3">
				<div class="container">
					<!-- Mod Supercategory 1 -->
					<div><img src="" alt=""></div>
					<div class="module cus-style-supper-cate supper1">
						<div class="header">
								<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-empire"></i>
									Electronics			
									<small class="arow-after"></small>
								</span>
								<strong class="line-color"></strong>
							</h3>
							
						</div>
						
						<div id="so_super_category_1" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="admin_area/banner/s21.jpg" alt="banner">  </a>                        				
									</div>
									<div class="hot-category">
										<div class="category-wrap-cat">
								            <div class="title-imageslider  sp-cat-title-parent">
											 Hot Categories        </div>
								   
								            <div id="cat_slider_3" class="slider">
												<div class="cat_slider_inner so_category_type_default">
								                    <div class="item">
								                        <div class="item-inner">
									                        <div class="cat_slider_title">
																		
																<?php getHotCategory(); ?>

									                        </div>
								                            
								                        </div>
								                    </div>
								            	</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-right">
									<div class="banner-pre-text">
										<a href="#" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="admin_area/banner/t23.jpg" alt="banner"></a>               				
									</div>
																		
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
							
										<div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
													<div class="ltabs-item ">
														<?php elcPro();?>
					    							</div>
					    							
					    							<div class="ltabs-item ">
														<?php elcPro1();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro2();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro3();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro4();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro5();?>
					    							</div>
												</div>
											</div>
										</div>	
										
										
										
										
										
									</div>
									<!--End Items-->
								</div>
								
								
							</div>
						</div>
					</div>
					<!-- End Mod -->
					<!-- Mod Supercategory 2 -->
					<div class="module cus-style-supper-cate supper2">
						<div class="header">
								<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-mobile"></i>
									Mobile &amp; Tablet				
									<small class="arow-after"></small>
								</span>
								<strong class="line-color"></strong>
							</h3>
							
						</div>
						
						<div id="so_super_category_2" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img src="admin_area/banner/s21.jpg" alt="banner">  </a>                        				
									</div>
									<div class="hot-category">
										<div class="category-wrap-cat">
								            <div class="title-imageslider  sp-cat-title-parent">
											 Hot Categories        </div>
								   
								            <div id="cat_slider_2" class="slider">
												<div class="cat_slider_inner so_category_type_default">
								                    <div class="item">
								                        <div class="item-inner">
									                        <div class="cat_slider_title">
																		
																<?php getHotCategory(); ?>
									                        </div>
								                            
								                        </div>
								                    </div>
								                    
								            	</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-right">
									<div class="banner-pre-text">
										<a href="#" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="admin_area/banner/t23.jpg" alt="banner"></a>               				
									</div>
																		
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
										<div class="spcat-items spcat-items-loaded items-category-rating product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
												<div class="ltabs-item ">
														<?php elcPro();?>
					    							</div>
					    							
					    							<div class="ltabs-item ">
														<?php elcPro1();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro2();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro3();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro4();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro5();?>
					    							</div>
												</div>
											</div>
										</div>
																	
										
										
										
									</div>
									<!--End Items-->
								</div>
								
								
							</div>
						</div>
					</div>
					<!-- End Mod -->
					<!-- Banner Content2 -->
					<!-- Mod Supercategory 3 -->
					<div class="module cus-style-supper-cate supper3">
						<div class="header">
								<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-futbol-o "></i>
									Computer			
									<small class="arow-after"></small>
								</span>
								<strong class="line-color"></strong>
							</h3>
							
						</div>
						
						<div id="so_super_category_3" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="admin_area/banner/s21.jpg" alt="banner">  </a>                        				
									</div>
									<div class="hot-category">
										<div class="category-wrap-cat">
								            <div class="title-imageslider  sp-cat-title-parent">
											 Hot Categories        </div>
								   
								            <div id="cat_slider_1" class="slider">
												<div class="cat_slider_inner so_category_type_default">
								                    <div class="item">
								                        <div class="item-inner">
									                        <div class="cat_slider_title">
																		
																<?php getHotCategory(); ?>
									                        </div>
								                            
								                        </div>
								                    </div>
								                    
								            	</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-right">
									<div class="banner-pre-text">
										<a href="#" title="banner">   <img src="admin_area/banner/t23.jpg" alt="banner"></a>               				
									</div>
																		
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
										<div class="spcat-items spcat-items-loaded items-category-p_price product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
												<div class="ltabs-item ">
														<?php elcPro();?>
					    							</div>
					    							
					    							<div class="ltabs-item ">
														<?php elcPro1();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro2();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro3();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro4();?>
					    							</div>
					    							<div class="ltabs-item ">
														
													<?php elcPro5();?>
					    							</div>
												</div>
											</div>
										</div>									
										
										
										
										
										
									</div>
									<!--End Items-->
								</div>
							</div>
						</div>
					</div>
					<!-- End Mod -->
				</div>	
			</div>
			<!--Block Spotlight4  -->
			
		</main >
		<!-- //Main Container -->
		<!-- Footer Container -->

		<?php include("includes/footer.php"); ?>
	

	
	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:48:47 GMT -->
</html>