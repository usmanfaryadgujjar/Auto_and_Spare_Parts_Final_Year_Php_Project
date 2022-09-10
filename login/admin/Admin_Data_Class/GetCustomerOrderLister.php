<?php 
session_start();
include"../../db/db.php";
class Customers
{
	
	private $con;

	function __construct()
	{
		include_once("../../db/db2.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getCustomers(){
		$query = $this->con->query("SELECT `user_id`, `cnic`,`first_name`, `last_name`, `email`, `mobile`, `user_type`, `address1`, `address2` FROM `user_info` where user_type='customer'");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'Not Record Of customer data'];
	}


	public function getCustomersOrder(){
		$query = $this->con->query("SELECT o.order_id, o.user_id, o.product_id, o.edit_status, o.qty, o.payment_status,o.order_status, p.product_title, p.product_image FROM orders o JOIN products p ON o.product_id = p.product_id");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Order'];
	}
   
     public function updateOrderList($POST = null){
		extract($POST);
		if (!empty($order_id) && !empty($user_id) && !empty($order_status))
        {
            $Name_U = $_SESSION['admin_name'];
            $Id_U = $_SESSION['admin_id'];

            
         	$q = $this->con->query("UPDATE orders SET `order_status`='$order_status', `edit_status`='*AD*$Name_U$Id_U'  WHERE `order_id` = '$order_id' and `user_id`='$user_id' ");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Updated Order List'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}
        else{
			return ['status'=> 303, 'message'=>'Invalid'];
		}

	}

    
    
    
    public function updateCustomerProfile($POST = null){
		extract($POST);
		if (!empty($cusf_name) && !empty($cusl_name) && !empty($email) && !empty($password) && !empty($customer_id) )
        {
            
            $password_P = md5($password);
            
         	$q = $this->con->query("UPDATE user_info SET `first_name`='$cusf_name', `last_name`='$cusl_name', `cnic`='$cnic', `password`='$password_P', `email`='$email'  WHERE `user_id`='$customer_id' ");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Updated Customer List'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}
        else{
			return ['status'=> 303, 'message'=>'Invalid'];
		}

	}

    public function deleteCustomer($pid = null){
		if ($pid != null) {
			$q = $this->con->query("DELETE FROM user_info WHERE user_id = '$pid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Remove Customer'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Customer id'];
		}

	}
  
    public function deleteCustomerOrders($pid = null){
		if ($pid != null) {
			$q = $this->con->query("DELETE FROM orders WHERE order_id = '$pid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Remove Order'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Orders id'];
		}

	}
	

}


if (isset($_POST["GET_CUSTOMERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomers());
		exit();
	}
}

if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}



if (isset($_POST['edit_customer'])) {
	if (!empty($_POST['order_id'])) {
		$p = new Customers();
		echo json_encode($p->updateOrderList($_POST));
		exit();
	}
    else if (!empty($_POST['customer_id'])) {
		$p = new Customers();
		echo json_encode($p->updateCustomerProfile($_POST));
		exit();
	}
    else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM orders 
  WHERE order_id LIKE '%".$search."%'
  OR user_id LIKE '%".$search."%' 
  OR payment_status LIKE '%".$search."%' 
  OR order_status LIKE '%".$search."%' 
  OR edit_status LIKE '%".$search."%' 
 ";

$output=0;
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
    
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["order_id"].'</td>
    <td>'.$row["user_id"].'</td>
    <td>'.$row["product_id"].'</td>
    <td>'.$row["qty"].'</td>
    <td>'.$row["payment_status"].'</td>
    <td>'.$row["order_status"].'</td>
    <td>'.$row["edit_status"].'</td>
   <td> <a class="btn btn-sm btn-info edit-customer-ord"><span style="display:none;">'.$row["order_id"].'</span><i class=" glyphicon glyphicon-pencil"></i></a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

}

if (isset($_POST['DELETE_Customer'])) {
	$p = new Customers();
	if (isset($_SESSION['admin_id'])) {
		if(!empty($_POST['pid'])){
			$pid = $_POST['pid'];
			echo json_encode($p->deleteCustomer($pid));
			exit();
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Invalid Customer id']);
			exit();
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid Session']);
	}


}

if (isset($_POST['DELETE_Customer_order'])) {
	$p = new Customers();
	if (isset($_SESSION['admin_id'])) {
		if(!empty($_POST['pid'])){
			$pid = $_POST['pid'];
			echo json_encode($p->deleteCustomerOrders($pid));
			exit();
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Invalid Orders id ']);
			exit();
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid Session']);
	}


}


?>