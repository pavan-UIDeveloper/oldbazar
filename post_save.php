<?php
include "common/set_cookie.php";
include "header.php";
include "common/db.php";
$user_id = $_COOKIE['user'];
$product_tittle = $_POST['Product_Tittle'];
$Product_category = $_POST['Product_category'];
$Product_price = $_POST['Product_price'];
$Product_Description = $_POST['Product_Description'];
$phone_number = $_POST['phone_number'];
$loaction = $_POST['loaction'];
$product_image = $_FILES['product_image']['name'];


$insert_post = mysql_query("INSERT into posts (product_title,product_category,product_price,product_description,phone_number,city,product_image,user_id) values 
                                ('$product_tittle','$Product_category','$Product_price','$Product_Description','$phone_number','$loaction','$product_image','$user_id')");


$temp_path = $_FILES['product_image']['tmp_name'];
$latest_rec_id=mysql_insert_id();
if(!empty($_FILES['product_image'])){
if(!is_dir("useruploads/posts/".$latest_rec_id)){

    mkdir("useruploads/posts/".$latest_rec_id);
}
}
$target_path = "useruploads/posts/".$latest_rec_id."/$product_image";

if(!empty($_FILES['product_image'])){
move_uploaded_file($temp_path, $target_path);

}

    header('location:add_post.php?msg=success');

   


?>

 