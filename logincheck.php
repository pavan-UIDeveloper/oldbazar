<?php

include "common/db.php";


$email=$_POST['email'];
$pwd = $_POST['pwd'];

$select_query = "SELECT * From users where email='$email' and password='$pwd'";
$select_result = mysql_query($select_query);

$numrow=mysql_num_rows($select_result);
if($numrow>0){
    $fetch_query=mysql_fetch_assoc($select_result);
    setcookie("user",$fetch_query['rec_id'], time() + (86400), "/");

    header('location:myaccount.php');
}
else{
    header('location:login.php?msg=fail');

}
?>