<?php

class ManagerList
{
	
	private $con;

	function __construct()
	{
		include_once("../../db/db2.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getManagerListMain(){
		$query = $this->con->query("SELECT * FROM `ADMIN` WHERE seller_or_admin='manager'");
		$aar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$aar[] = $row;
			}
			return ['status'=> 202, 'message'=> $aar];
		}
		return ['status'=> 303, 'message'=> 'Not Record Of Manager'];
	}
    
    
    public function updateAdmin($POST = null){
		extract($POST);
		if (!empty($id) && !empty($email) && !empty($password) && !empty($cnic)) {
            
            $password_h2 = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
            
			$q = $this->con->query("UPDATE admin SET `name`='$ad_name', `email`='$email', `password`='$password_h2', `cnic`='$cnic'  WHERE `id` = '$id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Manager List Update'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}
        else if(!empty($seller_id) && !empty($email) && !empty($password))
            {
            
                $password_h2 = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
            
			$q1 = $this->con->query("UPDATE admin SET `name`='$ad_name', `email`='$email', `password`='$password_h2'  WHERE `seller_id` = '$seller_id'");
            //$q2 = $this->con->query("UPDATE user_info SET `first_name`='$ad_name', `email`='$email', `password`='$password_h2'  WHERE `user_id` = '$seller_id'");
			if ($q1) {
				return ['status'=> 202, 'message'=> 'All Updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
            
            
        }else{
			return ['status'=> 303, 'message'=>'Invalid'];
		}

	}
    
     public function deleteManager($cid = null){
		if ($cid != null) {
			$q = $this->con->query("DELETE FROM admin WHERE id = '$cid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Remove Manager'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid id'];
		}

	}

}


if (isset($_POST['GET_ADMIN'])) {
	$a = new ManagerList();
	echo json_encode($a->getManagerListMain());
	exit();
	
}

if (isset($_POST['DELETE_Admin'])) {
	if (!empty($_POST['cid'])) {
		$p = new ManagerList();
		echo json_encode($p->deleteManager($_POST['cid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



if (isset($_POST['edit_admin'])) {
	if (!empty($_POST['id'])) {
		$p = new ManagerList();
		echo json_encode($p->updateAdmin($_POST));
		exit();
	}
    
    else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
    
}


if(isset($_POST["operation_admin"]))
{
	if($_POST["operation_admin"] == "Add_admin")
	{
	    $name = $_POST["ad_name"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $cnic = $_POST["cnic"];
		if(!empty($name) && !empty($email) && !empty($pass) && !empty($cnic)  )
		{
            
			include_once("../../db/db.php");
 
            $password_h2 = password_hash($pass, PASSWORD_BCRYPT, ["COST"=> 8]);
            
            
            $sql = "INSERT INTO `admin`(`name`, `email`, `password`, `seller_or_admin`,`cnic`,`seller_id`) VALUES ('$name', '$email', '$password_h2','manager','$cnic','0')";
            
            $run_query = mysqli_query($con,$sql);
           if(!empty($run_query))
           {
            echo 'New Manager Add';   
           }
            else
            {
              echo 'Not Insert Data Error of sql ';  
            }
			
		}
        else
        {
            echo 'Data Not Inserted Please Check Out';
            
        }
	}
    
}


?>