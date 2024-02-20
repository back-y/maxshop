<?php

$db = mysqli_connect("localhost","root","","ecom_store");


function getRealIpUser(){
    switch(true){
        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_X_CLIENT_IP'])) : return $_SERVER['HTTP_X_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default : return $_SERVER['REMOTE_ADDR'];
    }
}


function add_cart(){
    global $db;

    if(isset($_GET['add_cart'])){

        $ip_add = getRealIpUser();

        $p_id = $_GET['add_cart'];

        $product_qty = $_POST['product_qty'];

        $product_size = $_POST['product_size'];

        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

        $run_check = mysqli_query($db,$check_product);

        if(mysqli_num_rows($run_check)>0){

            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }else{
            $query = "insert into cart (p_id,ip_add,qty,size) value ('$p_id','$ip_add','$product_qty','$product_size')";

            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

        }
    }
}




function getPro(){
    global $db;

    $get_products = "select * from products order by 1 LIMIT 0,9";

    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];

        echo "
        
           			
                            <div class='product-thumb transition product-item-container'>
                                <div class='left-block'>
                                    <div class='product-image-container'>
                                        <div class='image'>
                                            <span class='label label-sale'>Sale</span>
                                            <a class='lt-image' href='details.php?pro_id=$pro_id' target='_self'>
                                                <img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Juren tima chuk' />
                                                <img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Juren tima chuk'/>
                                            </a>
                                            <div class='item-time'>
                                                <div class='item-timer'>
                                                    <div class='defaultCountdown-30'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='right-block'>
                                    <div class='caption'>
                                        <div class='rating'>
                                        <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                        <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                        <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                        <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                        <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                        </div>
                                        <h4><a href='details.php?pro_id=$pro_id' target='_self' title='Juren tima chuk..'>$pro_title</a></h4>
                                        <p class='price'>
                                        <span class='price-new'>$$pro_price</span> <span class='price-old'>$122.00</span>
                                        </p>							
                                    </div>	
                                </div>
                                <!-- End right block -->
                            </div>
                            

        
        ";
    }

    
}

function getBestSallers(){
    global $db;

    $get_products = "select * from products order by 1 LIMIT 0,3";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];

        echo "
        
            <div class='item-wrap style1'>
                <div class='item-wrap-inner media'>
                    <div class='media-left'>
                        <div class='item-image'>
                            <div class='item-img-info'>
                            <a href='details.php?pro_id=$pro_id' class='lt-image' target='_self' title='Bikum masen dumas'>
                                <img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Apple Cinema 30&quot;'/>
                                <img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Apple Cinema 30&quot;'/>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class='media-body'>
                        <div class='item-info'>
                            <div class='rating'>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
                            </div>
                            <div class='item-title'>
                                <a href='details.php?pro_id=$pro_img1' target='_self' title='Bikum masen dumas'>
                                $pro_title
                                </a>
                            </div>
                            <!-- Begin item-content -->
                            <div class='item-content'>
                                <div class='content_price'>
                                    <span class='price product-price'>	$$pro_price	</span>
                                </div>
                            </div>
                            <!-- End item-content -->
                        </div>
                    </div><!-- End item-info -->
                </div>
            <!-- End item-wrap-inner -->
            </div>
        
        ";

    }
}

function getBestSallers1(){
    global $db;

    $get_products = "select * from products order by 1 LIMIT 3,3";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];

        echo "
        
            <div class='item-wrap style1'>
                <div class='item-wrap-inner media'>
                    <div class='media-left'>
                        <div class='item-image'>
                            <div class='item-img-info'>
                            <a href='details.php?pro_id=$pro_id' class='lt-image' target='_self' title='Bikum masen dumas'>
                                <img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Apple Cinema 30&quot;'/>
                                <img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Apple Cinema 30&quot;'/>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class='media-body'>
                        <div class='item-info'>
                            <div class='rating'>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
                            </div>
                            <div class='item-title'>
                                <a href='details.php?pro_id=$pro_id' target='_self' title='Bikum masen dumas'>
                                $pro_title
                                </a>
                            </div>
                            <!-- Begin item-content -->
                            <div class='item-content'>
                                <div class='content_price'>
                                    <span class='price product-price'>	$$pro_price	</span>
                                </div>
                            </div>
                            <!-- End item-content -->
                        </div>
                    </div><!-- End item-info -->
                </div>
            <!-- End item-wrap-inner -->
            </div>
        
        ";

    }
}


function getHotCategory(){
    
    global $db;

    $get_product_categories = "select * from product_categories";

    
    $run_product_categories = mysqli_query($db,$get_product_categories);

    while($row_product_categories = mysqli_fetch_array($run_product_categories)){
        $p_cat_id = $row_product_categories['p_cat_id'];
        $p_cat_title = $row_product_categories['p_cat_title'];


        echo "
        
            
        <a href='shop.php?p_cat_id=$p_cat_id' title='Tange manue' target='_self'>
        <i class='fa fa-caret-right'></i> $p_cat_title </a>

        ";
    }

}

