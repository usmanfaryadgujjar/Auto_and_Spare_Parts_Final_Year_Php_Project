<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto Spare Parts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS 
    ========================= -->

    <?php  
//linkkkk
include'top_head.php';
?>

</head>



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

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--about bg area start-->
    <div class="about_bg_area">
       <div class="container">
            <!--about section area -->
            <section class="about_section mb-60"> 
                <div class="row align-items-center">
                    <div class="col-12">
                       <figure>
                            <div class="about_thumb">
                                <img src="assets/img/about/about1.jpg" alt="">
                            </div>
                            <figcaption class="about_content">
                                <h1>We are a digital agency focused on delivering content and utility user-experiences.</h1>
                                <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                                <div class="about_signature">
                                    <img src="assets/img/about/about-us-signature.png" alt="">
                                </div>
                            </figcaption>
                        </figure>
                    </div>    
                </div>   
            </section>
            <!--about section end-->

            <!--chose us area start-->
            <div class="choseus_area" data-bgimg="assets/img/about/about-us-policy-bg.jpg">
                <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="chose_icone">
                                    <img src="assets/img/about/About_icon1.png" alt="">
                                </div>
                                <div class="chose_content">
                                    <h3>Creative Design</h3>
                                    <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="chose_icone">
                                    <img src="assets/img/about/About_icon2.png" alt="">
                                </div>
                                <div class="chose_content">
                                    <h3>100% Money Back Guarantee</h3>
                                    <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="chose_icone">
                                    <img src="assets/img/about/About_icon3.png" alt="">
                                </div>
                                <div class="chose_content">
                                    <h3>Online Support 24/7</h3>
                                    <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!--chose us area end-->      

            <!--services img area-->
            <div class="about_gallery_section mb-55"> 
                <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <article class="single_gallery_section">
                                <figure>
                                    <div class="gallery_thumb">
                                        <img src="assets/img/about/about2.jpg" alt="">
                                    </div>
                                    <figcaption class="about_gallery_content">
                                       <h3>What do we do?</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <article class="single_gallery_section">
                                <figure>
                                    <div class="gallery_thumb">
                                        <img src="assets/img/about/about3.jpg" alt="">
                                    </div>
                                    <figcaption class="about_gallery_content">
                                       <h3>Our Mission</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <article class="single_gallery_section">
                                <figure>
                                    <div class="gallery_thumb">
                                        <img src="assets/img/about/about4.jpg" alt="">
                                    </div>
                                    <figcaption class="about_gallery_content">
                                       <h3>History Of Us</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>   
            </div>
            <!--services img end-->    

            <!--testimonial area start-->
            <div class="faq-client-say-area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-client_title">
                            <h2>What can we do for you ?</h2>
                        </div>
                        <div class="faq-style-wrap" id="faq-five">
                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a id="octagon" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse1" aria-expanded="true" aria-controls="faq-collapse1"> <span class="button-faq"></span>Fast Free Delivery</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse1" class="collapse show" aria-expanded="true" role="tabpanel" data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->

                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse2" aria-expanded="false" aria-controls="faq-collapse2"> <span class="button-faq"></span>More Than 30 Years In The Business</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse2" class="collapse" aria-expanded="false" role="tabpanel" data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->

                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse3" aria-expanded="false" aria-controls="faq-collapse3"> <span class="button-faq"></span>100% Organic Foods</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse3" class="collapse" role="tabpanel" data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->

                            <!-- Panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse4" aria-expanded="false" aria-controls="faq-collapse4"> <span class="button-faq"></span>Best Shopping Strategies</a>
                                    </h5>
                                </div>
                                <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                    <div class="panel-body">
                                        <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                        <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                        </p>
                                        <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--// Panel-default -->
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-area">
                            <div class="faq-client_title">
                                <h2>What Our Customers Says ?</h2>
                            </div>
                            <div class="testimonial-two owl-carousel">
                                <div class="testimonial-wrap-two text-center">
                                        <div class="quote-container">
                                            <div class="quote-image">
                                                <img src="assets/img/about/testimonial1.jpg" alt="">
                                            </div>
                                            <div class="testimonials-text">
                                                <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                            </div>
                                            <div class="author">
                                                <h6>Kathy Young</h6>
                                                <p>CEO of SunPark</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                <div class="testimonial-wrap-two text-center">
                                        <div class="quote-container">
                                            <div class="quote-image">
                                                <img src="assets/img/about/testimonial2.jpg" alt="">
                                            </div>
                                            <div class="testimonials-text">
                                                <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                            </div>
                                            <div class="author">
                                                <h6>Kathy Young</h6>
                                                <p>CEO of SunPark</p>
                                            </div>
                                        </div>
                                    </div>
                                <div class="testimonial-wrap-two text-center">
                                        <div class="quote-container">
                                            <div class="quote-image">
                                                <img src="assets/img/about/testimonial3.jpg" alt="">
                                            </div>
                                            <div class="testimonials-text">
                                                <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                            </div>
                                            <div class="author">
                                                <h6>Kathy Young</h6>
                                                <p>CEO of SunPark</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--testimonial area end-->
        </div>
    </div>
    <!--about bg area end-->

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