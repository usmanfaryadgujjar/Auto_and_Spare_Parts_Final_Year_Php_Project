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

    <?php  
//include'top_menu_bar_login.php';
?>
    <!--offcanvas menu area end-->

    <?php  
include'header_area_menu.php';
?>
   
    <!--header area end-->
   
    <!--slider area start-
    <section class="slider_section mb-80">
        <div class="slider_area slider_carousel owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>Big sale off <span>Accessories Fidanza</span></h1>
                                <p>Exclusive Offer -30% Off This Week</p>  
                            </div>
                       </div>
                   </div>
               </div> 
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content center">
                                <h1>Accessories  <span>all kinds of tractor trailer</span></h1>
                                <p>Exclusive Offer -30% Off This Week</p>  
                            </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>High-end <span>New car interior</span> </h1>
                                <p>Exclusive Offer -20% Off This Week</p>  
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
    --slider area end-->
    
  <!--banner area start-
    <div class="banner_area mb-80">
        <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="welcome_title">
                       <h3>WELCOME TO MAZLAY</h3>
                       <h2>CUSTOM <span>SHOPPING STORE ONLINE</span></h2>
                   </div>
               </div>
           </div>
           
        </div>
    </div>
    --banner area end-->
    

     <!--breadcrumbs area end-->
     <?php
             include "db/db.php";
             $id_p = $_GET['idp01'];
         //where product_condition='old'
	$product_query2 = "SELECT * FROM products where product_id='$id_p' ";
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

        }
    }

                        
                        ?>




<div class="row">
					<div class="col-md-6 col-xs-6" id="product_msg">
					</div>
				</div>



     <div class="product_page_bg">
        <div class="container">
            <!--product details start-->
            <div class="product_details">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="login/Image_Product/<?php echo $pro_image ?>" data-zoom-image="login/Image_Product/<?php echo $pro_image ?>" alt="big-1">
                                </a>
                            </div>
<!--
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="login/Image_Product/<?php echo $pro_image ?>" data-zoom-image="login/Image_Product/<?php echo $pro_image ?>">
                                            <img src="login/Image_Product/<?php echo $pro_image ?>" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="login/Image_Product/<?php echo $pro_image ?>" data-zoom-image="login/Image_Product/<?php echo $pro_image ?>">
                                            <img src="login/Image_Product/<?php echo $pro_image ?>" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="login/Image_Product/<?php echo $pro_image ?>" data-zoom-image="login/Image_Product/<?php echo $pro_image ?>">
                                            <img src="login/Image_Product/<?php echo $pro_image ?>" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="login/Image_Product/<?php echo $pro_image ?>" data-zoom-image="login/Image_Product/<?php echo $pro_image ?>">
                                            <img src="login/Image_Product/<?php echo $pro_image ?>" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                </ul>
                            </div>

-->

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_d_right">
                           <form action="#">

                                <h3><a href="#"><?php echo $pro_title; ?></a></h3>
                                <div class="product_nav">
                                    <!--
                                    <ul>
                                        <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
-->

                                </div>
                               <div class="product_rating">
                                  <ul>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li class="review"><a href="#">(1 customer review )</a></li>
                                   </ul>
                                </div>
                                <div class="price_box">
                                    <span class="old_price"><?php echo $pro_price; ?></span>
                                    <span class="current_price"><?php echo $per;  ?></span>
                                </div>
                                <div class="product_desc">
                                    <p><?php echo $product_desc; ?></p>
                                </div>
                                <!--
                                <div class="product_variant color">
                                    <h3>Available Options</h3>
                                    <label>color</label>
                                    <ul>
                                        <li class="color1"><a href="#"></a></li>
                                        <li class="color2"><a href="#"></a></li>
                                        <li class="color3"><a href="#"></a></li>
                                        <li class="color4"><a href="#"></a></li>
                                    </ul>
                                </div>
-->
                                <div class="product_variant quantity">
                                    <!--
                                    <label>quantity</label>
                                    <input min="1" max="100" value="1" type="number">
