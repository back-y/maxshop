

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
				<li><a href="#">Register</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<h2 class="title">Register Account</h2>
					<p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
					<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
						<fieldset id="account">
							<legend>Your Personal Details</legend>
							<div class="form-group required" style="display: none;">
								<label class="col-sm-2 control-label">Customer Group</label>
								<div class="col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
										</label>
									</div>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Your Name</label>
								<div class="col-sm-10">
									<input type="text" name="name" value="" placeholder="Name" id="input-lastname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
								<div class="col-sm-10">
									<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-password">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Your Country</label>
								<div class="col-sm-10">
									<input type="text" name="country" value="" placeholder="Country" id="input-lastname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Your City</label>
								<div class="col-sm-10">
									<input type="text" name="city" value="" placeholder="City" id="input-lastname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">Contact</label>
								<div class="col-sm-10">
									<input type="tel" name="contact" value="" placeholder="Contact" id="input-telephone" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Your Address</label>
								<div class="col-sm-10">
									<input type="text" name="address" value="" placeholder="Address" id="input-lastname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Your Profile Picture</label>
								<div class="col-sm-10">
									<input type="file" name="image" value=""  id="input-lastname" class="form-control">
								</div>
							</div>
						<div class="buttons">
							<div class="pull-right">
								<input type="submit" name="register" value="Register" class="btn btn-primary">
							</div>
						</div>
						</fieldset>
					</form>
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

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:49:47 GMT -->
</html>


<?php 

	if(isset($_POST['register'])){
		$c_name = $_POST['name'];
		$c_email = $_POST['email'];
		$c_password = $_POST['password'];
		$c_country = $_POST['country'];
		$c_city = $_POST['city'];
		$c_contact = $_POST['contact'];
		$c_address = $_POST['address'];
		$c_image = $_FILES['image']['name'];
		$c_image_tmp = $_FILES['image']['tmp_name'];

		$c_ip = getRealIpUser();

		move_uploaded_file($c_image_tmp,"customer/image/customer_images/$c_image");

		$insert_customer = "insert into customers (customer_name,customer_email,
		customer_pass,customer_country,customer_city,customer_contact,customer_address,
		customer_image,customer_ip) value ('$c_name','$c_email','$c_password','$c_country','$c_city',
		'$c_contact','$c_address','$c_image','$c_ip')";

		$run_customer = mysqli_query($con,$insert_customer);

		$sel_cart = "select * from cart where ip_add='$c_ip'";

		$run_cart = mysqli_query($con,$sel_cart);

		$check_cart = mysqli_num_rows($run_cart);

		if($check_cart>0){
			$_SESSION['customer_email'] = $c_email;

			echo "<script>alert('You have been Registered successfully')</script>";
			echo "<script>window.open('checkout.php','_self')</script>";
		}else{
			
			$_SESSION['customer_email'] = $c_email;
			echo "<script>alert('You have been Registered successfully')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}

?>