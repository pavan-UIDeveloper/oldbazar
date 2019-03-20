<?php 

include "header.php";
include "common/db.php";
if(!empty($_GET['pid'])){
$pid=$_GET['pid'];


$select_post = mysql_query("SELECT * FROM posts where post_id='$pid'");
$post_res=mysql_fetch_assoc($select_post); 

$po_cat = $post_res['product_category'];
$select_cat = mysql_query("SELECT * FROM categories where rec_id='$po_cat'");
$cat_res=mysql_fetch_assoc($select_cat); 
}
?>

   

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop.php?cid=<?php echo $post_res['product_category']; ?>"><?php  echo $cat_res['category_name']; ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo  $post_res['product_title']?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                    <?php 
                   

                    ?>
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="useruploads/posts/<?php echo $pid; ?>/<?php echo $post_res['product_image']; ?>">
                                            <img class="d-block w-75" src="useruploads/posts/<?php echo $pid; ?>/<?php echo $post_res['product_image']; ?>" alt="First slide">
                                        </a>
                                    </div>  
                                                                             

                            </div>       
                                    </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">&#8377; <?php echo $post_res['product_price']; ?></p>
                                <a href="product-details.html">
                                    <h6><?php echo $post_res['product_title']; ?></h6>
                                </a>
                               
                            </div>

                            <div class="short_overview my-5">
                                <p><?php echo $post_res['product_description']; ?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post">
                               
                                <button type="button" name="addtocart" value="5" class="btn amado-btn">Contact: <?php echo $post_res['phone_number']; ?></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    

    <!-- ##### Footer Area Start ##### -->
    
    <?php 
    include "footer.php";
    ?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>