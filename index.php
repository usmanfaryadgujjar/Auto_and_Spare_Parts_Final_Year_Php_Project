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
   
    <!--slider area start-->
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
    <!--slider area end-->
    
  <!--banner area start-->
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

    <!--banner area end-->

    <!--search box -->
    <div class="panel-body">
						<div id="show_p">
						
                    </div>
						
                </div>



    <?php  
//include'paglink.php';
?>
   
  

    <!--home section bg area start-->
   

    <?php  
include'overproduct.php';
?>


    <!--home section bg area end-->
    
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