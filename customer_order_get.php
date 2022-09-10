<?php 
session_start();

class Customers_view
{
	
	private $con;

	function __construct()
	{
		//include_once("db/db2.php");
		include "db/db2.php";
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getCustomersOrderView(){
        $id_us =$_SESSION["uid"];
		$query = $this->con->query("SELECT o.order_id, o.product_id, o.qty, o.payment_status,o.order_status, p.product_title, p.product_image FROM orders o JOIN products p ON o.product_id = p.product_id where o.user_id='$id_us'");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Order'];
	}
	

}


if (isset($_POST["GET_CUSTOMER_ORDERS_view"])) {
	if (isset($_SESSION["uid"])) {
		$c = new Customers_view();
		echo json_encode($c->getCustomersOrderView());
		exit();
	}
}


?>