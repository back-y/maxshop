<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";
    }else{


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

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Products

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

                                <input name="product_title" type="text" class="form-control" required>
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Category </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <select name="product_cat"  class="form-control"><!-- form-control begin -->

                                    <option selected disabled> Select a Category Product </option>

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

                                    <option selected disabled> Select a Category </option>

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
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 2 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img2" type="file" class="form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 3 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img3" type="file" class="form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 4 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img4" type="file" class="form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 5 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_img5" type="file" class="form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Price </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_price" type="text" class="form-control" required>
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Keywords </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="product_keyword" type="text" class="form-control" required>
                                
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
                                    
                                        <textarea name="product_desc" id="descriptions" cols="30" rows="10" class="form-control"></textarea>

                                    </div><!-- tab-panel fade in active finish -->

                                    
                                    
                                </div><!-- tab-content finish -->


                                <!-- Tab contents end -->
                            
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                       

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                    </form><!-- form-horizontal finish -->

                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->

        </div><!-- col-lg-12 finish -->

    </div><!-- row finish -->


    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</head>

</body>
</html>

<?php

    if(isset($_POST['submit'])){

        $product_title = $_POST['product_title'];

        $product_cat = $_POST['product_cat'];

        $cat = $_POST['cat'];

        $product_price = $_POST['product_price'];

        $product_keywords = $_POST['product_keyword'];

        $product_desc = $_POST['product_desc'];


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

        $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,
        product_img2,product_img3,product_img4,product_img5,product_price,product_keywords,product_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title',
        '$product_img1','$product_img2','$product_img3','$product_img4','$product_img5','$product_price','$product_keywords',
        '$product_desc')";

            $run_product = mysqli_query($con,$insert_product);

            if($run_product){

                echo "<script>alert('Product has been inserted successfully')</script>";

                echo "<script>window.open('index.php?view_products','_self')</script>";

            }
    }

?>


<?php } ?>