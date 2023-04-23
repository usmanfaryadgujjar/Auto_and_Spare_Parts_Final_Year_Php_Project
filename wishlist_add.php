<?php
include "db/db.php";
session_start();
$Vr1=$_SESSION["uid"];
$product_query22 = "SELECT * FROM tbl_whish_list where  member_id='$Vr1' ";
$run_query22 = mysqli_query($con,$product_query22);
if(mysqli_num_rows($run_query22) > 0){

    $values_p = $_GET['values'];
    //$values_u = $_GET['value_user'];


    $sql_p = "INSERT INTO cart (p_id, user_id,qty) VALUES ('$values_p', '$Vr1','2')";

     //$product_del = "DELETE FROM tbl_whish_list where  product_id = '$value' ";
   
   if ($con->query($sql_p) === TRUE) {
    echo "Record successfully";
}

    
    header('Location: Customer_cart.php');
    exit();


}


?>