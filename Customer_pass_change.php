<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<script src="assets/B/js/jquery2.js"></script>

    <script src="assets/functio/A_function.js"></script>
        
    </head>
    <body class="gradl">
     
    <?php  
include'H1.php';
?>
       
    
        <div class="container-fluid gradl">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="pass_back_message">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"> Profile Update </div>
					<div class="panel-body">
					
					<form method="post" onsubmit="return false">
                        <?PHP
					// Id from List Page
                        require "db\db.php";
					$selecte_id = $_SESSION["uid"];
						//Step:02 Database Connection
						//include('db2/db2.php');
					$data = "SELECT * FROM user_info WHERE user_id='$selecte_id'";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
				 //  $selected_id = $_view['Code'];
					?>
                        
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" value="<?PHP echo $_view['first_name'] ?>" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name" value="<?PHP echo $_view['last_name'] ?>"class="form-control">
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email <small>**</small></label>
								<input type="text" id="email" name="email"class="form-control" value="<?PHP echo $_view['email'] ?>" readonly>
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control"  required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control" value="<?PHP echo $_view['mobile'] ?>" required>
							</div>
						</div>
                        <hr>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address </label>
								<input type="text" id="address1" name="address1" value="<?PHP echo $_view['address1'] ?>" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address <small> Optional</small></label>
								<input type="text" id="address2" name="address2" value="<?PHP echo $_view['address2'] ?>"  class="form-control">
							</div>
						</div>
                        <hr>
                        <div class="row">
							<div class="col-md-12">
								<label for="cnic">CNIC <small>**</small></label>
								<input type="text" id="cnic" name="cnic" value="<?PHP echo $_view['cnic'] ?>" class="form-control" readonly>
							</div>
						</div>
                        <hr>
                        <div class="row">
							<div class="col-md-12">
								<label for="user_type">User Type <small>**</small></label>
								<input type="text"  value="<?PHP echo $_view['user_type'] ?>"  class="form-control"  readonly>
							</div>
						</div>
                        
                        <p><br/></p>
                        <hr>
						<div class="row" style="margin-left: auto; margin-right: auto;">
							<div class="col-md-12">
								<input  value="Confirm" type="button" onclick="topFunction()" id="customer_pass_chang" name="signup_button"class="btn btn-success btn-lg">
							</div>
                            
                              
						</div><br>
                        <small>** Your changing Please Contact To Admin</small>
						
					<?php } ?>
					</form>
				
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
       
       <script>
       
           function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
} 
           
       </script>
       
    </body>
    
</html>