<?php 

	session_start();
	include("includes/db.php");
	include("functions/functions.php"); 

?>

<?php

    if(isset($_GET['c_id'])){

        $customer_id = $_GET['c_id'];
        
    }
    $ip_add = getRealIpUser();

    $status = "Pending";

    $invoice_no = mt_rand();

    $select_cart = "select * from cart where ip_add='$ip_add'";

    $run_cart = mysqli_query($con,$select_cart);

    while($row_cart = mysqli_fetch_array($run_cart)){

        $pro_id = $row_cart['p_id'];
        $pro_qty = $row_cart['qty'];
        $pro_size = $row_cart['size'];

        $get_products = "select * from products where product_id='$pro_id'";

        $run_products = mysqli_query($con,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $sub_total = $row_products['product_price'] * $pro_qty;

            $insert_customer_orders = "insert into customer_orders (
                customer_id,due_amount,invoice_no,qty,size,order_date,order_status) 
                value ('$customer_id','$sub_total','$invoice_no','$pro_qty','$pro_size',NOW(),'$status')";

            $run_customer_order = mysqli_query($con,$insert_customer_orders);

            $insert_pending_orders = "insert into pending_orders (
                customer_id,invoice_no,product_id,qty,size,order_status) 
                value ('$customer_id','$invoice_no','$pro_id','$pro_qty','$pro_size','$status')";

            $run_pending_orders = mysqli_query($con,$insert_pending_orders);
            
            $delete_cart = "delete from cart where ip_add='$ip_add'";

            $run_delete = mysqli_query($con,$delete_cart);

            echo "<script>alert('Your order has been submitted, Thanks')</script>";

            echo "<script>window.open('customer/my-account.php?my_orders','_self')</script>";
        }
    }

?>