<?php

include "common/db.php";


if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $query = mysql_query("SELECT * FROM posts WHERE product_title LIKE '%$searchq%' OR product_category LIKE '%$searchq%'") or die("could not search");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output = 'There was no search results!';
    }else{
        while($row = mysql_fetch_array($query)){
            $fname = $row['product_title'];
            $lname = $row['product_category'];
            $id = $row['post_id'];

            $output .= '<div>'.$fname.''.$lname.'</div>';
        }
    }
}

?>