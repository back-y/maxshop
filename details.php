
<?php
	$active = 'Cart';
	include("includes/details_header.php");

?>


		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></li>
				<li><?php echo $pro_title; ?></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12">
					
					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
								<div class="content-product-left  col-sm-6 col-xs-12 ">
									<div id="thumb-slider-vertical" class="thumb-vertical-outer">
										<span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
										<span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>
										<ul class="thumb-vertical">
											<li class="owl2-item">
												<a data-index="0" class="img thumbnail" data-image="admin_area/product_images/<?php echo $pro_img1; ?>" title="Canon EOS 5D">
													<img src="admin_area/product_images/<?php echo $pro_img1; ?>" title="Canon EOS 5D" alt="Canon EOS 5D">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="1" class="img thumbnail " data-image="admin_area/product_images/<?php echo $pro_img2; ?>" title="Bint Beef">
													<img src="admin_area/product_images/<?php echo $pro_img2; ?>" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="2" class="img thumbnail" data-image="admin_area/product_images/<?php echo $pro_img3; ?>" title="Bint Beef">
													<img src="admin_area/product_images/<?php echo $pro_img3; ?>" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="3" class="img thumbnail" data-image="admin_area/product_images/<?php echo $pro_img4; ?>" title="Bint Beef">
													<img src="admin_area/product_images/<?php echo $pro_img4; ?>" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="4" class="img thumbnail" data-image="admin_area/product_images/<?php echo $pro_img5; ?>" title="Bint Beef">
													<img src="admin_area/product_images/<?php echo $pro_img5; ?>" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
										</ul>
										
										
									</div>
									<div class="large-image  vertical">
										<img itemprop="image" class="product-image-zoom" src="admin_area/product_images/<?php echo $pro_img1; ?>" data-zoom-image="admin_area/product_images/<?php echo $pro_img1; ?>" title="Bint Beef" alt="Bint Beef">
									</div>
									<a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
									
								</div>

								<div class="content-product-right col-sm-6 col-xs-12">
									<div class="title-product">
										<h1><?php echo $pro_title; ?></h1>
									</div>

									<div class="product-label form-group">
										<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
											<span class="price-new" itemprop="price"><?php echo $pro_price; ?></span>
											<span class="price-old">$122.00</span>
										</div>
										
									</div>

									<div class="product-box-desc">
										<div class="inner-box-desc">
											<div class="price-tax"><span>Ex Tax:</span> $60.00</div>
											<div class="brand"><span>Brand:</span><a href="#">Apple</a>		</div>
											<div class="model"><span>Product Code:</span> Product 15</div>
											<div class="reward"><span>Reward Points:</span> 100</div>
										</div>
									</div>	


									<div id="product">
										
										
										<?php add_cart(); ?>
									<form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
										<div class="form-group box-info-product">
											<div class="option quantity">
												<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
													<label>Qty</label>
													<select name="product_qty" id="" class="form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group box-info-product">
											<label class="control-label">Product Size</label>

											<select name="product_size" class="form-control" required oninput="setCustomValidity('')"
											oninvalid="setCustomValidity('Must pick 1 size for the product')">
												<option disabled selected>Select a Size</option>
												<option>Small</option>
												<option>Medium</option>
												<option>Larg</option>
										</select>
										</div>
										<p class="text-center buttons"><button class="btn btn-danger i fa fa-shopping-cart"> Add to cart</button></p>
									</form>

									</div>
									<!-- end box info product -->
								</div>
							</div>
						</div>
					</div>
					<div class="bototm-detail">
						<div class="row">
							<div class="col-xs-12">
								<!-- Product Tabs -->
								<div class="producttab ">
									<div class="tabsslider  col-xs-12">
										<ul class="nav nav-tabs">
											<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
										</ul>
										<div class="tab-content col-xs-12">
											<div id="tab-1" class="tab-pane fade active in">
											<?php echo $pro_desc; ?>
											</div>
											
											
											
										</div>
									</div>
								</div>
								<!-- //Product Tabs -->
								<!-- Upsell Products -->
								<div class="related upsell titleLine products-list grid module ">
									<h3 class="modtitle"><span>Upsell Products</span></h3>
									<div class="upsell-products ">

									<?php 
									
										$get_products = "select * from products order by rand() LIMIT 0,9";

										$run_products = mysqli_query($con,$get_products);

										while($row_products = mysqli_fetch_array($run_products)){

											$pro_id = $row_products['product_id'];

											$pro_title = $row_products['product_title'];

											$pro_img1 = $row_products['product_img1'];

											$pro_img2 = $row_products['product_img2'];

											$pro_price = $row_products['product_price'];

											echo "
											
											
												
										<div class='product-layout'>
										<div class='product-item-container'>
											<div class='left-block'>
												<div class='product-image-container second_img '>
													<img  src='admin_area/product_images/$pro_img1'  title='Apple Cinema 30&quot;' class='img-1 img-responsive' />
													<img  src='admin_area/product_images/$pro_img2'  title='Apple Cinema 30&quot;' class='img-2 img-responsive' />
												</div>
												<!--Sale Label-->
												<span class='label label-sale'>Sale</span>
												
											</div>
											
											<div class='right-block'>
												<div class='caption'>
													<h4><a href='details.php?pro_id=$pro_id'>$pro_title 30&quot;</a></h4>		
													<div class='ratings'>
														<div class='rating-box'>
															<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
															<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
															<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
															<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
															<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i></span>
														</div>
													</div>
																		
													<div class='price'>
														<span class='price-new'>$$pro_price</span> 
														<span class='price-old'>$122.00</span>		 
														<span class='label label-percent'>-40%</span>    
													</div>
													<div class='description item-desc hidden'>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
													</div>
												</div>
											</div><!-- right block -->

										</div>
									</div>
											
											
											";


										}

									?>
									</div>
								</div>
							</div>
						</div>
					</div>
					

					

					<script type="text/javascript">
						$(document).ready(function() {
							var zoomCollection = '.large-image img';
							$( zoomCollection ).elevateZoom({
								zoomType    : "inner",
								lensSize    :"200",
								easing:true,
								gallery:'thumb-slider-vertical',
								cursor: 'pointer',
								galleryActiveClass: "active"
							});
							$('.large-image').magnificPopup({
								items: [
									{src: 'image/demo/shop/product/1.png' },
									{src: 'image/demo/shop/product/f9.jpg' },
									{src: 'image/demo/shop/product/2.png' },
									{src: 'image/demo/shop/product/3.png' },
									{src: 'image/demo/shop/product/j9.jpg' },
								],
								gallery: { enabled: true, preload: [0,2] },
								type: 'image',
								mainClass: 'mfp-fade',
								callbacks: {
									open: function() {
										
										var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
										var magnificPopup = $.magnificPopup.instance;
										magnificPopup.goTo(activeIndex);
									}
								}
							});
							$("#thumb-slider-vertical .owl2-item").each(function() {
								$(this).find("[data-index='0']").addClass('active');
							});
							
							$('.thumb-video').magnificPopup({
							  type: 'iframe',
							  iframe: {
								patterns: {
								   youtube: {
									  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
									  id: 'v=', // String that splits URL in a two parts, second part should be %id%
									  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
										},
									}
								}
							});
							
							$('.product-options li.radio').click(function(){
								$(this).addClass(function() {
									if($(this).hasClass("active")) return "";
									return "active";
								});
								
								$(this).siblings("li").removeClass("active");
								$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
							});
							
							var _isMobile = {
							  iOS: function() {
							   return navigator.userAgent.match(/iPhone/i);
							  },
							  any: function() {
							   return (_isMobile.iOS());
							  }
							};
							
							$(".thumb-vertical-outer .next-thumb").click(function () {
								$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
							});
			
							$(".thumb-vertical-outer .prev-thumb").click(function () {
								$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
							});

							$(".thumb-vertical-outer .thumb-vertical").lightSlider({
								item: 4,
								autoWidth: false,
								vertical:true,
								slideMargin: 7,
								verticalHeight:425,
					            pager: false,
								controls: true,
					            prevHtml: '<i class="fa fa-chevron-up"></i>',
					            nextHtml: '<i class="fa fa-chevron-down"></i>',
								responsive: [
									{
										breakpoint: 1199,
										settings: {
											verticalHeight: 330,
											item: 4,
										}
									},
									{
										breakpoint: 1024,
										settings: {
											verticalHeight: 235,
											item: 2,
											slideMargin: 5,
										}
									},
									{
										breakpoint: 768,
										settings: {
											verticalHeight: 340,
											item: 3,
										}
									}
									,
									{
										breakpoint: 480,
										settings: {
											verticalHeight: 100,
											item: 1,
										}
									}
					
								]
								
					        });
			
							
							
							// Product detial reviews button
							$(".reviews_button,.write_review_button").click(function (){
								var tabTop = $(".producttab").offset().top;
								$("html, body").animate({ scrollTop:tabTop }, 1000);
							});
						});
							
					</script>
					
				</div>
				
				
			</div>
			<!--Middle Part End-->
		</div>
		<!-- //Main Container -->

			<!-- Footer Container -->

		<?php include("includes/footer.php"); ?>
		
		<!-- //end Footer Container -->
    </div>
	


	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>	<!-- //Cpanel Block -->
	
	<!-- Preloading Screen -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div>
	<!-- End Preloading Screen -->
	
	
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/details.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:51:13 GMT -->
</html>