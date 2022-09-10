<?php

class AdminList
{
	
	private $con;

	function __construct()
	{
		include_once("../../db/db2.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getAdminListMain(){
		$query = $this->con->query("SELECT * FROM `ADMIN` WHERE seller_or_admin ='admin'");
		$aar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$aar[] = $row;
			}
			return ['status'=> 202, 'message'=> $aar];
		}
		return ['status'=> 303, 'message'=> 'Not Record Of Admin'];
	}
    
    
    public function updateAdmin($POST = null){
		extract($POST);
		if (!empty($id) && !empty($email) && !empty($password)) {
            
            $password_h2 = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
            
			$q = $this->con->query("UPDATE admin SET `name`='$ad_name', `email`='$email', `password`='$password_h2', `cnic`='$cnic'  WHERE `id` = '$id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}
        else if(!empty($seller_id) && !empty($email) && !empty($password))
            {
            
                $password_h2 = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
            
			$q1 = $this->con->query("UPDATE admin SET `name`='$ad_name', `email`='$email', `password`='$password_h2'  WHERE `seller_id` = '$seller_id'");
            $q2 = $this->con->query("UPDATE user_info SET `first_name`='$ad_name', `email`='$email', `password`='$password_h2'  WHERE `user_id` = '$seller_id'");
			if ($q2) {
				return ['status'=> 202, 'message'=> 'All Updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
            
            
        }else{
			return ['status'=> 303, 'message'=>'Invalid'];
		}

	}
    
     public function deleteAdmin($cid = null){
		if ($cid != null) {
			$q = $this->con->query("DELETE FROM admin WHERE id = '$cid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Remove Admin'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid id'];
		}

	}

}


if (isset($_POST['GET_ADMIN'])) {
	$a = new AdminList();
	echo json_encode($a->getAdminListMain());
	exit();
	
}

if (isset($_POST['DELETE_Admin'])) {
	if (!empty($_POST['cid'])) {
		$p = new AdminList();
		echo json_encode($p->deleteAdmin($_POST['cid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



if (isset($_POST['edit_admin'])) {
	if (!empty($_POST['id'])) {
		$p = new AdminList();
		echo json_encode($p->updateAdmin($_POST));
		exit();
	}
    
    else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
    
}



?>