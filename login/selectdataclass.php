<?php 
session_start();

class sellerlogin
{
	
	private $con;

	function __construct()
	{
		include_once("db.php");
		$db = new Database();
		$this->con = $db->connect();
	}
    
	public function loginAdmin($email, $password){
		$qA = $this->con->query("SELECT * FROM admin WHERE email = '$email' and seller_or_admin='admin'  LIMIT 1");
        $qB = $this->con->query("SELECT * FROM admin WHERE email = '$email' and seller_or_admin='seller'  LIMIT 1");
        $q3 = $this->con->query("SELECT * FROM admin WHERE email = '$email' and seller_or_admin='manager'  LIMIT 1");
        $q4 = $this->con->query("SELECT * FROM user_info WHERE email = '$email' and user_type='customer'  LIMIT 1");
		if ($qA->num_rows > 0) {
			$rowA = $qA->fetch_assoc();
			if (password_verify($password, $rowA['password'])) {
				$_SESSION['admin_name'] = $rowA['name'];
				$_SESSION['admin_id'] = $rowA['id'];
				return ['status'=> 201, 'message'=> 'Login Successful'];
			}else{
				return ['status'=> 303, 'message'=> 'Your Admin Account Password is wrong Pleasee Try Again '];
			}
		}
        else if($qB->num_rows > 0) {
			$rowB = $qB->fetch_assoc();
			if (password_verify($password, $rowB['password'])) {
				$_SESSION['admin_name'] = $rowB['name'];
				$_SESSION['admin_id'] = $rowB['id'];
				return ['status'=> 202, 'message'=> 'Login Successful'];
			}else{
				return ['status'=> 303, 'message'=> 'Your Seller Account Password is wrong Pleasee Try Again'];
			}
		}
        else if($q3->num_rows > 0) {
			$row3 = $q3->fetch_assoc();
			if (password_verify($password, $row3['password'])) {
				$_SESSION['admin_name'] = $row3['name'];
				$_SESSION['admin_id'] = $row3['id'];
				return ['status'=> 203, 'message'=> 'Login Successful'];
			}else{
				return ['status'=> 303, 'message'=> 'Your Manager Account Password is wrong Pleasee Try Again'];
			}
		}
        else if($q4->num_rows > 0) {
			return ['status'=> 303, 'message'=> 'aaaaaaAccount is Register Customer Account Please Goto Back Home Page And MyAccount -> Customer Login !'];
			$row4 = $q4->fetch_assoc();
			if (!empty($row4)) {
				return ['status'=> 303, 'message'=> 'Your Account is Register Customer Account Please Goto Back Home Page And MyAccount -> Customer Login !'];
			}
		}
        else{
			return ['status'=> 303, 'message'=> 'Account not created This Email'];
		}
        
        
	}

}

if (isset($_POST['admin_login'])) {
	extract($_POST);
	if (!empty($email) && !empty($password)) {
		$c = new sellerlogin();
		$result = $c->loginAdmin($email, $password);
		echo json_encode($result);
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}
}


?>