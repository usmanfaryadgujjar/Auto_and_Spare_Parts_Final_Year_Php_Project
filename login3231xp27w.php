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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">






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
    <script src="assets/B/js/jquery2.js"></script>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>My Account Login</li>
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
                        <div class="panel-body">

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
                            <div class="container">
                 <div class="row">


                 <hr>

                   <!--login area start-->
                    <div class="col-lg-12 col-md-2 mx-auto">
                    <div class="">


                                <div class="col-lg-12">

                            <a  href="login.php">
                            <button style="float:right;" type="button" class="btn btn-primary  login-btn" > Custom Account Login <small>to Click Here</small> </button>
                        </a>

                        </div>

                                </div>
                                </div>
                            </div>
                            </div>
                            

                            <hr>
                            <div class="form-group">

                            <h2>Welcome To login Admin Account </h2>

                        </div>


                            <p class="message"></p>
        <form id="admin-login-form">
			  <div class="form-group">

                  <label for="email" >Email Address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter Email">

			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
              <div class="login_submit">
                  <div class="row"><br></div>
			  <button type="button" class="btn btn-primary  login-btn">Log in</button>
                </div>
			</form>



                         </div>
                    </div>
                    <!--login area start-->




                </div>
            </div>
        </div>
    </div>






    <!-- customer login end -->

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

    <!--footer area end-->



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>

$(document).ready(function(){


	$(".login-btn").on("click", function(){

		$.ajax({
			url : 'login/selectdataclass.php',
			method : "POST",
			data : $("#admin-login-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 201) {
					window.location.href ="login/Admin/index.php";
				}
                else if(resp.status == 202) {
					window.location.href ="login/Seller/index.php";
				}
                else if(resp.status == 203) {
					window.location.href ="login/Manager/index.php";
				}
                else if(resp.status == 303){
					$(".message").html('<hr><div class="alert alert-warning" role="alert"><blink><span class="text-danger">'+resp.message+'</span></blink></div><hr>');
				}
			}
		});

	});

});


</script>


</body>


</html>
