<?php
$userloggedin = false;
if(!empty($_COOKIE['user'])){
	$userloggedin = true;
}
if(!$userloggedin){
	header("Location:login.php");
}
?>