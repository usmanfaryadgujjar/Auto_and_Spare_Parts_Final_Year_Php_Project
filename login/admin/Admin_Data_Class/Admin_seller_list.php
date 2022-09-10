<?php
session_start();


class SellerAdmin
{
	
	private $con;

	function __construct()
	{
		include_once("../../db/db2.php");
		$db = new Database();
		$this->con = $db->connect();
	}

    
	public function getAdminSellerList(){
		$query = $this->con->query("SELECT ad.seller_id, ad.cnic, us.cnic, us.user_id,  ad.name, ad.password, ad.email, ad.seller_or_admin, us.address1, us.address2, us.mobile, us.last_name FROM  admin ad JOIN user_info us ON ad.seller_id =us.user_id  WHERE seller_or_admin='seller'");
		$ar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'Not Record Of Seller '];
	}
    
    
    
    public function deleteseller($cid = null){
		if ($cid != null) {
			$qq = $this->con->query("DELETE FROM `admin` WHERE `seller_id` = '$cid'");
            $q2 = $this->con->query("DELETE FROM `user_info` WHERE `user_id` = '$cid'");
			if (!empty($q2) && !empty($qq)) {
				return ['status'=> 202, 'message'=> 'Remove seller '];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid id'];
		}

	}
    
    
    
    public function updateSeller($POST = null){
		extract($POST);
	    
        if(!empty($seller_id) && !empty($email) && !empty($password) && !empty($cnic))
            {
            
                $password_h2 = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
            
			$q1 = $this->con->query("UPDATE admin SET `name`='$ad_name', `email`='$email', `password`='$password_h2' , cnic='$cnic'  WHERE `seller_id` = '$seller_id'");
            $q2 = $this->con->query("UPDATE user_info SET `first_name`='$ad_name', `email`='$email', `password`='$password_h2', cnic='$cnic'  WHERE `user_id` = '$seller_id'");
			if ($q2) {
				return ['status'=> 202, 'message'=> 'Update List Of Seller'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
            
            
        }
        else{
			return ['status'=> 303, 'message'=>'Invalid'];
		}

	}
	
    


}


if (isset($_POST['GET_ADMIN'])) {
	$a = new SellerAdmin();
	echo json_encode($a->getAdminSellerList());
	exit();
	
}


if (isset($_POST['DELETE_SELLER'])) {
	if (!empty($_POST['cid'])) {
		$p = new SellerAdmin();
		echo json_encode($p->deleteseller($_POST['cid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



if (isset($_POST['edit_admin'])) {
	if(!empty($_POST['seller_id']))
    {
        $p = new SellerAdmin();
		echo json_encode($p->updateSeller($_POST));
		exit();
        
    }
    else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}





?>