
   <?php

include"db/db.php";

if (isset($_SESSION["uid"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		//$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
 	$query = mysqli_query($con,$sql);
 	$row = mysqli_fetch_array($query);
	 $row["count_item"];
	//exit();
}

   ?>
    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
               <div class="container" >

                    <div class="row align-items-center" >
                        <div class="col-lg-4 col-md-5" >
                             <div class="header_account text-right" >
                                <ul>
                                    <li class="language"><a href="#"  data-toggle="dropdown"><span class=" glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?><i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_language">
                                        
                                         <!-------
                        <li ><a href="Customer_cart.php" ><b><span class="glyphicon glyphicon-shopping-cart"><b>Cart</b></span></b></a></li>
                        <li class="divider"></li>
                        
                        ------------>
                        
						<li><a href="customer_order_view.php" ><b>Orders Track Process </b></a></li>
						<li class="divider"></li>
                        <li><a href="Customer_pass_change.php" ><b>Profile Update</b></a></li>
						<li class="divider"></li>
                        <li><a href="logout.php" ><b>Logout</b></a></li>


                                        </ul>
                                    </li>
                                    <!--
                                    <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li><a href="#">GBP – British Pound</a></li>
                                            <li><a href="#">INR – India Rupee</a></li>
                                        </ul>
                                    </li>
                                    --->

                                </ul>
                            </div> 
                        </div>
                        
                        <!--
                        <div class="col-lg-8 col-md-7">
                            <div class="header_top_links text-right">


                            <div class="header_account">
                                <ul>
                                    <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> english <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Germany</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li><a href="#">GBP – British Pound</a></li>
                                            <li><a href="#">INR – India Rupee</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> 

                          
                              
                            </div>   
                        </div>
                        --->
                    </div>
                    
                </div>
            </div>
            <!--header top start-->

           <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="logo">
                                <a href="index.php" style="color: white; font-size: 3em; font-weight: bold;">Auto Spare Parts</a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-6 col-6">
                            <div class="header_right_box">
                                <div class="search_container">
                                    <form action="#">
                                
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button> 
                                        </div>
                                    </form>
                                </div>
    
                                <div class="header_configure_area">
                                    <div class="header_wishlist">
                                        <a href="wishlist_profile.php"><i class="icon-heart"></i>
                                        <!--
                                            <span class="wishlist_count">3</span>
-->

                                        </a>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)">
                                            <i class="icon-shopping-bag2"></i>
                                            <?php 
    
    $id_c = $_SESSION["uid"];
     $a=0;
    $ct_p=0;
$data = "SELECT * FROM orders where user_id = '$id_c' and payment_status='cash_on_delivery' and order_status='process_order' or order_status='complete'  ";
             $view = mysqli_query($con,$data);
             while($_view = mysqli_fetch_assoc($view))
             {		
                 $id_c_pro = $_view['product_id'];
                 $id_c_user = $_view['user_id'];
                 $id_c_pro_qty = $_view['qty'];
                if(!empty($id_c_pro))
                {
                    $data2 = "SELECT * FROM products where product_id = '$id_c_pro' ";
                     $view2 = mysqli_query($con,$data2);
                     while($_view2 = mysqli_fetch_assoc($view2))
                     {
                         $rs_p=$_view2['product_price'];
                         $S_Price = $rs_p*$id_c_pro_qty;
                         if(!empty($S_Price))
                         {
                          $a+=$S_Price;
                           $ct_p++;  
                         }
                    

                     }
                    
                  //$S_Price = $rs_p*$id_c_pro_qty;
                    //$a=$S_Price++ ;
                }
                 
                
             }
    ?>

                                          
                                            <span class="cart_count"><?php echo  $row["count_item"]; ?></span>
                                            
                                            <span class="cart_price">RS <?php echo $a; ?> <i class="ion-ios-arrow-down"><a class="active" href="Customer_cart.php">View Cart</a></i></span>
                                     
                                            
-->

                                        </a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="mini_cart_inner">
                                                <div class="cart_close">
                                                    <div class="cart_text">
                                                        <h3>cart</h3>
                                                    </div>
                                                    <div class="mini_cart_close">
                                                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>


                               

                                                <!---

                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Fusce Aliquam</a>
                                                        <p>Qty: 1 X <span> $60.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Ras Neque Metus</a>
                                                         <p>Qty: 1 X <span> $60.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                                
                                                <div class="mini_cart_table">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$138.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$138.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="cart.html">View cart</a>
                                                </div>
                                                --->
                                                <hr><br>
                                                <div class="cart_button">
                                                <a class="active" href="Customer_cart.php">View Cart</a>
                                                
                                               
                                                </div>
                                                <hr>
                                                <div class="cart_button">
                                                <a  href="customer_order_view.php" ><b>Orders Track Process </b></a>
                                                </div>
                                                <br>
                                                <div class="cart_total">
                                                        <span>Sub Total:</span>
                                                        <span class="price">RS <?php echo $a;  ?></span>
                                                    </div>
                                               
                                                <hr>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class=" col-lg-3">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <!--
                                        <li><a href="all_product_sh_profile.php"> Accessories</a></li>
                                        <li><a href="all_product_sh_profile.php">Body Parts</a></li>
                                        <li><a href="all_product_sh_profile.php">Car Engine</a></li>
                                        <li><a href="all_product_sh_profile.php">Interiors</a></li>
                                        <li><a href="all_product_sh_profile.php">Lights & Lamp</a></li>
                                        <li><a href="all_product_sh_profile.php">Repair Parts</a></li>
                                        <li><a href="all_product_sh_profile.php">Wheel & Tires</a></li>
                                        <li><a href="all_product_sh_profile.php">Smart Devices</a></li>
                                        <li><a href="all_product_sh_profile.php">Exteriors</a></li>
            -->
            
            <?PHP
						include"db/db.php";
					//$selecte_id = $_SESSION["uid"];
					$data = "SELECT * FROM categories ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{

                        $cat_title = $_view['cat_title'];
                        $cat_p_id = $_view['cat_id'];

                        ?>




                <li><a href="cat_product_select_sh_profile.php?id=<?php echo $cat_p_id; ?>"> <?php echo $cat_title; ?> </a></li>

                            <?php
                    }
                            ?>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main_menu menu_position text-left"> 
                                <nav>  
                                    <ul>
                                        <li><a class="active"  href="index.php">home</a>
                                           
                                        </li>
                                       <li><a href="about_profile.php">About Us</a></li>
                                        <li><a href="contact_profile.php"> Contact Us</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>
    <script type="text/javascript" src="login/Seller/dist/js/site.min.js"></script>
        