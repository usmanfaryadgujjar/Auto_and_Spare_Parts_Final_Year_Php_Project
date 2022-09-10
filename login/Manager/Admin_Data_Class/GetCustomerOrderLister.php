<?php 
session_start();
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
		$query = $this->con->query("SELECT `user_id`, `first_name`, `last_name`, `email`, `mobile`, `user_type`, `address1`, `address2` FROM `user_info`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no customer data'];
	}


	public function getCustomersOrder(){
		$query = $this->con->query("SELECT o.order_id, o.user_id, o.product_id, o.qty, o.payment_status,o.order_status, p.product_title, p.product_image FROM orders o JOIN products p ON o.product_id = p.product_id where o.edit_status ='uncomplete'");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Order'];
	}
    
    
    
    
    public function updateAdmin($POST = null){
		extract($POST);
		if (!empty($order_id) && !empty($user_id) && !empty($order_status))
        {
            $Name_U = $_SESSION['admin_name'];
            $Id_U = $_SESSION['admin_id'];

            
         	$q = $this->con->query("UPDATE orders SET `order_status`='$order_status', `edit_status`='**MAG-$Name_U$Id_U'  WHERE `order_id` = '$order_id' and `user_id`='$user_id' ");
			if ($q) {
				return ['status'=> 202, 'message'=> 'updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}
        else{
			return ['status'=> 303, 'message'=>'Invalid'];
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


if (isset($_POST['edit_admin'])) {
	if (!empty($_POST['order_id'])) {
		$p = new Customers();
		echo json_encode($p->updateAdmin($_POST));
		exit();
	}
    else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



?>