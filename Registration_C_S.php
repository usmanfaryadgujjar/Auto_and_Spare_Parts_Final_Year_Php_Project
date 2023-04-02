<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto Spare Parts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
   
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">





   
		<script src="assets/B/js/jquery2.js"></script>
		

    <script src="assets/functio/A_function.js"></script>


</head>

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
                            <li>My Account Registration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- customer login start -->
    <div class="login_page_bg">
        <div class="container">
            <div class="customer_login">
                <div class="row">
                   <!--login area start-->
                    <div class="col-lg-6 col-md-6 mx-auto">
                        <div class="">
                            <h2>Registration</h2>
                            <!--
                            <form id="admin-login-form">
                                <p>   
                                    <label>Username or email <span>*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
                                 </p>
                                 <p>   
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                 </p> 
                                 <input type="hidden" name="admin_login" value="1">  
                                <div class="login_submit">
                                   <a href="#">Lost your password?</a>
                                   
                                   <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label>
--> 
<!--
                                    <button type="submit login-btn">login</button>

                                </div>

                            </form>

                            ---->


                            <div class="panel-body">

                            <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_back_message">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
					
					<form method="post" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control" required>
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control" required>
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address</label>
								<input type="text" id="address1" name="address1"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
                                <label for="address2">Address <small>(Optional)</small></label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
                        <hr>
                        <div class="row">
							<div class="col-md-12">
								<label for="cnic">CNIC No</label>
								<input type="text" id="cnic" name="cnic"class="form-control">
							</div>
						</div>
                        <hr>
                        <div >
                            <div class="col-md-6">
                                <label for="user_type">Select Option </label>
                            <div class="form-group"  >
                                        <div class="radio">
                                          <label>
                                            <input type="radio"  id="customer" name="user_type" value="customer" required>
                                            Customer
                                          </label>
                                 
                                          <label>
                                            <input type="radio"  id="seller" name="user_type" value="seller" required>
                                            Seller
                                          </label>
						
                                        </div>
                                 </div>
                            </div>
                        </div>
						<p><br/></p>
                        <hr>
						<div class="row" style="margin-left: auto; margin-right: auto;">
							<div class="col-md-12">
                   
                            <input style="float:right;"  value="Sign Up" type="button" onclick="topFunction()" id="Reg_form" name="signup_button"class="btn btn-success btn-lg">

							
							</div>
						</div>

                  
					
					</form>
				
				</div>

                         </div>    
                    </div>
                    <!--login area start-->

                   
                    
                </div>   
            </div>
        </div>
    </div>
    
    <!-- customer login end -->

    
    <?php  
//include'brandarea.php';
?>


    <!--brand area end-->

    
    <!--footer area start-->

    <?php  
include'footer.php';
?>
    <!--footer area end-->
   
    <!--footer area end-->
   
   
    
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>
       
       function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
       
   </script>
   


</body>


</html>
