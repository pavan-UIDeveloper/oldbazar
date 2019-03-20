<?php
include "common/set_cookie.php";

include "common/db.php";

$pid = $_GET['pid'];
$delete_post=mysql_query("DELETE FROM posts WHERE post_id = $pid");
 
header('location:myaccount.php');
?>

 