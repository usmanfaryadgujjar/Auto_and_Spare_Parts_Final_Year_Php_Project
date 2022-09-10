<?php
session_start();
include "db/db.php";
if (isset($_POST["email"])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$cnic= $_POST['cnic'];
    $emailValidation = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
    $cnic_v = "/[0-9]{5}(-[0-9]{7})(-[0-9]{1})$/";
    
if( empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($cnic)){
		
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
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
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
		";
        exit();
	}
   if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b><i><strong>For Example : 03XXXXXXXXX </strong></i>
			</div>
		";
		exit();
	}
     if(!preg_match($cnic_v,$cnic)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>CNIC Number $cnic is not valid</b><small> Fellow its For Example : xxxxx-xxxxxxx-x </small>
			</div>
		";
		exit();
	}
   
    if(!(strlen($cnic) == 15)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>CNIC Number must be 13 digit and TWO - Add </b><i><strong> Fellow its For Example : xxxxx-xxxxxxx-x </strong></i>
			</div>
		";
		exit();
	}
    
    $sqlcnic = "SELECT * FROM user_info WHERE cnic = '$cnic' and email='$email' and mobile='$mobile' LIMIT 1" ;
	$check_querycnic = mysqli_query($con,$sqlcnic);
	$count_cnic = mysqli_num_rows($check_querycnic);
	
	if($count_cnic > 0)
	{
        
        $passwordm = md5($password);
        
        $sqlAB = "UPDATE `user_info` SET `password`='$passwordm'";
        
		$run_query = mysqli_query($con,$sqlAB);
        
		 if(!empty($run_query)){
			echo "
            <div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Your Successfully Password Update </b>
                </b><small><b>
				<i><a href='Customer_login.php'><blink> Login Click Here </blink></a></i>
                </b></small>
			</div>
            ";
			exit();
		
		    }
		    else{
		        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Not Update Password Account Please Connect to Admin</b>
			</div> ";
	    	exit();
		    }
	    
	}
    else
    {
        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				
				<b>Information is Wrong</b>
			</div>
		";
		exit();
    }
    
    
		
		
	}
	}
	



?>