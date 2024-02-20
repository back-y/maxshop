<?php 
	$active = 'Contact';
	include("includes/blog_header.php");

?>


		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Page</a></li>
				<li><a href="#">Contact us</a></li>			
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					
					
					
					<div class="info-contact clearfix">
						
						<div class="col-lg-12 col-sm-12 col-xs-12 contact-form">
							<form method="post" enctype="multipart/form-data" class="form-horizontal">
								<fieldset>
									<legend>Contact Form</legend>
									<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-name">Your Name</label>
								<div class="col-sm-10">
									<input type="text" name="name" value="" id="input-name" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
									<div class="col-sm-10">
										<input type="text" name="email" value="" id="input-email" class="form-control">
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
										<div class="col-sm-10">
											<textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
										</div>
									</div>
								</fieldset>
								<div class="buttons">
									<div class="pull-right">
										<button class="btn btn-default buttonGray" type="submit" name="submit">
											<span>Submit</span>
										</button>
									</div>
								</div>
							</form>
							<?php 
							
								if(isset($_POST['submit'])){
									$sender_name = $_POST['name'];
									$sender_email = $_POST['email'];
									$sender_enquiry = $_POST['enquiry'];

									$receiver_email = "bereketgezha99@gmail.com";

									mail($receiver_email,$sender_name,$sender_email,$sender_enquiry);

									$email = $_POST['email'];
									
									$msg = "Welcome to Our Website, Thanks for Sending Us Massage. ASAP we will reply your mssage";

									$from = "bereketgezha99@gmail.com";

									mail($email,$msg,$from);

									echo "<script>alert('Your Massage has sent successfully!')</script>";


								}

							?>
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

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:51:19 GMT -->
</html>