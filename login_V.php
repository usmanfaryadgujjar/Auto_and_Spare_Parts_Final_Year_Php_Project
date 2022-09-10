

<?php
include "db/db.php";


session_start();

if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = md5($_POST["password"]);
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);

if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["first_name"];
        $_SESSION["lnam"] = $row["last_name"];
		
    
    $FT = $_SESSION["name"];
    $LT = $_SESSION["lnam"];
     echo"<div class='alert alert-success' role='alert'>Welcome <b>$FT  $LT</b><br>login is Success
     
     
     </div>";
    
            
    
			exit();
		}else{
			echo "<div class='alert alert-danger' role='alert'><span style='color:red;'>Please Check Email And Password  Again Enter </span></div>";
			exit();
		}
	
}

?>