<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";
    }else{


?>

<?php 

    if(isset($_GET['edit_product'])){

        $edit_id = $_GET['edit_product'];

        $get_p = "select * from products where product_id='$edit_id'";

        $run_edit = mysqli_query($con,$get_p);

        $row_edit = mysqli_fetch_array($run_edit);

        $p_id = $row_edit['product_id'];

        $p_title = $row_edit['product_title'];

        $p_cat = $row_edit['p_cat_id'];

        $cat = $row_edit['cat_id'];

        $p_image1 = $row_edit['product_img1'];

        $p_image2 = $row_edit['product_img2'];

        $p_image3 = $row_edit['product_img3'];

        $p_image4 = $row_edit['product_img4'];

        $p_image5 = $row_edit['product_img5'];

        $p_price = $row_edit['product_price'];

        $p_keywords = $row_edit['product_keywords'];

        $p_desc = $row_edit['product_desc'];
        
    }


        	$get_p_cat = "select * from product_categories where p_cat_id='$p_cat'";

            $run_p_cat = mysqli_query($con,$get_p_cat);

            $row_p_cat = mysqli_fetch_array($run_p_cat);

            $p_cat_title = $row_p_cat['p_cat_title'];

        	$get_cat = "select * from categories where cat_id='$cat'";

            $run_cat = mysqli_query($con,$get_cat);

            $row_cat = mysqli_fetch_array($run_cat);

            $cat_title = $row_cat['cat_title'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert Products </title>
<body>


    <div class="row"><!-- row begin -->

        <div class="col-lg-12"><!-- col-lg-12 begin -->

            <ol class="breadcrumb"><!-- breadcrumb begin -->

                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Edit Products

                </li><!-- active finish -->

            </ol><!-- breadcrumb finish -->

        </div><!-- col-lg-12 finish -->

    </div><!-- row finish -->

    <div class="row"><!-- row begin -->

        <div class="col-lg-12"><!-- col-lg-12 begin -->

            <div class="panel panel-default"><!-- panel panel-default begin -->

                <div class="panel-heading"><!-- panel-heading begin -->

                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-money fa-fw"></i> Insert Product

                    </h3><!-- panel-title finish -->

                </div><!-- panel-heading finish -->
                
                <div class="panel-body"><!-- panel-body begin -->

                    <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal begin -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Title </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                       

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Category </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <select name="product_cat"  class="form-control"><!-- form-control begin -->
                                

                                    <option disabled value="Select Product Category">Select Product Category</option>

                                    <option value="<?php echo $p_cat; ?>"> <?php echo $p_cat_title; ?> </option>

                                    <?php

                                        $get_p_cats = "select * from product_categories";
                                        $run_p_cats = mysqli_query($con,$get_p_cats);

                                        while($row_p_cats = mysqli_fetch_array($run_p_cats)){

                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                            echo "

                                                <option value='$p_cat_id'> $p_cat_title </option>

                                            ";

                                        }

                                    
                                    ?>


                                </select><!-- form-control finish -->
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Category </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <select name="cat"  class="form-control"><!-- form-control begin -->

                                    <option disabled value="Select Category">Select Category</option>

                                    <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>

                                    <?php

                                        $get_cat = "select * from categories";
                                        $run_cat = mysqli_query($con,$get_cat);

                                        while($row_cat = mysqli_fetch_array($run_cat)){

                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];

                                            echo "

                                                <option value='$cat_id'> $cat_title </option>

                                            ";

                                        }

                                    
                                    ?>


                                </select><!-- form-control finish -->
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 1 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img1" type="file" class="form-control" required>
                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 2 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img2" type="file" class="form-control">
                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 3 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img3" type="file" class="form-control">
                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 4 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img4" type="file" class="form-control">
                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $p_image4; ?>" alt="<?php echo $p_image4; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 5 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img5" type="file" class="form-control">
                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $p_image5; ?>" alt="<?php echo $p_image5; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Price </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_price" type="text" class="form-control" required value="<?php echo $p_price; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Keywords </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_keyword" type="text" class="form-control" required value="<?php echo $p_keywords; ?>">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Descriptions </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->
                            
                                <ul class="nav nav-tabs">

                                    <li class="active">
                                        <a data-toggle="tab" href="#descriptions" class="tab_link">

                                            Product Descriptions

                                        </a>
                                    </li>


                                </ul>

                                


                                <!-- Tab contents start -->

                                <div class="tab-content"> <!-- tab-content begin -->

                                    <div class="tab-pane fade in active" id="descriptions"><!-- tab-panel fade in active begin -->
                                    
                                        <textarea name="product_desc" id="desc_editor" cols="30" rows="10" class="form-control">

                                            <?php echo $p_desc; ?>

                                        </textarea>

                                    </div><!-- tab-panel fade in active finish -->
                                    
                                </div><!-- tab-content finish -->


                                <!-- Tab contents end -->
                            
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                    </form><!-- form-horizontal finish -->

                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->

        </div><!-- col-lg-12 finish -->

    </div><!-- row finish -->


    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#desc_editor, #features_editor'});</script>
</head>

</body>
</html>

<?php

if(isset($_POST['update'])){

    $product_title = $_POST['product_title'];

    $product_cat = $_POST['product_cat'];

    $cat = $_POST['cat'];

    $product_price = $_POST['product_price'];

    $product_keywords = $_POST['product_keyword'];

    $product_desc = $_POST['product_desc'];


        // work for upload / update image


        $product_img1 = $_FILES['product_img1']['name'];

        $product_img2 = $_FILES['product_img2']['name'];

        $product_img3 = $_FILES['product_img3']['name'];

        $product_img4 = $_FILES['product_img4']['name'];

        $product_img5 = $_FILES['product_img5']['name'];


        $temp_name1 = $_FILES['product_img1']['tmp_name'];

        $temp_name2 = $_FILES['product_img2']['tmp_name'];

        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        $temp_name4 = $_FILES['product_img4']['tmp_name'];

        $temp_name5 = $_FILES['product_img5']['tmp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");

        move_uploaded_file($temp_name2,"product_images/$product_img2");
        
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        move_uploaded_file($temp_name4,"product_images/$product_img4");
        
        move_uploaded_file($temp_name5,"product_images/$product_img5");

        $update_product = "update products set p_cat_id='$product_cat',cat_id='$cat',
        date=NOW(),product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',
        product_img3='$product_img3',product_img4='$product_img4',product_img5='$product_img5',product_price='$product_price'
        ,product_keywords='$product_keywords',product_desc='$product_desc' where product_id='$p_id'";

        $run_product = mysqli_query($con,$update_product);

        if($run_product){

            echo "<script>alert('Your product has been updated Successfully')</script>";

            echo "<script>window.open('index.php?view_products','_self')</script>";

        }

    else{

        // work when no upload image
        

        $update_product = "update products set p_cat_id='$product_cat',cat_id='$cat',
        date=NOW(),product_title='$product_title',product_price='$product_price'
        ,product_keywords='$product_keywords',
        product_desc='$product_desc' where product_id='$p_id'";

        $run_product = mysqli_query($con,$update_product);

        if($run_product){

            echo "<script>alert('Your product has been updated Successfully')</script>";

            echo "<script>window.open('index.php?view_products','_self')</script>";

        }
    }
}

?>


<?php } ?>