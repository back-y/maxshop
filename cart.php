
<?php 
  $active = 'Cart';
	include("includes/blog_header.php");

?>


<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <form action="cart.php" method="post" enctype="multipart/form-data">
              <h2 class="title">Shopping Cart</h2>


                <div class="table-responsive form-group">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Size</td>
                        <td colspan="1" class="text-right">Delete</td>
                        <td colspan="2" class="text-right">Sub-Total</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $ip_add = getRealIpUser();

                        $select_cart = "select * from cart where ip_add='$ip_add'";

                        $run_cart = mysqli_query($con,$select_cart);

                        $count = mysqli_num_rows($run_cart);
                      
                        $total = 0;

                        while($row_cart = mysqli_fetch_array($run_cart)){

                          $pro_id = $row_cart['p_id'];
                          $pro_size = $row_cart['size'];
                          $pro_qty = $row_cart['qty'];

                          $get_products = "select * from products where product_id='$pro_id'";

                          $run_products = mysqli_query($con,$get_products);

                          while($row_products = mysqli_fetch_array($run_products)){

                            $product_title = $row_products['product_title'];
                            $product_img1 = $row_products['product_img1'];
                            $only_price = $row_products['product_price'];

                            $sub_total = $pro_qty*$only_price;

                            $total += $sub_total;

                            $tax = $total - $total + 4;

                            $vat = 20 * $total / 100;

                            $alltotal = $total - $tax - $vat;

                          
                       

                      ?>
                      <tr>
                        <td class="text-center"><a href="details.php"><img width="70px" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>
                        <td class="text-left"><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a><br />
                        <td class="text-left" width="200px"><?php echo $pro_qty; ?></td>
                        <td class="text-right">$<?php echo $only_price; ?></td>
                        <td class="text-right"><?php echo $pro_size; ?></td>
                        <td class="text-right"><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                        <td class="text-right">$<?php echo $sub_total; ?></td>
                      </tr>
                      <?php

                          }
                        }

                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="text-left" colspan="5">Total</th>
                        <th class="text-right" colspan="2">$<?php echo $total; ?></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                  <div class="pull-left">
                    <button type="submit" name="update" value="Update Cart"  title="Update" class="btn btn-primary">Update Cart</button>
                  </div>
            </form>
            <?php 
        
        function update_cart(){

          global $con;

          if(isset($_POST['update'])){

              foreach($_POST['remove'] as $remove_id ){

                  $delete_product = "delete from cart where p_id='$remove_id'";

                  $run_delete = mysqli_query($con,$delete_product);

                  if($run_delete){

                      echo "<script>window.open('cart.php','_self')</script>";

                  }

              }

          }

      }
      echo @$up_cart  = update_cart();
        
        ?>
          
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tr>
                  <td class="text-right"><strong>All Sub-Total:</strong></td>
                  <td class="text-right">$<?php if($count>0) echo $total; ?></td>
                </tr>
                <tr>
                  <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                  <td class="text-right">$<?php if($count>0) echo  $tax; ?></td>
                </tr>
                <tr>
                  <td class="text-right"><strong>VAT (20%):</strong></td>
                  <td class="text-right">$<?php if($count>0) echo  $vat; ?></td>
                </tr>
                <tr>
                  <td class="text-right"><strong>Total:</strong></td>
                  <td class="text-right">$<?php if($count>0) echo  $alltotal; ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-left"><a href="index.php" class="btn btn-default">Continue Shopping</a></div>
            
            <div class="pull-right"><a href="checkout.php" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>

        
        <!--Middle Part End -->
			
		</div>
	</div>
	<!-- //Main Container -->
	<!-- Footer Container -->
	
	<?php 
	
		include("includes/footer.php");
	
	?>

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

<!-- Mirrored from demo.smartaddons.com/templates/html/maxshop/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Aug 2022 12:49:49 GMT -->
</html>