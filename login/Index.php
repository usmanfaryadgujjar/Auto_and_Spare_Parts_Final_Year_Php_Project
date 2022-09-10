<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./admin/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>

                                    <p class="message"></p>
        <form id="admin-login-form">
			  <div class="form-group">
                
                  <label for="email" >Email Address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			   
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
                <div class="row justify-content-center">
			  <button type="button" class="btn btn-primary btn-lg login-btn">Log in</button>
                </div>
			</form>

                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./admin/vendor/global/global.min.js"></script>
    <script src="./admin/js/quixnav-init.js"></script>
    <script src="./admin/js/custom.min.js"></script>

    <script>
$(document).ready(function(){

	
	$(".login-btn").on("click", function(){

		$.ajax({
			url : 'selectdataclass.php',
			method : "POST",
			data : $("#admin-login-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 201) {
					window.location.href ="admin/index.php";
				}
                else if(resp.status == 202) {
					window.location.href ="../Admin/index.php";
				}
                else if(resp.status == 203) {
					window.location.href ="../Manager/index.php";
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