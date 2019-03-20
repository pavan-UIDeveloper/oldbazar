<?php
include "common/db.php";


$fn = $_POST["fn"];
$ln = $_POST["ln"];
$email = $_POST["email"];
$ph = $_POST["ph"];
$pwd = $_POST["pwd"];
$addr = $_POST["addr"];
$city = $_POST["city"];

$insert_reg = "INSERT into users (first_name,last_name,email,phone,address,city,password) VALUES ('$fn','$ln','$email','$ph','$addr','$city','$pwd')";
$insert_query= mysql_query($insert_reg);
if($insert_query){
header('location:register.php?msg=success');
}
else{
    header('location:register.php?msg=fail');

}
        ?>