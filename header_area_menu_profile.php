 
    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
               <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                           <!--  <div class="header_account">
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
                            </div> -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="header_top_links text-right">
                                <ul>
                                    <li><a href="Registration_C_S.php">Register</a></li>
                                    <li><a href="login.php">login</a></li>
                                   
                                </ul>
                            </div>   
                        </div>
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
                                <form  >
                                
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text" name="search" id="search" >
                                    <button type="submit"  id="search_btn" >Search</button> 
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
                                            <!--
                                            <span class="cart_price">$152.00 <i class="ion-ios-arrow-down"></i></span>
                                            !--
                                            <span class="cart_count">2</span>
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
                                                <div class="cart_item">
<!--
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
                                                    --->
                                                </div>
                                                <div class="cart_item">
                                                    <!---
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
-->

                                                </div>
                                                
                                                <div class="mini_cart_table">
                                                    <!--
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$138.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$138.00</span>
                                                    </div>
-->

                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <!--
                                               <div class="cart_button">
                                                    <a href="cart.html">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a class="active" href="checkout.html">Checkout</a>
                                                </div>

                                                --->

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




                <li><a href="cat_product_select_sh.php?id=<?php echo $cat_p_id; ?>"> <?php echo $cat_title; ?> </a></li>

                            <?php
                    }
                            ?>
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
                                        --->

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