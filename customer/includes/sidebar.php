<aside class="col-sm-12 col-xs-12 col-md-3 col-lg-3" id="column-right">
	<div class="panel panel-default sidebar-menu">
		<div class="panel-heading">
			<?php
			
				$customer_session = $_SESSION['customer_email'];

				$get_customer = "select * from customers where customer_email='$customer_session'";

				$run_customer = mysqli_query($con,$get_customer);

				$row_customer = mysqli_fetch_array($run_customer);

				$customer_image = $row_customer['customer_image'];

				$customer_name = $row_customer['customer_name'];

				if(!isset($_SESSION['customer_email'])){

				}else{
					echo "
					
						<center>

							<img src='image/customer_images/$customer_image' alt='img' class='img-responsive'>

						</center>
						<br>

						<h3 align='center' class='panel-title'>
							 Name: $customer_name
						</h3>
					
					";
				}

			?>
		</div>

		<div class="panel-body">
			<ul class="nav-pills nav-stacked nav">
			<li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
					<a href="my-account.php?my_orders">
						<i class="fa fa-list"></i> My Orders
					</a>
				</li>

				<li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?>">
					<a href="my-account.php?pay_offline">
						<i class="fa fa-bolt"></i> Pay Offline
					</a>
				</li>

				<li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
					<a href="my-account.php?edit_account">
						<i class="fa fa-pencil"></i> Edite Account
					</a>
				</li>

				<li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
					<a href="my-account.php?change_pass">
						<i class="fa fa-user"></i> Change Password
					</a>
				</li>

				<li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
					<a href="my-account.php?delete_account">
						<i class="fa fa-trash-o"></i> Delete Account
					</a>
				</li>

				<li>
					<a href="logout.php">
						<i class="fa fa-sign-out"></i> Log Out
					</a>
				</li>
			</ul>
		</div>

	</div>
					
</aside>