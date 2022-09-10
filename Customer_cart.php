<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>


<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />






<?php  
//linkkkk
include'top_head.php';
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
include'header_profile.php';
?>
   
    <!--header area end-->
   
    <!--slider area start-->
 
    <script src="assets/functio/A_function.js"></script> 

      <!--search box -->
      <div class="panel-body">
						<div id="get_product">
						
                    </div>
						
                </div>


      <!--shopping cart area start -->
      <div class="cart_page_bg">
        <div class="container">
            <div class="shopping_cart_area">
                <form action="#"> 
                        <div class="row">
<!---
                            <div class="col-12">
                                <div class="table_desc">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product_quantity">Quantity</th>
                                                    <th class="product_total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            --
                                                <tr>
                                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                    <td class="product-price">£65.00</td>
                                                    <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                                    <td class="product_total">£130.00</td>


                                                </tr>
                                                --

                                               
  
 
                                            </tbody>
                                        </table>   
                                    </div>  
                                    <div class="cart_submit">
                                        <button type="submit">update cart</button>
                                    </div>      
                                </div>
                             </div>
                         </div>


                        -->




                        <div class="row">
					<div class="col-md-6 col-xs-6" id="cart_msg">
					</div>
				</div>


                         <div id="cart_checkout" ></div>



                                                                            
<script type="text/javascript" src="login/Seller/dist/js/site.min.js"></script>


                         <!--coupon code area start--
                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code left">
                                        <h3>Coupon</h3>
                                        <div class="coupon_inner">   
                                            <p>Enter your coupon code if you have one.</p>                                
                                            <input placeholder="Coupon code" type="text">
                                            <button type="submit">Apply coupon</button>
                                        </div>    
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code right">
                                        <h3>Cart Totals</h3>
                                        <div class="coupon_inner">
                                           <div class="cart_subtotal">
                                               <p>Subtotal</p>
                                               <p class="cart_amount">£215.00</p>
                                           </div>
                                           <div class="cart_subtotal ">
                                               <p>Shipping</p>
                                               <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                           </div>
                                           <a href="#">Calculate shipping</a>

                                           <div class="cart_subtotal">
                                               <p>Total</p>
                                               <p class="cart_amount">£215.00</p>
                                           </div>
                                           <div class="checkout_btn">
                                               <a href="checkout.html">Proceed to Checkout</a>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --coupon code area end-->
                    </form>   
            </div>
        </div>
    </div>
    <!--shopping cart area end -->
    










    <!--banner area end-->
    <?php  
//include'paglink.php';
?>
   
  

    <!--home section bg area start-->
   

    <?php  
//include'overproduct.php';
?>


    <!--home section bg area end-->
    
    <!--brand area start-->
  <br>
    <hr>
    <?php  
//include'brandarea.php';
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