<?php


    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";
    }else{

?>


<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Insert Category

            </li>
        </ol><!-- breadcrumb begin -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->



<div class="row"><!-- row begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->

                    <i class="fa fa-money fa-fw"></i> Insert Category

                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!--form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                            Category Title 
                            
                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <input name="cat_title" type="text" class="form-control">

                        </div><!-- col-md-6 begin -->

                    </div><!--form-group finish -->

                   
                   

                    <div class="form-group"><!--form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                              
                            
                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <input value="Submit Category" name="submit" type="submit" class="form-control btn btn-primary">

                        </div><!-- col-md-6 begin -->

                    </div><!--form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row finish -->


<?php

        if(isset($_POST['submit'])){

            $cat_title = $_POST['cat_title'];

            $insert_cat = "insert into categories (cat_title) values ('$cat_title')";

            $run_cat = mysqli_query($con,$insert_cat);

            if($run_cat){

                echo "<script>alert('Your New Categories Has Been Inserted')</script>";

                echo "<script>window.open('index.php?view_cats','_self')</script>";
            }

        }

?>


<?php } ?>