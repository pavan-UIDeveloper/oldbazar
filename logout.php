
<?php
if(isset($_COOKIE['user'])):
    setcookie('user', '', time()-7000000, '/');
    setcookie("user",$fetch_query['rec_id'], time() + (86400), "/");
endif;
header('location:index.php');

 ?>