-->

                                    <button pid="<?php echo $pro_id; ?>"  id="product" class="button" type="submit">add to cart</button>  

                                </div>
                                <div class=" product_d_action">
                                   <ul>
                                       <!--  <li><a class="wishlist" href="wishlist.html" title="Add to wishlist">+ Add to Wishlist</a></li> -->
                                       <li><a class="wishlist" href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                       
                                   </ul>
                                </div>
                            

                            </form>

                        </div>
                    </div>
                </div>   
            </div>
            <!--product details end-->

            <!--product info start-
            <div class="product_d_info"> 
                <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">   
                                <div class="product_info_button">    
                                    <ul class="nav" role="tablist" id="nav-tab">
                                        <li >
                                            <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                        </li>
                                        <li>
                                             <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                        </li>
                                        <li>
                                           <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                        <div class="product_info_content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                        </div>    
                                    </div>
                                    <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                        <div class="product_d_table">
                                           <form action="#">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first_child">Compositions</td>
                                                            <td>Polyester</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Styles</td>
                                                            <td>Girly</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Properties</td>
                                                            <td>Short Dress</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                        </div>    
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                        <div class="reviews_wrapper">
                                            <h2>1 review for Donec eu furniture</h2>
                                            <div class="reviews_comment_box">
                                                <div class="comment_thmb">
                                                    <img src="assets/img/blog/comment2.jpg" alt="">
                                                </div>
                                                <div class="comment_text">
                                                    <div class="reviews_meta">
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                           </ul>
                                                        </div>
                                                        <p><strong>admin </strong>- September 12, 2018</p>
                                                        <span>roadthemes</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="comment_title">
                                                <h2>Add a review </h2>
                                                <p>Your email address will not be published.  Required fields are marked </p>
                                            </div>
                                            <div class="product_rating mb-10">
                                               <h3>Your rating</h3>
                                                <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="product_review_form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Your review </label>
                                                            <textarea name="comment" id="review_comment" ></textarea>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">Name</label>
                                                            <input id="author"  type="text">

                                                        </div> 
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">Email </label>
                                                            <input id="email"  type="text">
                                                        </div>  
                                                    </div>
                                                    <button type="submit">Submit</button>
                                                 </form>   
                                            </div> 
                                        </div>     
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>   
            </div>  
            --product info end-->













            <!--product area start-
            <section class="product_area related_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Related</span> Products</h2>
                            </div>                 
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="product_carousel product_details_column5 owl-carousel">
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-56%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
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
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                      
                                                </ul>
                                            </div>  
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
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
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-56%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
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
                                                    <span class="old_price">$420.00</span> 
                                                    <span class="current_price">$180.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                      
                                                </ul>
                                            </div> 
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
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
                                                    <span class="old_price">$420.00</span> 
                                                    <span class="current_price">$180.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                      
                                                </ul>
                                            </div> 
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_new">new</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
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
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                      
                                                </ul>
                                            </div>  
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
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
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                      
                                                </ul>
                                            </div>  
                                        </div>
                                    </figure>
                                </article>
                       </div>
                    </div> 
                </div>  
            </section>
            -product area end-->

            <!--product area start-
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
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
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
                                                <span class="old_price">$420.00</span> 
                                                <span class="current_price">$180.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div> 
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_new">new</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
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
                                                <span class="old_price">$320.00</span> 
                                                <span class="current_price">$120.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
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
                                                <span class="old_price">$320.00</span> 
                                                <span class="current_price">$120.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-56%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
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
                                                <span class="old_price">$320.00</span> 
                                                <span class="current_price">$120.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
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
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-56%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
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
                                                <span class="old_price">$420.00</span> 
                                                <span class="current_price">$180.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                  
                                            </ul>
                                        </div> 
                                    </div>
                                </figure>
                            </article>
                       </div>
                    </div>
                </div> 
            </section>
            --product area end-->




        </div>
    </div>
    
     <!--brand area start-->


    
    <!--brand area start-->
  
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