
<?php

include "header.php";
include "common/db.php";

if(!empty($_GET['cid'])){
$cid=$_GET['cid'];

$select_post = mysql_query("SELECT * FROM posts where product_category='$cid'");
}
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
<div class="widget brands mb-50">
    <!-- Widget Title -->
    <h6 class="widget-title mb-30">Brands</h6>

    <div class="widget-desc">
        <!-- Single Form Check -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="amado">
            <label class="form-check-label" for="amado">Amado</label>
        </div>
        <!-- Single Form Check -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="ikea">
            <label class="form-check-label" for="ikea">Ikea</label>
        </div>
        <!-- Single Form Check -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="furniture">
            <label class="form-check-label" for="furniture">Furniture Inc</label>
        </div>
        <!-- Single Form Check -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="factory">
            <label class="form-check-label" for="factory">The factory</label>
        </div>
        <!-- Single Form Check -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="artdeco">
            <label class="form-check-label" for="artdeco">Artdeco</label>
        </div>
    </div>
</div>

<!-- ##### Single Widget ##### -->


    
</div>
</div>

<div class="amado_product_area section-padding-100">
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                <!-- Total Products -->
                <div class="total-products">
                    <p>Showing 1-8 0f 25</p>
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
                        <form action="#" method="get">
                            <select name="select" id="viewProduct">
                                <option value="value">12</option>
                                <option value="value">24</option>
                                <option value="value">48</option>
                                <option value="value">96</option>
                            </select>
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

        if(!empty($select_post)){
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
            <nav aria-label="navigation">
                <ul class="pagination justify-content-end mt-50">
                    <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                    <li class="page-item"><a class="page-link" href="#">02.</a></li>
                    <li class="page-item"><a class="page-link" href="#">03.</a></li>
                    <li class="page-item"><a class="page-link" href="#">04.</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->


                <?php
            include "footer.php";
            ?>
 