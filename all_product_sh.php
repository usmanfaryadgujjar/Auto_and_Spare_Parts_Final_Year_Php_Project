<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php
//include "db2\db2.php";
session_start();
if(isset($_SESSION["uid"])){

    header("location:Customer_profile.php");
}
?>



<?php

include'header.php';

?>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>

    <!--offcanvas menu area end-->


    <?php
    include'header_area_menu.php';
    ?>

    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Product</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <div class="home_section_bg">
        <!--product area start-->
        <div class="product_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <script src="assets/functio/A_function.js"></script>

                        <div class="section_title">
                           <h2>Products</h2>

                        </div>
                        <div class="row">
					<div class="col-md-6 col-xs-6" id="product_msg">
					</div>
				</div>
                    </div>
                </div>
                <div class="panel-body">
						<div id="show_p">

                    </div>

                </div>

                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="Sellers" role="tabpanel">
                        <div class="row">
                            <div class="product_carousel product_column5 owl-carousel">
                            <?php
             include "db/db.php";
         //where product_condition='old'
	$product_query2 = "SELECT * FROM products  ";
	$run_query2 = mysqli_query($con,$product_query2);
	if(mysqli_num_rows($run_query2) > 0){
		while($roww = mysqli_fetch_array($run_query2)){
			$pro_id    = $roww['product_id'];
			$pro_cat   = $roww['product_cat'];
			$pro_brand = $roww['product_brand'];
			$pro_title = $roww['product_title'];
			$pro_price = $roww['product_price'];
			$pro_image = $roww['product_image'];
			$product_desc = $roww['product_desc'];
            $su=($pro_price * 5)/100;
            $per=$su+$pro_price;


                        ?>




<div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                    <a class="primary_img" href="product_details_v.php?idp01=<?php echo $pro_id;?>"> <img src='login/Image_Product/<?php echo $pro_image ?>' /></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="product_details_v.php?idp01=<?php echo $pro_id;?>">Parts of <?php echo $pro_brand; ?></a></p>
                                            <h4 class="product_name"><a href="product_details_v.php?idp01=<?php echo $pro_id;?>"><?php echo $pro_title; ?></a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">Rs <?php echo $per; ?></span>
                                                <span class="current_price">Rs <?php echo $pro_price; ?></span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                             <button pid="<?php echo $pro_id; ?>"  id="product" class="btn btn-primary">Add To Cart </button>
                                                 <!--
                                             <button pid="<?php echo $pro_id; ?>"  id="product" class="btn btn-primary">Add To Cart </button></li>

                                              ---
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                 -->

                                                <li class="wishlist"><a href="#"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                       </div>

                       <?php    } }   ?>






                    </div>

                </div>

            </div>
        </div>
        <!--product area end-->
    </div>
















    <section class="product_area upsell_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Upsell</span> Products</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product_carousel product_details_column5 owl-carousel">
                    <?php

             include "db/db.php";
         //where product_condition='old'
	$product_query2 = "SELECT * FROM products where product_condition='Old_product' ";
	$run_query2 = mysqli_query($con,$product_query2);
	if(mysqli_num_rows($run_query2) > 0){
		while($roww = mysqli_fetch_array($run_query2)){
			$pro_id    = $roww['product_id'];
			$pro_cat   = $roww['product_cat'];
			$pro_brand = $roww['product_brand'];
			$pro_title = $roww['product_title'];
			$pro_price = $roww['product_price'];
			$pro_image = $roww['product_image'];
			$product_desc = $roww['product_desc'];
            $su=($pro_price * 5)/100;
            $per=$su+$pro_price;


                        ?>


                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                    <a class="primary_img" href="product_details_v.php?idp01=<?php echo $pro_id;?>"> <img src='login/Image_Product/<?php echo $pro_image ?>' /></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="product_details_v.php?idp01=<?php echo $pro_id;?>">Parts</a></p>
                                            <h4 class="product_name"><a href="product_details_v.php?idp01=<?php echo $pro_id;?>"><?php echo $pro_title; ?></a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">Rs <?php echo $per; ?></span>
                                                <span class="current_price">Rs <?php echo $pro_price; ?></span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                             <li>
                                             <button pid="<?php echo $pro_id; ?>"  id="product" class="btn btn-primary">Add To Cart </button>
                                                 <!--
                                             <button pid="<?php echo $pro_id; ?>"  id="product" class="btn btn-primary">Add To Cart </button></li>

                                              ---
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                 -->

                                                <li class="wishlist"><a href="#"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                       </div>

                       <?php    } }  ?>



                    </div>
                </div>
            </section>




  <!-- customer login end -->

    <!--brand area start-->
    <?php
//include'overproduct.php';
?>

    <?php
include'brandarea.php';
?>


    <!--brand area end-->

    <!--footer area start-->
    <?php
include'footer.php';
?>
    <!--footer area end-->



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>


</html>
