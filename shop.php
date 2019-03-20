
<?php

include "header.php";
include "common/db.php";
$no_of_records = 6;

if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $query = mysql_query("SELECT * FROM posts WHERE product_title LIKE '%$searchq%' OR product_category LIKE '%$searchq%'") or die("could not search");
}
if(!empty($_GET['select'])){
    $no_of_records = $_GET['select'];
    
}
$pageNumber = 1;



if(!empty($_GET['page'])){
	$pageNumber = $_GET['page'];
}

$cid="";
$whereCondition="";
if(!empty($_GET['cid'])){
    $cid=$_GET['cid'];
	$whereCondition = " where product_category='$cid'";
}



$position = ($pageNumber-1)*$no_of_records;

$count_query = "SELECT count(product_title) as cnt FROM posts $whereCondition";
$count_result = mysql_query($count_query) or die(mysql_error());

$count_res = mysql_fetch_assoc($count_result);
$count = $count_res['cnt'];

$no_of_pages = ceil($count / $no_of_records);

$select_post = mysql_query("SELECT * FROM posts $whereCondition LIMIT $position,$no_of_records");


?>
 <div class="shop_sidebar_area">

<!-- ##### Single Widget ##### -->
<div class="widget catagory mb-50">
    <!-- Widget Title -->
    <h6 class="widget-title mb-30">Catagories</h6>

    <!--  Catagories  -->
    <div  class="catagories-menu">
        <ul class="additional-menu" id="sidemenu">
            <li class="<?php if($cid==2){ echo 'active'; } ?>"><a href="shop.php?cid=2">Bikes</a></li>
            <li class="<?php if($cid==1){ echo 'active'; } ?>"><a href="shop.php?cid=1">Cars</a></li>
            <li class="<?php if($cid==5){ echo 'active'; } ?>"><a href="shop.php?cid=5">Electronics</a></li>
            <li class="<?php if($cid==3){ echo 'active'; } ?>"><a href="shop.php?cid=3">Furniture</a></li>
            <li class="<?php if($cid==6){ echo 'active'; } ?>"><a href="shop.php?cid=6">Mobiles</a></li>
            <li class="<?php if($cid==4){ echo 'active'; } ?>"><a href="shop.php?cid=4">Home Decor</a></li>

        </ul>
    </div>
</div>

<!-- ##### Single Widget ##### -->


<!-- ##### Single Widget ##### -->



</div>

<div class="amado_product_area section-padding-100">
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                <!-- Total Products -->
                <div class="total-products">
                    <p>Showing <?php echo $position+1; ?>-<?php echo $position+$no_of_records; ?> 0f <?php echo $no_of_pages; ?> </p>
                    <div class="view d-flex">
                        <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- Sorting -->
                <div class="product-sorting d-flex">
                    <div class="sort-by-date d-flex align-items-center mr-15">
                        <p>Sort by</p>
                        <form action="#" method="get">
                            <select name="select" id="sortBydate">
                                <option value="value">Date</option>
                                <option value="value">Newest</option>
                                <option value="value">Popular</option>
                            </select>
                        </form>
                    </div>
                    <div class="view-product d-flex align-items-center">
                        <p>View</p>
                        <form action="shop.php" name="myform" method="GET">
                            <select name="select" id="viewProduct" onchange="myform.submit();">
                                <?php for($i=1;$i<=10;$i++){ ?>
                                <option value="<?php echo $i ?>"><?php if(empty($_GET['select'])){ $i=$i; }else { $i=($_GET['select']); } echo $i ?></option>
                                <?php } ?>
                                </select>
                                <input type="hidden" name="cid" value="<?php echo $cid; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>


 <div class="row">        
  
    <?php  if (!empty($_POST['search'])){

while($row = mysql_fetch_array($query)) {?>

       <!-- Single Product Area -->
    
    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
            <div class="single-product-wrapper">
                <!-- Product Image -->
                <div class="product-img">
                <a href="product-details.php?pid=<?php echo $row['post_id']; ?>"><img src="<?php echo 'useruploads/posts/'.$row['post_id'].'/'.$row['product_image']; ?>" alt=""></a>
                </div>

                <!-- Product Description -->
                <div class="product-description d-flex align-items-center justify-content-between">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">&#8377; <?php echo $row['product_price']; ?></p>
                        <a href="product-details.php?pid=<?php echo $row['post_id']; ?>">
                            <h6><?php echo $row['product_title']; ?></h6>
                        </a>
                        </div>
                    
                </div>
            </div>
    </div>
    <?php } }?>            
</div>


<?php

if(!empty($select_post) and empty($_POST['search'])){
    while($post_res = mysql_fetch_assoc($select_post)){
?>

<div class="col-12 col-sm-6 col-md-12 col-xl-6">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
        <a href="product-details.php?pid=<?php echo $post_res['post_id']; ?>"><img src="<?php echo 'useruploads/posts/'.$post_res['post_id'].'/'.$post_res['product_image']; ?>" alt=""></a>
        </div>

        <!-- Product Description -->
        <div class="product-description d-flex align-items-center justify-content-between">
            <!-- Product Meta Data -->
            <div class="product-meta-data">
                <div class="line"></div>
                <p class="product-price">&#8377; <?php echo $post_res['product_price']; ?></p>
                <a href="product-details.php?pid=<?php echo $post_res['post_id']; ?>">
                    <h6><?php echo $post_res['product_title']; ?></h6>
                </a>
            </div>
            
        </div>
    </div>
</div>
            <?php } }?>
       </div>
       </div>
          
    <div class="row">
        <div class="col-12">
            <!-- Pagination -->


            <?php
            if(($count>$no_of_records) and empty($_POST['search'])){?>    
            <nav aria-label="navigation">
                <ul class="pagination justify-content-end mt-50">
                <?php
			for($i=1;$i<=$no_of_pages;$i++){
				$activeClass = "";
				if($pageNumber == $i){
					$activeClass = "active";
				}
				?>
                    <li class="page-item <?php echo $activeClass;?>"><a class="page-link" href="shop.php?cid=<?php echo $cid ?>&page=<?php echo $i;?>">0<?php echo $i;?>.</a></li>
                    <?php }
			?>   
                </ul>
            </nav>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->


                <?php
            include "footer.php";
            ?>
 
