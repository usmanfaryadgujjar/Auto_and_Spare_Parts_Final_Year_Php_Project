<?php
session_start();
include "db/db.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
    $account_name = $_POST['account_name'];
    $card_no = $_POST['card_no'];
    $card_H_N = $_POST['card_H_N'];
    $exp_date = $_POST['exp_date'];
    $cvc = $_POST['cvc'];
    $name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
    //$cvc_v = "/[0-9]{3}$/";
    $exp_date_v = "/[0-9]{2}(-[0-9]{4})$/";
    
    
if(empty($f_name) || empty($l_name)  || empty($mobile) || empty($address1) || empty($account_name) || empty($card_no) || empty($card_H_N) || empty($exp_date) || empty($cvc) ){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
    
    if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div> <br>
		";
		exit();
	}
   if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b><i><strong>For Example : 03XXXXXXXXX </strong></b>
			</div>
		";
		exit();
	}

    
    
     if(!preg_match($number,$card_no)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Card number $card_no is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($card_no) == 13)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Card number must be 13 digit</b>
			</div>
		";
		exit();
	}

    
    if(!preg_match($name,$card_H_N)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Card Holder Name: $card_H_N is not valid</b>
			</div>
		";
		exit();
	}
    /*
    if(!preg_match($number,$exp_date)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> $exp_date is not valid Date</b>
			</div>
		";
		exit();
	}
    */
     if(!preg_match($exp_date_v,$exp_date)){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>EXP DATE $exp_date is not valid</b><small>Number Fellow its For Example : mm-yyyy </small>
			</div>
		";
		exit();
	}
   
    
    
	
    
    $id_c = $_SESSION["uid"];
    
  		$sql = "UPDATE `user_info` SET `first_name`='$f_name', `last_name`='$l_name', `mobile`='$mobile', `address1`='$address1', `address2`='$address2' where `user_id` = '$id_c' and `user_type`='customer' ";
		if(mysqli_query($con,$sql)){
            
            $sqlAB = "INSERT INTO `payment` 
		(`id`, `user_id`, `account_name`, `card_no`, `card_H_N`, `exp_date`, `cvc`, `address`) 
		VALUES (NULL, '$id_c', '$account_name', '$card_no', '$card_H_N', '$exp_date', '$cvc', '$address1-OR-$address2')";
           
            
		$run_query = mysqli_query($con,$sqlAB);
		
            
            
    $data = "SELECT * FROM cart where user_id = '$id_c' ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
                        $id_c_pro = $_view['p_id'];
                        $id_c_user = $_view['user_id'];
                        $id_c_pro_qty = $_view['qty'];
                        $sql = "INSERT INTO `orders`(`user_id`, `product_id`, `qty`, `payment_status`,`order_status`,`edit_status`) VALUES ('$id_c_user','$id_c_pro','$id_c_pro_qty','payment','process_order','uncomplete')";
            $run_query = mysqli_query($con,$sql);
                        
                    }
    
    
        
           if(!empty($run_query))
           {
           // echo 'Confirm Order';
               
               $d_a = "SELECT * FROM cart where user_id = '$id_c' ";
					$viewd_a = mysqli_query($con,$d_a);
					while($_viewd_a = mysqli_fetch_assoc($viewd_a))
					{		
                        $id_c_pr = $_viewd_a['id'];
                        if(!empty($id_c_pr))
                        {
                            $sq="DELETE FROM `cart` WHERE id='$id_c_pr' ";
                            $run_query = mysqli_query($con,$sq);
                        }
                        
                    }
               
                
               
               echo "<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b> Thank You Payment </b>
				</div>";
               
               
               echo"
               
               <script>
                    setTimeout(function(){
                  location.reload(true);
                  window.location = 'index.php'
                }, 5000);
                
               </script>
               ";
               
               
               
		          exit();
               
               
           }
            else
            {
                echo "<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Erro please contact of Admin </b>
				</div>";
              exit();
            }
   
            
            
            exit();
		}
        else{
            echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><i>Not Payment Received </i> Hi </b>  $f_name  $l_name Your Account is No: $card_no , Name: $card_H_N
			</div>
		";
		exit();
            
        }
	
	}
	
}



?>