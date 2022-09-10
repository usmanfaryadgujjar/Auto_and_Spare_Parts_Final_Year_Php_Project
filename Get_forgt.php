<?php
session_start();
include "db/db.php";
if (isset($_POST["email"])) {

	$email = $_POST['email'];
	$emailValidation = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	
if(empty($email)){
		
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill </b>
			</div>
		";
		exit();
	} else {    
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid Email Address </b>
			</div>
		";
		exit();
	}
	
	//existing email address in our database
	$sql = "SELECT * FROM user_info WHERE email = '$email' and user_type='customer' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	
	if($count_email > 0)
	{
        
		echo "
			<script>window.location = 'forgot_pro.php?pe=$email'   </script>
		";
		exit();
	    
	}
	else 
	{
	   echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				
				<b>Email Address is Wrong</b>
			</div>
		";
		exit();
	    
	    
	}
    
    
		
		
	}
    
	}
	



?>