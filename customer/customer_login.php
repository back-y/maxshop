            <div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
                    <div class="text-center">
                        
				  <h1>Login</h1>
				  <p class="lead">Already have an account?</p>
                    </div>
				  <div class="row">
					<div class="col-sm-12">
					  <div>
						  <div class="panel-body">
								<form method="post" action="checkout.php">
								  <div class="form-group required">
									<label> Email </label>
									<input type="text" class="form-control" placeholder="email"  name="email">
								  </div>
								  <div class="form-group required">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Last Name"  name="password">
								  </div>
                                  <div class="text-center">
                                    <button name="login" value="Login" class="btn btn-primary">
                                        <i class="fa fa-sign-in"></i> Login
                                    </button>
                                  </div>
                                </form>
                                <center>
                                    <a href="customer_register.php">
                                        <h3> Don't have account? Register here </h3>
                                    </a>
                                </center>
							  </div>
					  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<!--Middle Part End -->
			</div>
<?php

    if(isset($_POST['login'])){
        $customer_email = $_POST['email'];
        $customer_pass = $_POST['password'];

        $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

        $run_customer = mysqli_query($con,$select_customer);

        $get_ip = getRealIpUser();

        $check_customer = mysqli_num_rows($run_customer);

        $select_cart = "select * from cart where ip_add='$get_ip'";

        $run_cart = mysqli_query($con,$select_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if($check_customer == 0){
            echo "<script>alert('Your email or password is wrong')</script>";
            exit();
        }
        if($check_customer == 1 AND $check_cart == 0){

            $_SESSION['customer_email'] = $customer_email;
            echo "<script>alert('You are Logged in')</script>";
            echo "<script>window.open('customer/my-account.php?my_orders','_self')</script>";

        }else{
            

            $_SESSION['customer_email'] = $customer_email;
            echo "<script>alert('You are Logged in')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
    }

?>