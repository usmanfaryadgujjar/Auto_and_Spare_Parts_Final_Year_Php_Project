<?php 

session_start();

include('db2.php');

if(isset($_POST["confirmbycash"])){

    $id_c = $_SESSION["uid"];
            
    $data = "SELECT * FROM cart where user_id = '$id_c' ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
                        $id_c_pro = $_view['p_id'];
                        $id_c_user = $_view['user_id'];
                        $id_c_pro_qty = $_view['qty'];
                        $sql = "INSERT INTO `orders`(`user_id`, `product_id`, `qty`, `payment_status`,`order_status`,`edit_status`) VALUES ('$id_c_user','$id_c_pro','$id_c_pro_qty','cash_on_delivery','process_order','uncomplete')";
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
						<b>Your Order Is Cash On Delivery Confirm Thank You </b>
				</div>";
               
               
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
    
    
}






?>