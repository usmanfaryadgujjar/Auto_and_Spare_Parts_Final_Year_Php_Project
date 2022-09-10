<?php
//session_start();
include "db2.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
    $cnic= $_POST['cnic'];
    $user_type = $_POST ['user_type'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
    $cnic_v = "/[0-9]{5}(-[0-9]{7})(-[0-9]{1})$/";
    
if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($user_type) || empty($cnic)){
		
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This $f_name is not valid </b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This $l_name is not valid</b>
			</div> <br>
		";
		exit();
	}
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
    if(empty($user_type))
    {
     echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Pleace select only one option : <i>Customer  OR  Seller </i></b>
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
    
    $sqlcnic = "SELECT * FROM user_info WHERE cnic = '$cnic' LIMIT 1" ;
	$check_querycnic = mysqli_query($con,$sqlcnic);
	$count_cnic = mysqli_num_rows($check_querycnic);
	
	if($count_cnic > 0)
	{
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				
				<b>CNIC Number is already Register ! <small> Please Send Mail To Admin  OR Contact Us</small></b>
			</div>
		";
		exit();
	    
	}
    
    
	//existing email address in our database
	$sql = "SELECT * FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	
	$sql2 = "SELECT * FROM admin WHERE email = '$email' LIMIT 1" ;
	$check_query2 = mysqli_query($con,$sql2);
	$count_email2 = mysqli_num_rows($check_query2);
	
	if($count_email > 0)
	{
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				
				<b>Email Address is already available Try Another email address Er1</b>
			</div>
		";
		exit();
	    
	}
	else if($count_email2 > 0)
	{
	    
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
		exit();
	    
	    
	}
	else 
		{
        
        $password_h2 = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
        
		$passwordm = md5($password);
		
		if($user_type=='customer'){
		    
	        $sqlAB = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`, `user_type`,`cnic`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$passwordm', '$mobile', '$address1', '$address2', '$user_type','$cnic')";
		$run_query = mysqli_query($con,$sqlAB);
		
            if(!empty($run_query)){
			echo "
            <div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Your Customer Account is Register Successfully</b>
                </b><small><b>
				<i><a href='login.php'><blink> Login Click Here </blink></a></i>
                </b></small>
			</div>
            ";
			exit();
		
		    }
		    else{
		        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b># Not Register Customer Account Connect to Admin</b>
			</div> ";
	    	exit();
		    }
            
		}
		
	        
        if($user_type=='seller'){
                
           $sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`, `user_type`,`cnic`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password_h2', '$mobile', '$address1', '$address2', '$user_type','$cnic')";
		
		$run_query = mysqli_query($con,$sql);
            
            

            if(!empty($run_query))
            {
                $u_id =0 ;
                $data = "SELECT * FROM user_info";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{
                        $u_id=$_view['user_id'];
                    
                    }
                $m=$u_id;
            
                
            $sqlB = "INSERT INTO `admin` 
		(`id`, `name`, `email`, `password`, `seller_or_admin`,`seller_id`,`cnic`) 
		VALUES (NULL, '$f_name','$email','$password_h2','$user_type','$m','$cnic')";
            
		$run_query = mysqli_query($con,$sqlB);
            
            if(!empty($run_query)){
			echo "
            <div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Your seller Account is Register Successfully</b>
                </b><small><b>
				<i><a href='login3231xp27w.php'><blink> Login Click Here </blink></a></i>
                </b></small>
			</div>
            ";
			exit();
		
		    }
            
          
                
           }
		    else{
		        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Not Register Customer Account Connect to Admin</b>
			</div> ";
	    	exit();
		    }
            
            
            
            }
            
         echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Your Account is Not Register Please Connect To Admin</b>
			</div>
		";
		exit();
            
		}
		
		
	}
	}
	



?>