function elcPro(){
    global $db;

    $get_products = "select * from products LIMIT 0,1";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];

        echo "
        
                    <div class='item-inner product-thumb product-item-container transition '>
                    <div class='left-block'>
                        <div class='product-image-container'>
                            <div class='image'>
                                <a class='lt-image' href='details.php?pro_id=$pro_id' target='_self' title='Verty nolen max..'>
                                    <img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Verty nolen laben'/>
                                    <img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Verty nolen laben'/>
                                </a>
                            </div>				
                        </div>
                        <span class='label label-new'>New</span>
                        <span class='label label-sale'>Sale</span>
                    </div>
                    <div class='right-block'>
                        <div class='caption'>
                            <div class='rating'>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
                            </div>					
                            <h4>
                                <a href='details.php?pro_id=$pro_id' title='Verty nolen max..' target='_self'>
                                $pro_title							</a>
                            </h4>				
                            <p class='price'>
                                <span class='price-new'>$$pro_price</span> <span class='price-old'>$69.00</span>

                            </p>
                        </div>
                    </div>
                </div>
                    
                    
        ";
    }
}


function elcPro1(){
    global $db;

    $get_products = "select * from products LIMIT 2,1";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];


        echo "
        

                                                        <div class='item-inner product-thumb product-item-container transition '>
															<div class='left-block'>
																<div class='product-image-container'>
																	<div class='image'>
																	   	<a class='lt-image' href='details.php?pro_id=$pro_id' target='_self' title='Verty nolen max..'>
																			<img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Verty nolen laben'/>
																			<img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Verty nolen laben'/>
																		</a>
																	</div>
															   						
																</div>
																<span class='label label-sale'>Sale</span>
															</div>
															<div class='right-block'>
																<div class='caption'>
																	<div class='rating'>
																		<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
																	</div>					
																	<h4>
																		<a href='details.php' title='Verty nolen max..' target='_self'>
                                                                        $pro_title							</a>
																	</h4>				
																	<p class='price'>
											  							<span class='price-new'>$$pro_price</span> <span class='price-old'>$169.00</span>

											  						</p>
																</div>
															</div>
														</div>
        
        ";
    }
}

function elcPro2(){
    global $db;

    $get_products = "select * from products LIMIT 3,1";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];


        echo "
        

                                                        <div class='item-inner product-thumb product-item-container transition '>
															<div class='left-block'>
																<div class='product-image-container'>
																	<div class='image'>
																	   	<a class='lt-image' href='details.php?pro_id=$pro_id' target='_self' title='Verty nolen max..'>
																			<img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Verty nolen laben'/>
																			<img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Verty nolen laben'/>
																		</a>
																	</div>
															   						
																</div>
																<span class='label label-sale'>Sale</span>
															</div>
															<div class='right-block'>
																<div class='caption'>
																	<div class='rating'>
																		<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
																	</div>					
																	<h4>
																		<a href='details.php' title='Verty nolen max..' target='_self'>
                                                                        $pro_title							</a>
																	</h4>				
																	<p class='price'>
											  							<span class='price-new'>$$pro_price</span> <span class='price-old'>$169.00</span>

											  						</p>
																</div>
															</div>
														</div>
        
        ";
    }
}

function elcPro3(){
    global $db;

    $get_products = "select * from products LIMIT 4,1";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];


        echo "
        

                                                        <div class='item-inner product-thumb product-item-container transition '>
															<div class='left-block'>
																<div class='product-image-container'>
																	<div class='image'>
																	   	<a class='lt-image' href='details.php?pro_id=$pro_id' target='_self' title='Verty nolen max..'>
																			<img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Verty nolen laben'/>
																			<img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Verty nolen laben'/>
																		</a>
																	</div>
															   						
																</div>
																<span class='label label-sale'>Sale</span>
															</div>
															<div class='right-block'>
																<div class='caption'>
																	<div class='rating'>
																		<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
																	</div>					
																	<h4>
																		<a href='details.php' title='Verty nolen max..' target='_self'>
                                                                        $pro_title							</a>
																	</h4>				
																	<p class='price'>
											  							<span class='price-new'>$$pro_price</span> <span class='price-old'>$169.00</span>

											  						</p>
																</div>
															</div>
														</div>
        
        ";
    }
}

