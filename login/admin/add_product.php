<?php


function upload_image()
{
	if(isset($_FILES["user_image"]))
	{
		$extension = explode('.', $_FILES['user_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = '../Image_Product/' . $new_name;
		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
		return $new_name;
	}
}

if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}


        $product_name = $_POST["product_title"];
        $brand_name = $_POST["brand_id"];
        $condition_id = $_POST["product_condition_id"];
        $category = $_POST["category_id"];
        $qty = $_POST["product_qty"];
        $price = $_POST["product_price"];
        $desc = $_POST["product_desc"];
        $keyw = $_POST["product_keywords"];

		if(!empty($product_name))
		{

           include('../db/db.php');

            session_start();

            $_SESSION = $_SESSION['admin_id'];

            $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`, `product_condition`,`pro_user_add_id`) VALUES ('$category', '$brand_name', '$product_name', '$price', '$qty', '$desc', '$image', '$keyw', '$condition_id','$_SESSION')";

            $run_query = mysqli_query($con,$sql);
           if(!empty($run_query))
           {
            echo 'This Product '.$product_name.' Successfully Add';  
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
