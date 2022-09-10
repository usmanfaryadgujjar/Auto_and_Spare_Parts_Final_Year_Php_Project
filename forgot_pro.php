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
   	
        <div class="container-fluid ">
		<div class="row justify-content-center" >
			<div class="col-md-4"></div>
			<div class="col-md-4">

					
                     <h1 ><center><b>Forgotten Password</b></center></h1>
		              <hr>
                        <div id="forgt_back_message2"></div>
                
						<form method="post" onsubmit="return false">
                            <?php 
                $pe2 = $_GET["pe"];
                
                 $data = "SELECT * FROM user_info where email='$pe2' ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
                        
                ?>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" value="<?php echo $_view['email']; ?>" class="form-control" readonly>
							</div>
						</div>
                            <?php } ?>
                            <br>
                            <div class="row">
							<div class="col-md-12">
								<label for="email">CNIC</label>
								<input type="text" id="cnic" name="cnic" class="form-control" placeholder="Enter CNIC NO" required>
							</div>
						</div>
                            <br>
                             <div class="row">
							<div class="col-md-12">
								<label for="email">Mobile No</label>
								<input type="text" id="mobile" name="mobile" class="form-control"  placeholder="Enter Mobile No" >
							</div>
						</div>
                            <br>
                            <div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="text" id="password" name="password"class="form-control" placeholder="Enter New Password" required>
							</div>
						</div>
                            <br>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="text" id="repassword" name="repassword"class="form-control" placeholder="Re-Enter New Password" required>
							</div>
						</div>
                        
                            
                    	<p><br/></p>
                        <hr>
						<div class="row" style="float:right">
							<div class="col-md-12">
								<input  value="submit" type="button" id="forgott2" name="Submit" class="btn btn-success btn-lg">
							</div>
						</div>
						
					
					</form>
			
                
		</div>
		<div class="col-md-4"></div>
	</div>
    </div>
        
    </body>