function elcPro4(){
    global $db;

    $get_products = "select * from products LIMIT 5,1";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];


        echo "
        

                                                        <div class='item-inner product-thumb product-item-container transition '>
															<div class='left-block'>
																<div class='product-image-container'>
																	<div class='image'>
																	   	<a class='lt-image' href='details.php?pro_id=$pro_id' target='_self' title='Verty nolen max..'>
																			<img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Verty nolen laben'/>
																			<img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Verty nolen laben'/>
																		</a>
																	</div>
															   						
																</div>
																<span class='label label-sale'>Sale</span>
															</div>
															<div class='right-block'>
																<div class='caption'>
																	<div class='rating'>
																		<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
																	</div>					
																	<h4>
																		<a href='details.php' title='Verty nolen max..' target='_self'>
                                                                        $pro_title							</a>
																	</h4>				
																	<p class='price'>
											  							<span class='price-new'>$$pro_price</span> <span class='price-old'>$169.00</span>

											  						</p>
																</div>
															</div>
														</div>
        
        ";
    }
}

function elcPro5(){
    global $db;

    $get_products = "select * from products LIMIT 6,1";

    
    $run_products = mysqli_query($db,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_img2 = $row_products['product_img2'];


        echo "
        

                                                        <div class='item-inner product-thumb product-item-container transition '>
															<div class='left-block'>
																<div class='product-image-container'>
																	<div class='image'>
																	   	<a class='lt-image' href='details.php?pro_id=$pro_id' target='_self' title='Verty nolen max..'>
																			<img  class='lazyload img-1 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img1' alt='Apple Cinema 30' title='Verty nolen laben'/>
																			<img  class='lazyload img-2 img-responsive' data-sizes='auto' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src='admin_area/product_images/$pro_img2' alt='Apple Cinema 30' title='Verty nolen laben'/>
																		</a>
																	</div>
															   						
																</div>
																<span class='label label-sale'>Sale</span>
															</div>
															<div class='right-block'>
																<div class='caption'>
																	<div class='rating'>
																		<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star fa-stack-2x'></i></span>
																	  	<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-2x'></i></span>
																	</div>					
																	<h4>
																		<a href='details.php' title='Verty nolen max..' target='_self'>
                                                                        $pro_title							</a>
																	</h4>				
																	<p class='price'>
											  							<span class='price-new'>$$pro_price</span> <span class='price-old'>$169.00</span>

											  						</p>
																</div>
															</div>
														</div>
        
        ";
    }
}

function getPCats(){
    global $db;

    $get_p_cats = "select * from product_categories";

    $run_p_cats = mysqli_query($db,$get_p_cats);

    while($row_p_cats = mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "
        
            <li>
                <!--<input type='checkbox' name='category' id='category_1'>-->
                <label for='category_1'><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></label>
            </li>
        ";
    }
}

function getCats(){
    global $db;

    $get_cats = "select * from categories";

    $run_cats = mysqli_query($db,$get_cats);

    while($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
        
            <li>
                <!--<input type='checkbox' name='category' id='category_1'>-->
                <label for='category_1'><a href='shop.php?cat=$cat_id'> $cat_title</a></label>
            </li>
        ";
    }
}

function getpcatpro(){
    global $db;
    if(isset($_GET['p_cat'])){
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";

        $run_products = mysqli_query($db,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count == 0){
            echo "
            
                <div class='box'>
                    <h1> No Product Found In This Product Categories </h1>
                </div>
            
            ";
        }else{
            echo "
            
                <div class='box'>
                    <h1> $p_cat_title </h1>
                    <p> $p_cat_desc </p>
                </div>
            
            ";
        }

        while($row_products= mysqli_fetch_array($run_products)){

                
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
            $pro_img2 = $row_products['product_img2'];

            echo "
            
            <div class='product-layout  col-md-3 col-sm-6 col-xs-12'>
														<div class='product-item-container'>
															<div class='left-block'>

																<a href='details.php?pro_id=$pro_id'>
																	<div class='product-image-container lazy second_img '>
																		<img data-src='admin_area/product_images/$pro_img1' src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'  
																		alt='Apple Cinema 30&quot;' class='img-1 img-responsive' />

																		<img data-src='admin_area/product_images/$pro_img2' src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'  
																		alt='Apple Cinema 30&quot;' class='img-2 img-responsive' />
																	</div>
																</a>
																<!--Sale Label-->
																<span class='label label-sale'>Sale</span>
																<!--full quick view block-->
																
															</div>
															
															<div class='right-block'>
																<div class='caption'>
																	<h4><a href='details.php?pro_id=$pro_id'>$pro_title 30&quot;</a></h4>		
																	<div class='ratings'>
																		<div class='rating-box'>
																			<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
																			<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
																			<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
																			<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
																			<span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i></span>
																		</div>
																	</div>
																						
																	<div class='price'>
																		<span class='price-new'>$pro_price</span> 
																		<span class='price-old'>$122.00</span>		 
																		<span class='label label-percent'>-40%</span>    
																	</div>
																	<div class='description item-desc hidden'>
																		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
																	</div>
																</div>
															</div><!-- right block -->
															<div class='button-group'>
																<button class='wishlist btn-button' type='button' data-toggle='tooltip' title='Add to Wish List' onclick='wishlist.add('42');'><i class='fa fa-heart'></i></button>
																<button class='addToCart' type='button' data-toggle='tooltip' title='Add to Cart' onclick='cart.add('42', '1');'><i class='fa fa-shopping-cart'></i> <span class='hidden-xs name-cart'>Add to Cart</span></button>
																<button class='compare' type='button' data-toggle='tooltip' title='Compare this Product' onclick='compare.add('42');'><i class='fa fa-exchange'></i></button>
																<a class='quickview iframe-link visible-lg btn-button' data-toggle='tooltip' title='' data-fancybox-type='iframe' href='quickview.html' data-original-title='Quickview'> <i class='fa fa-search'></i> </a>
															</div>
														</div>
													</div>
            
            ";

        }
    }    
}

