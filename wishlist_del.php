<?php
include "db/db.php";
session_start();
$Vr1=$_SESSION["uid"];
$product_query22 = "SELECT * FROM tbl_whish_list where  member_id='$Vr1' ";
$run_query22 = mysqli_query($con,$product_query22);
if(mysqli_num_rows($run_query22) > 0){

    $value = $_GET['value'];
     $product_del = "DELETE FROM tbl_whish_list where  product_id = '$value' ";
   
   if ($con->query($product_del) === TRUE) {
    echo "Record deleted successfully";
}

    
    header('Location: wishlist_profile.php');
    exit();


}


?>