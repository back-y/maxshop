
<?php 
	$active = 'Shop';
	include("includes/shop_header.php");

?>


		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Shop</a></li>
			</ul>
			<div class="row">

				<?php
				
					include("includes/sidebar.php");

				?>

				<!--Middle Part Start-->
				<div id="content" class="col-md-9 col-sm-8">
					<div class="products-category">
						<div class="category-derc form-group">
							<div class="row">
								<div class="col-sm-12">
									<?php
									if(!isset($_GET['p_cat'])){
										if(!isset($_GET['cat'])){
											echo "
												
										<p><img src='admin_area/category/electronic-cat.png' alt='Apple Cinema 30&quot;'><br></p>
										<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. 
										In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. 
										Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. 
										Donec sagittis euismod purus. Sed ut perspiciatis sit voluptatem accusantim doloremque laudantim.</p>
											
											";
										}
									}
									?>
								</div>
							</div>
						</div>
						<!--- Subcategories - -->
						
						<!--changed listings-->
						<div class="products-list row list">
<?php 
							
									if(!isset($_GET['p_cat'])){
										if(!isset($_GET['cat'])){
											$per_page = 8;
											if(isset($_GET['page'])){
												$page = $_GET['page'];
											}else{
												$page = 1;
												
											}

												$start_from = ($page-1) * $per_page;
												$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
												$run_products = mysqli_query($con,$get_products);
												while($row_products = mysqli_fetch_array($run_products)){
													$pro_id = $row_products['product_id'];
													$pro_title = $row_products['product_title'];
													$pro_price = $row_products['product_price'];
													$pro_img1 = $row_products['product_img1'];
													$pro_img2 = $row_products['product_img2'];

													echo "
													
														
														<div class='product-layout  col-md-3 col-sm-6 col-xs-12'>
														<div class='product-item-container'>
															<div class='left-block'>

																<a href='details.php?pro_id=$pro_id'>
																	<div class='product-image-container lazy second_img '>
																		<img data-src='admin_area/product_images/$pro_img1' src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'  
																		alt='Apple Cinema 30&quot;' class='img-1 img-responsive' />

																		<img data-src='admin_area/product_images/$pro_img2' src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'  
																		alt='Apple Cinema 30&quot;' class='img-2 img-responsive' />
																	</div>
																</a>
																<!--Sale Label-->
																<span class='label label-sale'>Sale</span>
																<!--full quick view block-->
																
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
																			<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i></span>
																		</div>
																	</div>
																						
																	<div class='price'>
																		<span class='price-new'>$pro_price</span> 
																		<span class='price-old'>$122.00</span>		 
																		<span class='label label-percent'>-40%</span>    
																	</div>
																	<div class='description item-desc hidden'>
																		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
																	</div>
																</div>
															</div><!-- right block -->
														</div>
													</div>

													";
												}
                                        
							
							?>
						</div>					
						<!--// End Changed listings-->
						<!-- Filters -->
						<div class="product-filter product-filter-bottom filters-panel" >
							<div class="row">
								<div>
									<center>
										<ul class="pagination">
											<?php

												$query = "select * from products";

												$result = mysqli_query($con,$query);

												$total_records = mysqli_num_rows($result);

												$total_pages = ceil($total_records / $per_page);

												echo "
												
													<li>

														<a href='shop.php?page=1'> ".'First Page'."</a>

													</li>
												
												";
												for($i=1; $i<=$total_pages; $i++){

													echo "
													
														<li>

															<a href='shop.php?page=".$i."'> ".$i."</a>

														</li>
													
													";

												};

												echo "
												
													<li>

														<a href='shop.php?page=$total_pages'> ".'Last Page'."</a>

													</li>
												
												";
													}
												}
											?>
										</ul>
									</center>
										<?php 
											getpcatpro(); 

											getcatpro();
											
										?>
								</div>
										
							 </div>
						</div>
						<!-- //end Filters -->
					</div>
				</div>
				<!--Middle Part End-->			
			</div>	
		</div>
		<!-- //Main Container -->
			<!-- Footer Container -->
		<?php
		
			include("includes/footer.php");

		?>
	
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
	
	

	<script type="text/javascript" src="js/themejs/cpanel.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>	
	<script>
		$(function(){

$.fn.extend({
	
	filterTable: function(){

		return this.each(function(){

			$(this).on('keyup',function(){

				var $this = $(this),
				search = $this.val().toLowerCase(),
				target = $this.attr('data-filters'),
				handle = $(target),
				rows = handle.find('li a');

				if(search == ''){

					rows.show();

				}else{

					rows.each(function(){


						var $this = $(this);

						$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : 
						$this.show();

					});

				}

			});

		});

	}

});

$('[data-action="filter"][id="dev-table-filter"]').filterTable();

});

// Finnish Search Filters | by latter //
	</script>
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:51:09 GMT -->
</html>