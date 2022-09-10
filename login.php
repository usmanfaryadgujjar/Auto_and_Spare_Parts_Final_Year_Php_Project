<?php

session_start();
if(isset($_SESSION["uid"])){
	header("location:Customer_profile.php");
exit;
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
include'top_head.php';
include'header_area_menu.php';

?>
       <p><br/></p>

        <div class="container-fluid ">
		<div class="row justify-content-center" >
			<div class="col-md-4"></div>
			<div class="col-md-4">


                     <h1 ><center><b>Sign In</b></center></h1>
		              <hr>
                        <div id="e_msg"></div>
                        <div id="e_msg2"></div>
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>

							<a href="forgot.php" style="color:#333; list-style:none;">Forgotten Password</a>

                            <input type="submit" class="btn btn-lg btn-success" style="float:right;" Value="Login" onclick="reloadPage();">
							<!---
							<div><a href="Registration_C_S.php">Create a new account</a></div>
                            --->
						</form>

                        <br>
                        <br>
                        <p>
                        <a  href="login3231xp27w.php">
                                    <button  class="btn btn-sm btn-success" > Admin Account Login Click Here </button>
                                </a>
                        </p>


		</div>

        <div class="col-md-4"></div>

	</div>
    </div>

        <!------
        <div class="container-fluid ">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">

			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Login Form</div>
					<div class="panel-body">
                        <div id="e_msg"></div>

						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>

							<a href="#" style="color:#333; list-style:none;">Forgotten Password</a>
                            <input type="submit" class="btn btn-success" style="float:right;" Value="Login" onclick="reloadPage();">

							<div><a href="Registration_C_S.php">Create a new account</a></div>
						</form>
				</div>

			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
    </div>
       ------------->

    </body>
