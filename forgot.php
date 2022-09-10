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
                        <div id="forgt_back_message"></div>
						<form method="post" onsubmit="return false">
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
                    	<p><br/></p>
                        <hr>
						<div class="row" style="float:right;">
							<div class="col-md-12">
								<input  value="submit" type="button" id="forgott" name="Submit" class="btn btn-success btn-lg">
							</div>
						</div>
						
					
					</form>
			
		</div>
		<div class="col-md-4"></div>
	</div>
    </div>
        
    </body>