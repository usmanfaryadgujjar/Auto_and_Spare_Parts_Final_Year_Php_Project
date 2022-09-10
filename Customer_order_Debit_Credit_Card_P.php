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



<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cus_back_message">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-body"> <h6>Information Order Sendding</h6> </div>
					<div class="panel-body">
					
					<form method="post" onsubmit="return false">
                        <?PHP
						include"db/db.php";
					$selecte_id = $_SESSION["uid"];
					$data = "SELECT * FROM user_info WHERE user_id='$selecte_id'";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		

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
                                 
        			<div class="form-group">
		        		<label>Accepted Cards</label>
		        		<select class="form-control " id="account_name" name="account_name">
		        			<option value="">Select</option>
                            <option value="VISA">VISA</option>
                            <option value="Mastercard">Mastercard</option>
		        		</select>
		        	</div>
        		            </div>
                        </div>
                        <div class="row">
							<div class="col-md-6">
								<label for="card_no">Card Number</label>
								<input type="text" id="card_no" name="card_no" class="form-control" placeholder="Enter Card Number" required>
							</div>
							<div class="col-md-6">
								<label for="card_H_N">Card Holder Name</label>
								<input type="text" id="card_H_N" name="card_H_N" class="form-control" placeholder="Enter Card Holder Name" >
							</div>
						</div>
                        <br>
                        <div class="row">
							<div class="col-md-6">
								<label for="exp_date">Expire Date</label>
								<input type="text" id="exp_date" name="exp_date" class="form-control" placeholder="Enter Expire Date" required>
							</div>
							<div class="col-md-6">
								<label for="cvc">CVC</label>
								<input type="text" id="cvc" name="cvc" class="form-control" placeholder="Enter CVC">
							</div>
						</div>
                        <hr>
						
                        <div class="row">
							<div class="col-md-12">
								<label for="cnic">CNIC <small>**</small></label>
								<input type="text" id="cnic" name="cnic" value="<?PHP echo $_view['cnic'] ?>" class="form-control" readonly>
							</div>
						</div>
                        
                        <p><br/></p>
                        <hr>
						<div class="row" style="margin-left: auto; margin-right: auto;">
							<div class="col-md-12">
								<input  value="Confirm" type="button" onclick="topFunction()" id="customer_information_order" name="signup_button"class="btn btn-success btn-lg">
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