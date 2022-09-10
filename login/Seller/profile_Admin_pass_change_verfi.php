<?php
session_start();
require "../db/db2.php";
$_SESSION = $_SESSION['admin_id'];

if (isset($_POST["name"])) {

	$name = $_POST["name"];
	$password = $_POST['password'];
	$name2 = "/^[a-zA-Z ]+$/";
	//$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	//$number = "/^[0-9]+$/";
    
    
if(empty($name) || empty($password) ){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
    
    if(!preg_match($name2,$name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak <i>Max 9</i></b>
			</div>
		";
		exit();
	}
		
    
    $password2 = password_hash ($password, PASSWORD_BCRYPT, ["COST"=> 8]);
    
    
     $data3 = "SELECT * FROM admin where id='$_SESSION' ";
					$view3 = mysqli_query($con,$data3);
					while($_view3 = mysqli_fetch_assoc($view3))
					{		
                        $pro_id    = $_view3 ['id'];
                        
                    }
    
    
    if($_SESSION==$pro_id){
		
        $sql = "UPDATE admin SET name='$name', password='$password2' Where id='$_SESSION' ";
		if(mysqli_query($con,$sql)){
			echo "
            <div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Your Account is Successfully Update</b>
			</div>
            ";
			exit();
		}
        
    }
    else
    {
        echo "
            <div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Your Account is Successfully Update</b>
			</div>
            ";
			exit();
        
    }
    
	
	}
	
}



?>