function getcatpro(){

    global $db;

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];

        $get_cat = "select * from categories where cat_id = '$cat_id'";

        $run_cat = mysqli_query($db,$get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['cat_title'];

        $cat_desc = $row_cat['cat_desc'];

        $get_cat = "select * from products where cat_id='$cat_id' LIMIT 0,8";

        $run_products = mysqli_query($db,$get_cat);

        $count = mysqli_num_rows($run_products);

        if($count == 0){

            echo "
            
            <div class='box'>
            <h1> No Product Found In This Product Categories </h1>
        </div>
            
            ";
        }else{

            echo "
            
            <div class='box'>
            <h1> $cat_title </h1>

            <p> $cat_desc </p>
        </div>
            
            ";
        }

        while($row_products = mysqli_fetch_array($run_products)){

            
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
            $pro_img2 = $row_products['product_img2'];

            echo "
            
            <div class='product-layout  col-md-3 col-sm-6 col-xs-12'>
            <div class='product-item-container'>
                <div class='left-block'>

                    <a href='details.php?pro_id=$pro_id'>
                        <div class='product-image-container lazy second_img '>
                            <img data-src='admin_area/product_images/$pro_img1' src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'  
                            alt='Apple Cinema 30&quot;' class='img-1 img-responsive' />

                            <img data-src='admin_area/product_images/$pro_img2' src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'  
                            alt='Apple Cinema 30&quot;' class='img-2 img-responsive' />
                        </div>
                    </a>
                    <!--Sale Label-->
                    <span class='label label-sale'>Sale</span>
                    <!--full quick view block-->
                    
                </div>
                
                <div class='right-block'>
                    <div class='caption'>
                        <h4><a href='details.php?pro_id=$pro_id'>$pro_title 30&quot;</a></h4>		
                        <div class='ratings'>
                            <div class='rating-box'>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span>
                                <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i></span>
                            </div>
                        </div>
                                            
                        <div class='price'>
                            <span class='price-new'>$pro_price</span> 
                            <span class='price-old'>$122.00</span>		 
                            <span class='label label-percent'>-40%</span>    
                        </div>
                        <div class='description item-desc hidden'>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                        </div>
                    </div>
                </div><!-- right block -->
                <div class='button-group'>
                    <button class='wishlist btn-button' type='button' data-toggle='tooltip' title='Add to Wish List' onclick='wishlist.add('42');'><i class='fa fa-heart'></i></button>
                    <button class='addToCart' type='button' data-toggle='tooltip' title='Add to Cart' onclick='cart.add('42', '1');'><i class='fa fa-shopping-cart'></i> <span class='hidden-xs name-cart'>Add to Cart</span></button>
                    <button class='compare' type='button' data-toggle='tooltip' title='Compare this Product' onclick='compare.add('42');'><i class='fa fa-exchange'></i></button>
                    <a class='quickview iframe-link visible-lg btn-button' data-toggle='tooltip' title='' data-fancybox-type='iframe' href='quickview.html' data-original-title='Quickview'> <i class='fa fa-search'></i> </a>
                </div>
            </div>
        </div>
            
            ";
        }
    }
}


function items(){

    global $db;

    $ip_add = getRealIpUser();

    $get_items = "select * from cart where ip_add='$ip_add'";

    $run_items = mysqli_query($db,$get_items);

    $count_items = mysqli_num_rows($run_items);

    echo $count_items;
}


function total_price(){

    global $db;

    $ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from cart where ip_add='$ip_add'";

    $run_cart = mysqli_query($db,$select_cart);

    while($record = mysqli_fetch_array($run_cart)){

        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];

        $get_price = "select * from products where product_id='$pro_id'";

        $run_price = mysqli_query($db,$get_price);

        while($row_price = mysqli_fetch_array($run_price)){

            $sub_total = $row_price['product_price'] * $pro_qty;

            $total += $sub_total;
        }
    }
    echo "$" . $total; 
}

?>