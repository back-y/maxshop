
<?php 
	
	$active = 'Account';
	include("includes/blog_header.php"); 

?>


		<!-- //Header Container  -->	
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Login</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-login">
					
						<div class="account-border">
							<div class="row">
								<div class="col-sm-6 new-customer">
									<div class="well">
										<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
										<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
									</div>
									<div class="bottom-form">
										<a href="#" class="btn btn-default pull-right">Continue</a>
									</div>
								</div>
								
								<form action="#" method="post" enctype="multipart/form-data">
									<div class="col-sm-6 customer-login">
										<div class="well">
											<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
											<p><strong>I am a returning customer</strong></p>
											<div class="form-group">
												<label class="control-label " for="input-email">E-Mail Address</label>
												<input type="text" name="email" value="" id="input-email" class="form-control" />
											</div>
											<div class="form-group">
												<label class="control-label " for="input-password">Password</label>
												<input type="password" name="password" value="" id="input-password" class="form-control" />
											</div>
										</div>
										<div class="bottom-form">
											<a href="#" class="forgot">Forgotten Password</a>
											<input type="submit" value="Login" class="btn btn-default pull-right" />
										</div>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- //Main Container -->
			<!-- Footer Container -->
		<?php include("includes/footer.php"); ?>
		<!-- //end Footer Container -->
    </div>
	
	
	
<!-- Preloading Screen -->
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
 </div>
<!-- End Preloading Screen -->
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
	
	
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>
	
	
	
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:49:47 GMT -->
</html>